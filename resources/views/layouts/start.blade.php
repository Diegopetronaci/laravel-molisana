<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            @include('partials.style');
        </style>
    </head>
    <body>
        <header>
            <div class="d_flex flex_center">
                <img src="img/logo.png" alt="">
            </div>

            <div class="d_flex flex_center sfondo_verde">
                <a href="home"> HOME </a>
                <a href="prodotti"> PRODOTTI </a>
                <a href="contatti"> CONTATTI </a>
            </div>

        </header>
        