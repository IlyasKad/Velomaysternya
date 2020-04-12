<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <title>Velomaysternya</title>
</head>
<body>

<?php
    require_once "header.php";
?>

<!-- header slider -->
<section class="header-slider">
    <div class="container">
        <div class="header-slider__content">
            <div class="header-slider__title">
            <span class="top-title">
              Нова колекція
            </span>
                <div class="bottom-title">
                    2020
                </div>
            </div>
            <div class="header-slider__description">
                28" Cannondale TOPSTONE
            </div>
            <a class="header-slider__btn" href="index.php?page=info">Придбати</a>
        </div>
    </div>
</section>

<!-- Menu search of product  -->
<section class="search-product">
    <div class="container">
        <div class="search-product__content">
            <div class="search-product__title">
                підібрати велосипед
            </div>

            <div class="search-product__form">
                <div class="search-product__form-item">
                    <label for="sex" class="search-product__parametrs">Стать</label>
                    <input
                            class="form-item sex-form-item"
                            type="text"
                            placeholder="Жінка"
                    />
                </div>

                <div class="search-product__form-item">
                    <label for="height" class="search-product__parametrs"
                    >Зріст</label
                    >
                    <input
                            class="form-item height-form-item"
                            type="text"
                            placeholder="170 см"
                    />
                </div>

                <div class="search-product__form-item">
                    <label for="weight" class="search-product__parametrs">Вага</label>
                    <input
                            class="form-item weight-form-item"
                            type="text"
                            placeholder="65 кг"
                    />
                </div>

                <div
                        class="search-product__form-item search-product__form-item-where "
                >
                    <label for="where-will-you-ride" class="search-product__parametrs"
                    >Де будете кататися</label
                    >
                    <input
                            class="form-item where-will-you-ride-form-item"
                            type="text"
                            placeholder="Місто"
                    />
                </div>

                <div class="search-product__form-item">
                    <label for="price" class="search-product__parametrs">Ціна</label>
                    <input
                            class="form-item price-form-item"
                            type="text"
                            placeholder="3000 - 5500 грн"
                    />
                </div>
            </div>

            <div class="search-product__wrapper-btn">
                <a class="search-product__btn" href="index.php?page=container">Підібрати</a>
            </div>
        </div>
    </div>
</section>

<!-- tile of products -->

<section class="tile-products">
    <div class="container">
        <div class="tile-products__content">
            <div class="tile-products__title">
                <div class="tile-products__title-item">
                    <a class="tile-products__title-link" href="index.php?page=container">нові</a>
                </div>
                <div class="tile-products__title-item">
                    <a class="tile-products__title-link" href="index.php?page=container">акції</a>
                </div>
                <div class="tile-products__title-item">
                    <a class="tile-products__title-link" href="index.php?page=container">хіти</a>
                </div>
            </div>

            <div class="tile-products__main">
                <!-- 1 tile -->
                <div class="tile-products__item">
                    <div class="tile-products__item-status">
                        <img src="images/sale20-logo.svg" alt="sale 20%"/>
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon"/>
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/29CannondaleTRAIL-X2020.svg" alt="Bike"/>
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color000.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorF85E5E.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color6EF7A5.svg" alt="color"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 29" Cannondale TRAIL
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars"/>
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">
                                (11 відгуків)
                            </a>
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
                        <img src="images/new-logo.svg" alt="new logo"/>
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon"/>
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/20ElectraSweetRide3igirlsG.svg" alt="Bike"/>
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color96F3F1.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorA65EF8.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorF85EED.svg" alt="color"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 20" Electra Sweet Ride
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars"/>
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">
                                (7 відгуків)
                            </a>
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
                        <img src="images/new-logo.svg" alt="new logo"/>
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon"/>
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/26PrideMARVEL6.3рама-XS.svg" alt="Bike"/>
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFF8D0A.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorBEFF0A.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color000.svg" alt="color"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 26" Pride MARVEL 6.3
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/4-stars-logo.svg" alt="5 stars"/>
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">
                                (14 відгуків)
                            </a>
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
                        <img src="images/new-logo.svg" alt="new logo"/>
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon"/>
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/26ElectraелектроприводEU.svg" alt="Bike"/>
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFFFFFF.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color5FA192.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFC1F25.svg" alt="color"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 26" Electra електро
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars"/>
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">
                                (22 відгуків)
                            </a>
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
                        <img src="images/new-logo.svg" alt="new logo"/>
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon"/>
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/29CannondaleFCarbon52020.svg" alt="Bike"/>
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorBEFF0A.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFC1F25.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorFF8D0A.svg" alt="color"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 29" Cannondale F Car
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/4-stars-logo.svg" alt="5 stars"/>
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">
                                (10 відгуків)
                            </a>
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
                        <img src="images/new-logo.svg" alt="new logo"/>
                    </div>

                    <div class="tile-products__icons">
                        <div class="tile-products__icon-compare">
                            <a href="index.php?page=info">
                                <img src="images/compare-logo.svg" alt="compare icon"/>
                            </a>
                        </div>
                        <div class="tile-products__icon-basket">
                            <a href="index.php?page=info">
                                <img src="images/basket-logo.svg" alt="basket icon"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__img-product">
                        <img src="images/16ElectraSprocket1EUgirls.svg" alt="Bike"/>
                    </div>

                    <div class="tile-products__change-color">
                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/color96F3F1.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images\colorA65EF8.svg" alt="color"/>
                            </a>
                        </div>

                        <div class="tile-products__change-color-wrapper">
                            <a href="index.php?page=info">
                                <img src="images/colorF85EED.svg" alt="color"/>
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__title-product">
                        Велосипед 16" Electra Sprocket 1
                    </div>

                    <div class="tile-products__mark">
                        <a href="index.php?page=info">
                            <img src="images/5-stars.-logo.svg" alt="5 stars"/>
                        </a>
                        <div class="tile-products__review">
                            <a href="index.php?page=info">
                                (5 відгуків)
                            </a>
                        </div>
                    </div>

                    <div class="tile-products__price">
                        6200 грн
                    </div>

                    <a class="tile-products__btn" href="index.php?page=info">Купити</a>
                </div>
            </div>
            <div class="tile-products__btn-see-more">
                <a class="tile-products__btn-link" href="index.php?page=container">
                    Подивитися більше
                </a>
            </div>
        </div>
    </div>
