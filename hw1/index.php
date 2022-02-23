<?php
//Создано переменные разных типов
$isAuth = true;
$titleMovieBanner = 'Матрица: Воскрешение';
$descriptionMovieBanner = 'В городке Саммервилл где-то в Оклахоме творятся странные дела — конспирологические теории летают в воздухе,и даже школьные учителя всерьез говорят о странной сейсмической активности. Но всё это не выдумки скучающих провинциалов, а странное наследие местной легенды — «грязного фермера», который погиб, пытаясь оградить родные края от нечисти.';
$titleMovieSliders = ['Матрица','Человек Паук','Мстители','Бетмен'];
$yearsCreate = 2022;
$salary = 2472.2312;
$data =time();
$dataSting=date('d-m-Y');
/*$object = new Person;
$object->SetPersonName('DMITRY');
$object->GetPersonName();
class Person {
    var $name;
    function GetPersonName() {
        echo $this->name;
    }
    function SetPersonName($name) {
        $this->name = $name;
    }
}*/
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <title>KorsunMovie</title>
</head>
<body>
<header>
    <div class="block-header">
        <img class="logo-header" alt="Logo" src="./assets/img/logo.png"/>
        <nav class="nav-header">
            <ul class="nav-menu">
                <li>Домой</li>
                <li>Сериалы</li>
                <li>Фильмы</li>
                <li>Мультфильмы</li>
                <li>Поиск</li>
<!--                Использование условного оператора If-->
                <?php if ($isAuth): ?>
                    <li>Избанное</li>
                    <li>
                        <a href="">Выйти</a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="">Войти</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
<div class="banner">
    <div class="banner-container">
        <div class="video-block" v-for="movie in postBanners" :key="movie">
            <video autoplay loop muted src="./assets/video/video.mp4"></video>
        </div>
        <div class="banner-text" v-for="movie in postBanners" :key="movie">
<!--            Добавление кода php в разметку-->
            <h1><?php echo "{$titleMovieBanner}" ?></h1>
            <p><?php echo "{$descriptionMovieBanner}" ?></p>
            <button id="play-movie-button">
                <span>Посмотреть</span>
            </button>
            <button id="info-movie-button">
                <span>Информация</span>
            </button>
        </div>
    </div>
</div>
<div class="movies-watch-block">
    <h2><?php echo $titleMovieSliders[0]?></h2>
    <div class="swiper block-movie">
        <div class="swiper-wrapper block-poster-movie">
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="movies-watch-block">
    <h2><?php echo $titleMovieSliders[1]?></h2>
    <div class="swiper block-movie">
        <div class="swiper-wrapper block-poster-movie">
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="movies-watch-block">
    <h2><?php echo $titleMovieSliders[2]?></h2>
    <div class="swiper block-movie">
        <div class="swiper-wrapper block-poster-movie">
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
            <div class="swiper-slide block-img"><img class="img-movie-poster" src="./assets/img/poster.jpeg"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="container-block-footer">
            <div class="left-side-bar">
                <img @click="Home_page_navigate" class="img-footer" src="./assets/img/logo.png" alt=""/>
            </div>
            <ul class="right-side-bar">
                <li @click="Home_page_navigate">Домой</li>
                <li>FAQ</li>
                <li @click="Favorite_navigate">Избанное</li>
            </ul>
            <ul class="right-side-bar">
                <li @click="Serials_navigate">Сериалы</li>
                <li @click="Films_navigate">Фильмы</li>
                <li @click="Movie_navigate">Мультфильмы</li>
            </ul>
        </div>
        <div class="footer-down-block">
            <p>©<?php echo "{$yearsCreate}"?> Korsun D.V.</p>
            <span>Условия пользования</span>
            <span>Политика конфиденциальности</span>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>