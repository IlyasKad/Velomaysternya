
<header class="header">
    <div class="container">
        <div class="header__content">
            <nav class="header__additional-menu">
                <ul class="header__menu-list">
                    <li><a href="index.php?page=container">Покупцям</a></li>
                    <li><a href="index.php?page=contact">Контакти</a></li>
                    <li><a href="index.php?page=container">Акції</a></li>
                </ul>
            </nav>

            <div class="header__logo-wrapper">
                <a href="index.php?page=home">
                    <img
                            class="header__logo-img"
                            src="images/main-logo.svg"
                            alt="Логотип"
                    />
                </a>
                <div class="header__logo-description">
                    Магазин велосипедів
                </div>
            </div>

            <div class="header__visitors-sidebar">
                <div class="header__contacts-data">
                    <ul class="header__contact-list">
                        <li>
                  <span class="header__contact-item-unique"
                  >+38 (068) 92 519 04</span
                  >
                        </li>
                        <li>
                  <span class="header__contact-item"
                  >м. Київ вул. Євгена Сверстюка 25</span
                  >
                        </li>
                        <li>
                  <span class="header__contact-item"
                  >Пон-суб з 09:00 до 18:00</span
                  >
                        </li>
                    </ul>
                </div>
                <div class="header__menu-authorization">
                    <a href="#">
                        <img
                                class="sign-in-logo"
                                src="images/sign-in-logo.svg"
                                alt="Sign in logo"
                        />
                    </a>
                    <a href="index.php?page=container">
                        <img src="images/basket-logo.svg" alt="Basket logo logo" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- header-bottom -->

<section class="header-bottom">
    <div class="container">
        <div class="header-bottom__content">

            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>
                <ul class="menu__box">
                    <a class="velo-logo" href="index.php?page=home">
                        <img src="img-info/menu-box__logo.svg" alt="">
                    </a>
                    <li>
                        <a class="menu__item menu__item-top" href="index.php?page=home">Головна</a>
                    </li>
                    <li><a class="menu__item" href="index.php?page=container">Велосипеди</a></li>
                    <li><a class="menu__item" href="#">Запчастини</a></li>
                    <li><a class="menu__item" href="#">Екіпірування</a></li>
                    <li><a class="menu__item" href="#">Аксесуари</a></li>
                    <hr class="menu-item-unique" />
                    <li><a class="menu__item" href="index.php?page=container">Покупцям</a></li>
                    <li><a class="menu__item" href="index.php?page=contact">Контакти</a></li>
                    <li><a class="menu__item" href="index.php?page=container">Акції</a></li>
                    <div class="menu__box-list-adress">
                        <div class="menu__box-adress">+38 (068) 92 519 04</div>
                        <div class="menu__box-adress">
                            м. Київ вул. Євгена Сверстюка 25
                        </div>
                        <div class="menu__box-adress">Пон-суб з 09:00 до 18:00</div>
                    </div>
                </ul>
            </div>


            <div class="header-bottom__switcher-language">
                <div class="switcher-language-i" id="switcher-language-ua">
                    <a href="#">ua</a>
                </div>
                <div class="switcher-language-i header-bottom__vertical-line">
                    <a href="#">ru</a>
                </div>
                <div
                        class="switcher-language-i header-bottom__vertical-line"
                        id="switcher-language-en"
                >
                    <a href="#">en</a>
                </div>
            </div>

            <nav class="header-bottom__menu">
                <ul class="header-bottom__menu-list">
                    <li><a href="index.php?page=container">Велосипеди</a></li>
                    <li><a href="#">Запчастини</a></li>
                    <li><a href="#">Екіпірування</a></li>
                    <li><a href="#">Аксесуари</a></li>
                </ul>
            </nav>

            <div class="header-bottom__search">
                <form class="header-bottom__form">
                    <input
                            class="header-bottom__form-item"
                            type="text"
                            placeholder="Пошук"
                    />
                </form>
                <button class="header-bottom__form-button" type="submit">
                    Знайти
                </button>
            </div>
        </div>
    </div>
</section>