</section>

<!-- section of advantages  -->
<section class="advantages">
    <div class="container">
        <div class="advantages__content">
            <div class="advantages__title">
                чому обирають нас
            </div>

            <div class="advantages__row">
                <div class="advantages__row-item">
                    <img
                            class="advantages__row-icon"
                            src="images/advantages-icon1.svg"
                            alt="icon of advantages"
                    />
                    <div class="advantages__row-name-icon">
                        <div class="advantages__row-title">
                            Безкоштовна доставка
                        </div>
                        <div class="advantages__row-description">
                            Доставимо замовлення від 3000 грн безкоштовно.
                        </div>
                    </div>
                </div>
                <div class="advantages__row-item">
                    <img
                            class="advantages__row-icon"
                            src="images/advantages-icon2.svg"
                            alt="icon of advantages"
                    />
                    <div class="advantages__row-name-icon">
                        <div class="advantages__row-title">
                            Великий вибір товарів
                        </div>
                        <div class="advantages__row-description">
                            У нас є величезний вибір велосипедів - близько 700 видів.
                        </div>
                    </div>
                </div>
            </div>

            <div class="advantages__row">
                <div class="advantages__row-item">
                    <img
                            class="advantages__row-icon"
                            src="images/advantages-icon3.svg"
                            alt="icon of advantages"
                    />
                    <div class="advantages__row-name-icon">
                        <div class="advantages__row-title">
                            Консультація фахівців
                        </div>
                        <div class="advantages__row-description">
                            Якщо ви заплуталися в величезному виборі, зверніться до наших
                            фахівців.
                        </div>
                    </div>
                </div>
                <div class="advantages__row-item">
                    <img
                            class="advantages__row-icon"
                            src="images/advantages-icon4.svg"
                            alt="icon of advantages"
                    />
                    <div class="advantages__row-name-icon">
                        <div class="advantages__row-title">
                            Зручна оплата
                        </div>
                        <div class="advantages__row-description">
                            Оплату можна здійснювати через карту і готівкою.
                        </div>
                    </div>
                </div>
            </div>

            <div class="advantages__row">
                <div class="advantages__row-item">
                    <img
                            class="advantages__row-icon"
                            src="images/advantages-icon5.svg"
                            alt="icon of advantages"
                    />
                    <div class="advantages__row-name-icon">
                        <div class="advantages__row-title">
                            Гарантія від магазину
                        </div>
                        <div class="advantages__row-description">
                            Ми надаємо гарантію терміном на 60 днів.
                        </div>
                    </div>
                </div>
                <div class="advantages__row-item">
                    <img
                            class="advantages__row-icon"
                            src="images/advantages-icon6.svg"
                            alt="icon of advantages"
                    />
                    <div class="advantages__row-name-icon">
                        <div class="advantages__row-title">
                            Щомісячні знижки
                        </div>
                        <div class="advantages__row-description">
                            Знижки до 70% на різні види велосипедів.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about company -->
<section class="about-company">
    <div class="container">
        <div class="about-company__content">
            <div class="about-company__title">
                Про компанію
            </div>
            <div class="about-company__description">
                Ми пропонуємо моделі брендових велосипедів високої якості. Вони не
                підведуть власника в поїздках по місту, прогулянках по природі, під
                час занять спортом. Наш магазин працює з постачальниками на пряму. У
                нас представлена продукція наступних відомих брендів Apollo,
                Bellelli, BerGaMont, та інших. Ми пропонуємо купити велосипед за
                вигідною ціною з доставкою по Києву та іншими містами України.
            </div>

            <div class="about-company__menu-icons">
                <img src="images/about-clock.svg" alt="clock icon"/>
                <img src="images/about-certificate.svg" alt="certificate icon"/>
                <img src="images/about-sold.svg" alt="sold icon"/>
            </div>

            <div class="about-company__list-subtitle">
                <div class="about-company__subtitle">
                    Працюємо <br/>з 2010 року
                </div>
                <div class="about-company__subtitle">
                    Сертифікована <br/>продукція
                </div>
                <div class="about-company__subtitle">20 продажів <br/>в день</div>
            </div>

            <div class="about-company__btn-wrapper">
                <a class="about-company__btn" href="index.php?page=container">Замовити</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once "footer.php";
?>

</body>
</html>
