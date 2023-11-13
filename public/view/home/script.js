$(document).ready(function() {
    $('#logout').submit(function(e) {
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "/controller/Controller.php",
            data: {
                metodo: "logout",
            },
            complete: function(response) {
                var response = JSON.parse(response.responseText);
                if(response.access){
                    window.location.assign("/")
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
    })
});