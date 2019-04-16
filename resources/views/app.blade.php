<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Šarūnas Živila</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <div id="app">

        <!-- Navbar -->
        <div class="front">
            @include('navbar')
            @include('layouts.typer')
        </div>
        <div class="about">
            @include('layouts.about')
        </div>
        <div class="skills">
            @include('layouts.skills')
        </div>
        <div class="edu">
            @include('layouts.edu')
        </div>
        <div class="projects">
            @include('layouts.projects')
        </div>
        <div class="contacts">
            @include('layouts.contacts')
        </div>
    </div>
    </body>
    <script src="{{ asset('js/typer.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
