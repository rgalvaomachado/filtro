<?php

class Imagem{

    public function criarImagem($image, $uniqidFiltro, $image_width, $image_height){
        // SALVAR IMAGEM
        $base64_string = $image;
        $data = explode( ',', $base64_string );
        $base64_img     = str_replace(' ', '+',$data[1]);
        $data           = base64_decode($base64_img);

        $output_file = 'tmp/'.uniqid().'.png';
        file_put_contents($output_file, $data);
        $prop_file = getimagesize($output_file);


        //TRATAR IMG
        switch ($prop_file['mime']) {
            case 'image/jpeg':
                $source_gdim = imagecreatefromjpeg($output_file);
                break;
            case 'image/png':
                $source_gdim = imagecreatefrompng($output_file);
                break;
            default:
                echo 'tipo nao encontrado';
                break;
        }
        unlink($output_file);

        $source_width = imagesx($source_gdim);
        $source_height = imagesy($source_gdim);

        $source_aspect_ratio = $source_width / $source_height;
        $desired_aspect_ratio = $image_width / $image_height;

        if ($source_aspect_ratio > $desired_aspect_ratio) {
            $temp_height = $image_height;
            $temp_width = ( int ) ($image_height * $source_aspect_ratio);
        } else {
            $temp_width = $image_width;
            $temp_height = ( int ) ($image_width / $source_aspect_ratio);
        }

        $temp_gdim = imagecreatetruecolor($temp_width, $temp_height);
        imagecopyresampled(
            $temp_gdim,
            $source_gdim,
            0, 0,
            0, 0,
            $temp_width, $temp_height,
            $source_width, $source_height
        );

        $x0 = floor(($temp_width - $image_width) / 2);
        $y0 = floor(($temp_height - $image_height) / 2);
        $imagem_tirada = imagecreatetruecolor($image_width, $image_height);

        imagecopy($imagem_tirada,$temp_gdim,0, 0,$x0,$y0,$image_width, $image_height);

        //JUNTA FILTRO E IMG
        $TempPngFile = imagecreatetruecolor($image_width, $image_height);
        $img1 = imageCreateFromPng('public/filtro/'.$uniqidFiltro.'.png');
        imagecopy($TempPngFile, $imagem_tirada, 0, 0, 0, 0, imagesx($imagem_tirada), imagesy($imagem_tirada));
        imagecopy($TempPngFile, $img1, 0, 0, 0, 0, imagesx($img1), imagesy($img1));

        //SALVA TMP
        ob_start();  
        imagepng($TempPngFile);
        $imagedata = ob_get_clean();
        ob_end_flush();
        $base64_img     = str_replace('data:image/png;base64,', '', base64_encode($imagedata));
        $base64_img     = str_replace(' ', '+', $base64_img);
        $data           = base64_decode($base64_img);

        $uniqid_tmp = uniqid();
        $path_tmp = 'tmp/'.$uniqid_tmp.'.png';
        file_put_contents($path_tmp, $data);

        return json_encode([
            "access" => true,
            "uniqid_tmp" => $uniqid_tmp
        ]);
    }

    public function criar($post){
        switch($post['tipo']){
            case '2':
                return $this->criarQuadrado($post);
                break;
            case '3':
                return $this->criarVertical($post);
                break;
            default:
                echo 'tipo nao encontrado';
                break;
        }
    }

    public function criarVertical($post){
        $image_width = 1080;
        $image_height = 1920;
        $image = $post['imagem'];
        $uniqidFiltro = $post['uniqidFiltro'];
        return $this->criarImagem($image, $uniqidFiltro, $image_width, $image_height);
    }

    public function criarQuadrado($post){
        $image_width = 1080;
        $image_height = 1080;
        $image = $post['imagem'];
        $uniqidFiltro = $post['uniqidFiltro'];
        return $this->criarImagem($image, $uniqidFiltro, $image_width, $image_height);
    }
}
?>