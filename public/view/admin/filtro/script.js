$('#criar').submit(function(e) {
    e.preventDefault();
    var nome = $("#nome").val();
    var path = $("#path").val();
    var tipo = $("#tipo").val();
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
            },
            complete: function(response) {
                var response = JSON.parse(response.responseText);
                if(response.access){
                    window.location.assign("/admin")
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