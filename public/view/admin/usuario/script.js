$(document).ready(function() {
    $('#criar').submit(function(e) {
        e.preventDefault();
        var nome = $("#nome").val();
        var email = $("#email").val();
        var senha = $("#senha").val();
        var tipo = $("#tipo").val();
        var cliente = $("#cliente").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "criarUsuario",
                nome: nome,
                email: email,
                senha: senha,
                tipo: tipo,
                cliente: cliente,
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
                window.location.assign("/admin/usuario");
            }
        });
    });

    $('#editar').submit(function(e) {
        e.preventDefault();
        var usuario = $("#usuario").val();
        var nome = $("#nome").val();
        var email = $("#email").val();
        var senha = $("#senha").val();
        var tipo = $("#tipo").val();
        var cliente = $("#cliente").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "editarUsuario",
                id: usuario,
                nome: nome,
                email: email,
                senha: senha,
                tipo: tipo,
                cliente: cliente,
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
                window.location.assign("/admin/usuario");
            }
        });
    });

    $('#deletar').submit(function(e) {
        e.preventDefault();
        var usuario = $("#usuario").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "deletarUsuario",
                id: usuario,
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
                window.location.assign("/admin/usuario");
            }
        });
    });
    
    if($('#tipo').val() == 1){
        $('#clientes').hide();
    }else{
        $('#clientes').show();
    }

    $('#tipo').on('change', function () {
        if(this.value == 1){
            $('#clientes').hide();
        }else{
            $('#clientes').show();
        }
    });
});