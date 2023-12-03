<?php
    class Router{
        function getURL(){
            $uri = $_SERVER["REQUEST_URI"];
            $parametros = explode('/',$uri);
            unset($parametros[0]);
            $parametros = array_values($parametros);
            return implode('/',$parametros);
        }

        function path($url, $routes){
            $url = explode('?',$url);
            unset($url[1]);
            $url = implode('',$url);

            if(is_file($url)){
                return $url;
            }
    
            $public_url = "public/".$url;

            if(is_file($public_url)){
                return $public_url;
            }
            
            if (!isset($_SESSION['modo']) || $_SESSION['modo'] == ''){
                $url = "login";
            }

            if ($url == "" && isset($_SESSION['modo']) && $_SESSION['modo'] == 'admin'){
                header('Location: admin/home');
            }

            if ($url == ""){
                $url = "home";
            }

            if ($url == "admin" && isset($_SESSION['modo']) && $_SESSION['modo'] == 'admin'){
                $url = "admin/home";
            } elseif ($url == "" && isset($_SESSION['modo']) && $_SESSION['modo'] == 'usuario' ){
                $url = "home";
            }
    
            include_once('public/head.php');

            foreach($routes as $route){
                $RoutePath = $route[0];
                $RouteView = $route[1];
                if ($url == $RoutePath){
                    return $RouteView;
                }
            }
        }

        function run($routes){
            $url = $this->getURL();
            $path = $this->path($url, $routes);
            if(isset($path)){
                $extension = substr($path, -3);
                if ($extension == 'png'){
                    $c = file_get_contents($path,true);
                    $size = filesize($path);
                    header ('Content-Type: image/png');
                    header ("Content-length: $size");
                    echo $c;
                }else{
                    if($path){
                        include_once $path;
                    } else {
                        include_once ('404.html');
                    }
                }
            }
        }
    }
?>