<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Цветочная лавка</title>
    <link rel="stylesheet" href="{{ asset('sccs/header/index.css') }}">
    <link rel="stylesheet" href="{{asset('sccs/home/index.css') }}">
    <link rel="stylesheet" href="{{ asset('sccs/footer/index.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    @include('template.header')
    <div class="slider">
        <img src="image/slider/slider_one.png" alt="slider_one">
    </div>
        <div class="title_slider">
            <div class="delivery">
                <span class="delivery_span">Доставка</span>
                <span> цветов в городе</span>
            </div>
                <p class="Vladivostok">Владивосток</p>
                <button class="catalog_button">Каталог</button>
        </div>
    @include('template.footer')
</body>
