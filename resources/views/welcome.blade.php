<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

  <nav class="bg-black">
    <div class="container flex items-center justify-around mx-auto text-white capitalize">

        <img class="mt-2"src="{{Storage::url('logo_transparent100px.png')}}" alt="logo">

        <a href="#" class="border-b-2 border-transparent hover:text-red-600 transition-colors duration-200 transform hover:border-red-600 mx-1.5 sm:mx-6">Accueil</a>

        <a href="#" class="border-b-2 border-transparent hover:text-red-600 transition-colors duration-200 transform  hover:border-red-600 mx-1.5 sm:mx-6">À propos</a>

        <a href="#" class="border-b-2 border-transparent hover:text-red-600 transition-colors duration-200 transform  hover:border-red-600 mx-1.5 sm:mx-6">Projets</a>

        <a href="#" class="border-b-2 border-transparent hover:text-red-600 transition-colors duration-200 transform  hover:border-red-600 mx-1.5 sm:mx-6">Contacts</a>

       
    </div>
</nav>

</body>

</html>
