<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pruebas Blade</title>

  <meta name="robots" content="index, follow">
  <meta name="description" content="Pruebas de blade con laravel 8">
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="cyan">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">
  <meta name="msapplication-TileColor" content="#4285f4">


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
  
  <x-card>
    <x-slot name="title">
      Viejo pervertido
    </x-slot>
    <x-slot name="text">
      Este es el personaje de naruto que mas me gusta y es conocido como el viejo pervertido
    </x-slot>
  </x-card>

  <x-alert color="success" message="Prueba de mensaje de alerta" />
</body>

</html>
