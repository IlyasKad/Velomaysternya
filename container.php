<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=cyrillic" rel="stylesheet" />
    <link href="<https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />


    <link rel="stylesheet" href="css/container.css" />
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <title>Velomaysternya</title>
</head>

<body>

<?php
require_once "header.php";
?>

<!-- container of search -->
<section class="container-search">
    <div class="container">
        <div class="container-search__content">
            <div class="container-search__path">
                <div class="container-search__main-path">
                    <a href="index.php?page=home">Головна</a>
                </div>
                <img src="img-container/search-path.svg" alt="search path icon" />
                <div class="container-search__pre-main-path">
                    <a href="index.php?page=container">Велосипеди</a>
                </div>
            </div>
            <div class="container-search__title">
                <a href="index.php?page=container">Велосипеди</a>
            </div>

            <div class="container-search__filter">
                <a href="index.php?page=container">
                    <img src="img-container/search-filter.svg" alt="filter icon" />
                </a>
                <div class="container-search__name">
                    <a href="index.php?page=container">Фільтр</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- bottom of container-search  -->
<section class="container-search-bottom">
    <div class="container">
        <div class="container-search-bottom__content">

            <div class="container-search-bottom__sort-block">
                <div class="container-search-bottom__sort-name">
                    Сортувати
                </div>
                <form class="container-search-bottom__form">
                    <input class="container-search-bottom-item" type="text" placeholder="Рік випуску" />
                </form>
            </div>
            <div class="container-search-bottom__sort-block sort-block-unique">
                <div class="container-search-bottom__sort-name">
                    Показувати
                </div>
                <form class="container-search-bottom__form">
                    <input class="container-search-bottom-item" type="text" placeholder="У вигляді плитки" />
                </form>
            </div>
        </div>
</section>


<!-- tile of products -->

<section class="tile-products">
    <div class="container">
        <div class="tile-products__content">

            <div class="tile-products__main">
                <!-- 1 tile -->
                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/sale20-logo.svg" alt="sale 20%" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/29CannondaleFCarbon52020.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color000.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorF85E5E.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color6EF7A5.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 29" Cannondale TRAIL
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(11 відгуків)</a>
                        </div>
                    </div>

                    <div class="tile-products__price tile-products__price-sale">
                        8000 грн
                    </div>

                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- 2 tile -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/20ElectraSweetRide3igirlsG.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color96F3F1.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorA65EF8.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorF85EED.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 20" Electra Sweet Ride
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(7 відгуків)</a>
                        </div>
                    </div>
                    <div class="tile-products__price">
                        11440 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- 3 tile -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/26PrideMARVEL6.3рама-XS.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFF8D0A.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorBEFF0A.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color000.svg" alt="color" />
                            </a>
                        </div>
                    </div>
                    <div class="tile-products__title-product">
                        Велосипед 26" Pride MARVEL 6.3
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/4-stars-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(14 відгуків)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        8990 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- 4 tile -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/26ElectraелектроприводEU.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFFFFFF.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color5FA192.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFC1F25.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 26" Electra електро
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(22 відгуків)</a>
                        </div>
                    </div>
                    <div class="tile-products__price">
                        32340 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- tile 5 -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/29CannondaleTRAIL-X2020.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorBEFF0A.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFC1F25.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFF8D0A.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 29" Cannondale F Car
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/4-stars-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(10 відгуків)</a>
                        </div>
                    </div>
                    <div class="tile-products__price">
                        27000 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- 6 tile -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/16ElectraSprocket1EUgirls.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color96F3F1.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images\colorA65EF8.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorF85EED.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 16" Electra Spro
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(5 відгуків)</a>
                        </div>
                    </div>
                    <div class="tile-products__price">
                        6200 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>


                <!-- 7 tile -->


                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/sale20-logo.svg" alt="sale 15%" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-container/26ElectraTownie.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/colorA08A4D.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/color8E9191.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color6EF7A5.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 26" Electra Townie
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(7 відгуків)</a>
                        </div>
                    </div>
                    <div class="tile-products__price tile-products__price-sale">
                        23885 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- tile 8 -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-container/24Apollo Neo.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/colorC8D2CA.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/color30DCFE.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/colorCFD284.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 24" Apollo Neo 7s
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/4-stars-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(5 відгуків)</a>
                        </div>
                    </div>
                    <div class="tile-products__price">
                        7700 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- 9 tile -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-container/29PrideROCX.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/colorAFA887.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color000.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/color4E5107.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 29" Pride ROCX DIRT
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(15 відгуків)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        28574 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- 10 tile -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-container/27Cannondale FORAY.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/colorA08A4D.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/color8E9191.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color6EF7A5.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 27" Cannondale FORAY
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="img-container/3-stars-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(11 відгуків)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        11291 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- tile 11 -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-container/29CannondaleTANGO.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/color2E6008.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/color460672.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color000.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 29" Cannondale TANGO
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/4-stars-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(2 відгукa)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        19474 грн
                    </div>
                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>

                <!-- 12 tile -->

                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/new-logo.svg" alt="new logo" />
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-container/TRINXMajestic.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/colorAFA887.svg" alt="color" />
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color000.svg" alt="color" />
                            </a>
                        </div>


                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="img-container/color4E5107.svg" alt="color" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед TRINX Majestic M116
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(11 відгуків)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        8000 грн
                    </div>

                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>
            </div>
            <div class="tile-products__btn-see-more">
                <a href="container.php">
                    <img src="img-container/update-icon.svg" alt="Update icon">
                    <span class="tile-products__btn-link" href="container.php">Завантажити ще</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
require_once "footer.php";
?>

</body>

</html>