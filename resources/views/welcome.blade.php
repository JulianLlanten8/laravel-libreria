<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        

        <!-- Styles -->
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <h1>
            Prueba de Bunny CDN y de bootstrap
        </h1>

        <div class="card" style="width: 18rem;">
            <img src="https://c0.klipartz.com/pngpicture/730/970/gratis-png-jiraiya-de-naruto-jiraiya-gamabunta-tsunade-orochimaru-naruto-uzumaki-naruto-thumbnail.png" 
                class="card-img-top" alt="viejo pervertido">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card
                    title and make up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </body>
</html>
