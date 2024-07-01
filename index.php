<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/front/css/tailwind.css">
        <script src="front/js/script_login.js"></script>
        <title>Twitter Academie</title>
    </head>
    <body class="bg-gray-900">
        <div class="flex min-h-screen items-center justify-center">
            <div class="min-h-1/2 bg-black  border border-gray-900 rounded-2xl">
                <form action="" id="form" method="post">
                    <div class="mx-4 sm:mx-24 md:mx-34 lg:mx-56 mx-auto  flex items-center space-y-4 py-16 font-semibold text-gray-500 flex-col">
                        <img src="/front/assets/global icon network purple.jpg" class="object-scale-down h-48 w-96">
                        <h1 class="text-white text-2xl">Connectez vous !</h1>    
                        <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700" placeholder="Email" type="email" name="email" id="email">
                        <input class="w-full p-2 bg-gray-900 rounded-md border border-gray-700" placeholder="Mots de passe" type="password" name="Password" id="pwd">
                        <input class="w-full p-2 bg-gray-50 rounded-full font-bold text-gray-900 border border-gray-700 hover:bg-gray-300 cursor-pointer" type="submit" name="submit" id="submit">      
                        <p>Toujours pas inscris ?<a class="font-semibold text-sky-700 hover:text-sky-900" href="/front/inscription.php">Inscrivez-vous</a> </p>
                    </div>                  
                </form>
            </div>
        </div>
    </body>
</html>