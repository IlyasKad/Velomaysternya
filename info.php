<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=cyrillic"
        rel="stylesheet"
    />
    <link
        href="<https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />

    <link rel="stylesheet" href="css/info.css" />
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <title>Velomaysternya</title>
</head>

<body>

<?php
require_once "header.php";
?>


<!-- name of page -->
<section class="name-page">
    <div class="container">
        <div class="name-page__content">
            <div class="name-page__path">
                <div class="name-page__main-path">
                    <a href="index.php?page=home">Головна</a>
                </div>
                <img src="img-container/search-path.svg" alt="search path icon" />
                <div class="name-page__pre-main-path">
                    <a href="index.php?page=container">Велосипеди</a>
                </div>
                <img src="img-container/search-path.svg" alt="search path icon" />
                <div class="name-page__additional">
                    <a href="index.php?page=info">TRINX Majestic 26"</a>
                </div>
            </div>
            <div class="name-page__title">
                Велосипед TRINX Majestic 26"
            </div>
        </div>
    </div>
</section>

<!-- main block -->
<section class="main-block">
    <div class="container">
        <div class="main-block__content">
            <div class="main-block__image">
                <img src="img-info/photo-bike.svg" alt="photo of product" />
            </div>

            <div class="main-block__characteristics">
                <div class="main-block__code ">
                    <div class="main-block__code-name">
                        Артикул
                    </div>
                    <div class="main-block__code-number">
                        M116MGCG
                    </div>
                </div>

                <div class="main-block__manufacturer ">
                    <div class="main-block__manufacturer-name">
                        Виробник
                    </div>
                    <div class="main-block__manufacturer-number">
                        TRINX
                    </div>
                </div>

                <div class="main-block__mark ">
                    <div class="main-block__mark-stars">
                        <img src="img-info/main-block-5-stars.svg" alt="mark" />
                    </div>
                    <div class="main-block__mark-review">
                        <a href="index.php?page=info">(11 відгуків)</a>
                    </div>
                </div>

                <div class="main-block__size">
                    Розмір
                </div>

                <div class="main-block__size-list">
                    <a class="main-block__list-item" href="index.php?page=info"> <span>XS</span></a>
                    <a class="main-block__list-item" href="index.php?page=info"> <span>S</span></a>
                    <a class="main-block__list-item" href="index.php?page=info"> <span>M</span></a>
                    <a class="main-block__list-item list-item-unique" href="index.php?page=info">
                        <span>L</span></a
                    >
                    <a class="main-block__list-item" href="index.php?page=info"> <span>XL</span></a>
                    <a class="main-block__list-item" href="index.php?page=info"> <span>XXL</span></a>
                </div>

                <div class="main-block__color">
                    Колір
                </div>

                <div class="main-block__change-color">
                    <a class="main-block__color-item" href="index.php?page=info">
                        <img src="img-info/color-icon1.svg" alt="color icon" />
                    </a>
                    <a class="main-block__color-item" href="index.php?page=info">
                        <img src="img-info/color-icon2.svg" alt="color icon" />
                    </a>
                    <a class="main-block__color-item" href="index.php?page=info">
                        <img src="img-info/color-icon3.svg" alt="color icon" />
                    </a>
                </div>

                <div class="main-block__status">
                    Закінчується
                </div>

                <div class="main-block__buy">
                    <div class="main-block__buy-price">
                        8000 грн
                    </div>
                    <div class="main-block__buy-btn-wrapper">
                        <a href="index.php?page=info" class="main-block__buy-btn">Купити</a>
                    </div>
                </div>

                <div class="main-block__extra-function">
                    <div class="main-block__compare">
                        <div class="main-block__compare-icon">
                            <a href="index.php?page=info">
                                <img src="img-info/compare-icon.svg" alt="compare icon" />
                            </a>
                        </div>
                        <div class="main-block__compare-name">
                            <a href="index.php?page=info">
                                Порівняти
                            </a>
                        </div>
                    </div>
                    <div class="main-block__buy-part">
                        <a href="index.php?page=info">
                            Купити частинами
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- list of capabilities -->
<section class="list-capabilities">
    <div class="container">
        <div class="list-capabilities__content">
            <div class="list-capabilities-item">
                <a href="index.php?page=info">Опис товару</a>
            </div>
            <div class="list-capabilities-item">
                <a href="index.php?page=info">Характеристики</a>
            </div>
            <div class="list-capabilities-item">
                <a href="index.php?page=info">Відгуки</a>
            </div>
            <div class="list-capabilities-item">
                <a href="index.php?page=info">Схожі товари</a>
            </div>
            <div class="list-capabilities-item">
                <a href="index.php?page=info">Гарантія та доставка</a>
            </div>

            <div class="list-capabilities-unique">
                <hr class="list-capabilities-line" />
                <div class="list-capabilities-wrapper">
                    <div class="list-capabilities-item-unique">
                        <a href="index.php?page=info">Опис товару</a>
                    </div>
                    <img src="img-info/list-icon.svg" alt="icon of list" />
                </div>

                <hr class="list-capabilities-line" />
                <div class="list-capabilities-wrapper">
                    <div class="list-capabilities-item-unique">
                        <a href="index.php?page=info">Характеристики</a>
                    </div>
                    <img src="img-info/list-icon.svg" alt="icon of list" />
                </div>

                <hr class="list-capabilities-line" />
                <div class="list-capabilities-wrapper">
                    <div class="list-capabilities-item-unique">
                        <a href="index.php?page=info">Відгуки</a>
                    </div>
                    <img src="img-info/list-icon.svg" alt="icon of list" />
                </div>

                <hr class="list-capabilities-line" />
                <div class="list-capabilities-wrapper">
                    <div class="list-capabilities-item-unique">
                        <a href="index.php?page=info">Схожі товариу</a>
                    </div>
                    <img src="img-info/list-icon.svg" alt="icon of list" />
                </div>

                <hr class="list-capabilities-line" />
                <div class="list-capabilities-wrapper">
                    <div class="list-capabilities-item-unique">
                        <a href="index.php?page=info">Гарантія та доставка</a>
                    </div>
                    <img src="img-info/list-icon.svg" alt="icon of list" />
                </div>

                <hr class="list-capabilities-line" />
                <div class="list-capabilities-wrapper">
                    <div class="list-capabilities-item-unique">
                        <a href="index.php?page=info">Фотографії товару</a>
                    </div>
                    <img src="img-info/list-icon.svg" alt="icon of list" />
                </div>
                <hr class="list-capabilities-line" />
            </div>
        </div>
    </div>
