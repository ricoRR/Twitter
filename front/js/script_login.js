$(document).ready(function() {
    console.log("ready!")

    $(document).on("submit", function (event) {

        event.preventDefault()
        console.log(event)

        const form = event.currentTarget
        console.log("FORM",form)

        let email = document.getElementById("email").value;
        let password = document.getElementById("pwd").value;

        $.ajax({
            type:'post',
            url: '../../login_hub.php',
            data: {
                email: email,
                password: password,
            },
            dataType:'json',
            success:function(data){ 
                window.location.href = '/front/feed.php'
            }
            ,error:function(xhr, ajaxOptions, thrownError){
                console.log("error")
                alert('Wrong password or email.')
            }
        });
    });
})