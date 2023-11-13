$(document).ready(function() {
    $('#criar').submit(function(e) {
        e.preventDefault();
        var nome = $("#nome").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "criarCliente",
                nome: nome,
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
                window.location.assign("/admin/cliente");
            }
        });
    });

    $('#editar').submit(function(e) {
        e.preventDefault();
        var cliente = $("#cliente").val();
        var nome = $("#nome").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "editarCliente",
                id: cliente,
                nome: nome
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
                window.location.assign("/admin/cliente");
            }
        });
    });

    $('#deletar').submit(function(e) {
        e.preventDefault();
        var cliente = $("#cliente").val();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "deletarCliente",
                id: cliente,
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
                window.location.assign("/admin/cliente");
            }
        });
    });
});