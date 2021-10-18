<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- 1- bir adet ana dosya olusturuyoruz (app.vue) -->
        <!-- 2- ana dosyalara bağlanacak dosyaları olusturuyoruz (item.vue, list.vue)  -->
        <div id="app">
            <app></app>
        </div>
        
        
        
    </body>
    <script src="{{mix('js/app.js')}}"></script>
</html>
