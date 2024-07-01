<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/front/css/tailwind.css">
    <script src="/front/js/script.js"></script>
    <title>Twitter'Academie</title>
</head>
<body class="bg-gray-900">
    <div class="flex min-h-screen items-center justify-center">


        <div class="min-h-1/2 bg-black  border border-gray-900 rounded-2xl">

            <div class="mx-4 sm:mx-24 md:mx-34 lg:mx-56 mx-auto  flex items-center space-y-4 py-16 font-semibold text-gray-500 flex-col w-64 ">
                <img src="/front/assets/global icon network purple.jpg" class="object-scale-down h-48 w-96">

                <h1 class="text-white text-2xl" id="h">Inscrivez-vous !</h1>

                <form action="" id="form" method="post">

                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                        placeholder="Nom" type="text" name="Nom" id="Nom">
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                        placeholder="Choissiez votre Hashtag" type="text" name="Pseudo" id="Pseudo">
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                    placeholder="Choissiez votre Image de Profil" type="file" name="picture" id="picture">
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                    placeholder="Choissiez votre Bio" type="text" name="bio" id="bio">
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                    placeholder="Choissiez votre Bannière" type="file" name="banner" id="banner">
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                        placeholder="Password" type="password" name="Password" id="Password"> 
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                        placeholder="Retapez votre Password" type="password" name="password_r" id="Repeat_Password">   
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                        placeholder="Email" type="email" name="Email" id="Email">
                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700 mb-4"
                        placeholder="Date de naissance" type="date" name="birthdate" id="birthdate">
                    <input class="w-full mt-5 p-1 bg-gray-50 rounded-full font-bold text-gray-900 border border-gray-700 hover:bg-gray-300 cursor-pointer"
                        type="submit" name="submit" id="submit">
                </form>        
                <!-- <a href="/front/feed.php">TEMPORAIRE POUR FEED</a> -->
                


            </div>

        </div>

    </div>
</body>
</html>