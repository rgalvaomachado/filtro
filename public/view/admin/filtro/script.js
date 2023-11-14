$(document).ready(function() {
    $('#criar').submit(function(e) {
        e.preventDefault();
        var nome = $("#nome").val();
        var path = $("#path").val();
        var tipo = $("#tipo").val();
        var cliente = $("#cliente").val();
        var filesSelected = document.getElementById("filtro").files;
        var fileToLoad = filesSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoadedEvent) {
            var filtro = fileLoadedEvent.target.result;
            $.ajax({
                method: "POST",
                url: "/controller/Controller.php",
                data: {
                    metodo: "criarFiltro",
                    nome: nome,
                    path: path,
                    tipo: tipo,
                    filtro: filtro,
                    cliente: cliente,
                },
                complete: function(response) {
                    var response = JSON.parse(response.responseText);
                    if(response.access){
                        window.location.assign("/admin/filtro")
                    }
                    // }else{
                    //     $('.error_login').show();
                    //     const alert = document.getElementById("messageAlert");
                    //     alert.innerHTML = response.message;
                    //     setTimeout(function(){
                    //         alert.innerHTML = "";
                    //         $('.error_login').hide();
                    //     }, 2000);
                    // }
                }
            });
        }
        fileReader.readAsDataURL(fileToLoad);
    })

    // $('#editar').submit(function(e) {
    //     e.preventDefault();
    //     var filtro = $("#filtro").val();
    //     var nome = $("#nome").val();
    //     $.ajax({
    //         method: "POST",
    //         url: "/controller/Controller.php",
    //         data: {
    //             metodo: "editarCliente",
    //             id: filtro,
    //             nome: nome
    //         },
    //         complete: function(response) {
    //             var response = JSON.parse(response.responseText);
    //             const alert = document.getElementById("messageAlert");
    //             alert.innerHTML = response.message;
    //             if(response.access){
    //                 alert.style.color = "green";
    //                 setTimeout(function(){
    //                     alert.innerHTML = "";
    //                 }, 3000);
    //             }else{
    //                 alert.style.color = "red";
    //                 setTimeout(function(){
    //                     alert.innerHTML = "";
    //                 }, 3000);
    //             }
    //             window.location.assign("/admin/filtro");
    //         }
    //     });
    // });

    $('#deletar').submit(function(e) {
        e.preventDefault();
        var filtro = $("#filtro").val();
        var uniqid = $("#uniqid").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "deletarFiltro",
                id: filtro,
                uniqid: uniqid,
            },
            complete: function(response) {
                var response = JSON.parse(response.responseText);
                const alert = document.getElementById("messageAlert");
                alert.innerHTML = response.message;
                if(response.access){
                    alert.style.color = "green";
                    setTimeout(function(){
                        alert.innerHTML = "";
                    }, 3000);
                }else{
                    alert.style.color = "red";
                    setTimeout(function(){
                        alert.innerHTML = "";
                    }, 3000);
                }
                window.location.assign("/admin/filtro");
            }
        });
    });
});