$(document).ready(function() {
    console.log("ready!")

    $(document).on("submit", function (event) {

        event.preventDefault()
        console.log(event)

        const form = event.currentTarget
        console.log("FORM",form)

        let nom = document.getElementById("Nom").value;
        let pseudo = document.getElementById("Pseudo").value;
        let picture = document.getElementById("picture").value
        let bio = document.getElementById("bio").value;
        let banner = document.getElementById("banner").value;
        let password = document.getElementById("Password").value;
        let password_r = document.getElementById("Repeat_Password").value;
        let email = document.getElementById("Email").value;
        let date = document.getElementById("birthdate").value;
        
        $.ajax({
            type:'post',
            url: '../../inscription_hub.php',
            data: {
                nom: nom,
                pseudo: pseudo,
                picture: picture,
                bio: bio,
                banner: banner,
                password: password,
                password_r: password_r,
                email: email,
                date: date
            },
            dataType:'json',
            success:function(data){ 
                
                window.location.href = '../../index.php?data=' + data
            }
            ,error:function(xhr, ajaxOptions, thrownError){
                alert(xhr.responseText)
                console.log(thrownError)
                console.log('Error : ' + xhr.responseText +' '+ajaxOptions+' '+xhr.status+' '+thrownError);
                window.location.href = '../../index.php?data=';

            }
        });
    });
})