</section>

<!-- section of properties  -->
<section class="properties">
    <div class="container">
        <div class="properties__content">
            <div class="properties__wrapper-title">
                <div class="properties__title">
                    Характеристики
                </div>
            </div>

            <div class="properties__main">
                <div class="properties__main-item">
                    <div class="properties__item-name">
                        Тип велосипеда
                    </div>
                    <div class="properties__item-value">
                        Гірський
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Для кого
                        </div>
                        <div class="properties__item-value">
                            Унісекс
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Матеріал рами
                        </div>
                        <div class="properties__item-value">
                            Алюміній
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Розмір коліс
                        </div>
                        <div class="properties__item-value">
                            26
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Тип гальма
                        </div>
                        <div class="properties__item-value">
                            Дискові механічні
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Кількість швидкостей
                        </div>
                        <div class="properties__item-value">
                            21
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Модельний рік
                        </div>
                        <div class="properties__item-value">
                            2020
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Тип вилки
                        </div>
                        <div class="properties__item-value">
                            Пружинно-масляна
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Тип задньої втулки
                        </div>
                        <div class="properties__item-value">
                            Касетна
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Гарантія
                        </div>
                        <div class="properties__item-value">
                            Офіційна, від виробника: на раму - довічна, на обладнання - 6
                            місяців
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Рама
                        </div>
                        <div class="properties__item-value">
                            Trail, SmartForm C2 Alloy, SAVE, 1-1/8” head tube
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Тормоза
                        </div>
                        <div class="properties__item-value">
                            Trinx Alloy Mechanical Disc, 160/160mm RT26 rotors
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Руль
                        </div>
                        <div class="properties__item-value">
                            Trinx C4 Riser, 6061 Alloy 25mm rise, 8° sweep, 6° rise
                        </div>
                    </div>
                </div>
                <hr class="properties__line" />

                <div class="properties__main">
                    <div class="properties__main-item">
                        <div class="properties__item-name">
                            Вага
                        </div>
                        <div class="properties__item-value">
                            15,5 кг (розмір рами L)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section of photo -->
<section class="photo">
    <div class="container">
        <div class="photo__content">
            <div class="photo__title">
                <div class="photo__title-main">
                    <a href="index.php?page=info">Фотографії</a>
                </div>
                <div class="photo__title-extra">
                    <a href="index.php?page=info"
                    >Велосипед TRINX Majestic M116 2020 26" 17" (M116MGCG)</a
                    >
                </div>
            </div>

            <div class="photo__list-img">
                <div class="photo__list-item">
                    <img src="img-info/photo-item1.svg" alt="image of product" />
                </div>
                <div class="photo__list-item">
                    <img src="img-info/photo-item2.svg" alt="image of product" />
                </div>
                <div class="photo__list-item">
                    <img src="img-info/photo-item3.svg" alt="image of product" />
                </div>
                <div class="photo__list-item">
                    <img src="img-info/photo-item4.svg" alt="image of product" />
                </div>
            </div>

            <div class="photo__commentation">
                <div class="photo__commnetation-item">
                    * Характеристики та комплектація товару можуть змінюватися
                    виробником без повідомлення!
                </div>
                <div class="photo__commnetation-item">
                    * Увага, необхідна додаткова збірка!
                </div>
            </div>
        </div>
    </div>
</section>

<!-- tile of products -->
<section class="tile-products">
    <div class="container">
        <div class="tile-products__content">
            <div class="tile-products__title">
                <div class="tile-products__title-main">
                    <img src="img-info/viewed-products.svg" alt="viewed" />
                    <div class="tile-products__name">
                        Переглянуті товари
                    </div>
                    <div class="tile-products__addition">
                        <a href="index.php?page=info">
                            Показати усі
                        </a>
                    </div>
                </div>
                <hr class="tile-products__title-line" />
            </div>

            <div class="tile-products__main">
                <!-- 1 tile -->
                <div class="tile-products__item">
                    <div class="tile-products__icons">
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-info/tile-bike1.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед TRINX Majestic 26"
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
                </div>

                <!-- 2 tile -->
                <div class="tile-products__item">
                    <div class="tile-products__icons">
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-info/tile-bike2.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 29" TANGO 3
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(2 відгука)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        19474 грн
                    </div>
                </div>

                <!-- 3 tile -->
                <div class="tile-products__item">
                    <div class="tile-products__icons">
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-info/tile-bike3.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 27,5" FORAY 1
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(6 відгуків)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        11291 грн
                    </div>
                </div>

                <!-- 4 tile -->
                <div class="tile-products__item">
                    <div class="tile-products__icons">
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon" />
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="img-info/tile-bike4.svg" alt="Bike" />
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 28" Marin FOUR
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars" />
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">(1 відгук)</a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        25975 грн
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once "footer.php";
?>


</body>
</html>
