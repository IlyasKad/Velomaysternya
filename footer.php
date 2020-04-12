
<!-- top of footer -->
<section class="footer-top">
    <div class="container">
        <div class="footer-top__content">
            <div class="footer-top__contacts-menu">
                <div id="footer-top__logo">
                    <a href="index.php?page=home">
                        <img
                            src="images/footer-top-logo.svg"
                            alt="logo of top footer "/>
                    </a>
                </div>
                <ul class="footer-top__contacts-list">
                    <li class="footer-top__contacts-address">
                        м. Київ вул. Євгена Сверстюка 25
                    </li>
                    <li class="footer-top__contacts-address">
                        м. Львів вул. Липинського 36
                    </li>
                    <li class="footer-top__contacts-phone">
                        +38 (068) 92 519 04
                        <a class="footer-top__unique" href="index.php?page=contact">
                            <img src="images/telegram-icon.svg" alt="telegram icon" />
                        </a>
                        <a class="footer-top__unique" href="index.php?page=contact">
                            <img src="images/viber-icon.svg" alt="viber icon" />
                        </a>
                    </li>
                    <li class="footer-top__email">
                        info@velokratia.com.ua
                    </li>
                    <li class="footer-top__schedule">
                        Пон-суб з 09:00 до 18:00
                    </li>
                </ul>
            </div>

            <div class="footer-top__main-column">
                <div class="footer-top__column-title">
                    Продукція
                </div>
                <ul class="footer-top__column-list">
                    <li>
                        <a href="index.php?page=container">Велосипеди</a>
                    </li>
                    <li>
                        <a href="#"> Аксесуари</a>
                    </li>
                    <li>
                        <a href="#"> Запчастини</a>
                    </li>
                    <li>
                        <a href="#"> Екіпірування</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top__main-column">
                <div class="footer-top__column-title">
                    Про магазин
                </div>
                <ul class="footer-top__column-list">
                    <li>
                        <a href="index.php?page=home">Про нас</a>
                    </li>
                    <li>
                        <a href="index.php?page=info"> Відгуки про магазин</a>
                    </li>
                    <li>
                        <a href="index.php?page=info">Гарантія</a>
                    </li>
                    <li>
                        <a href="index.php?page=info">Оплата та доставка</a>
                    </li>
                    <li>
                        <a href="index.php?page=info">Розстрочка</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top__main-column">
                <div class="footer-top__column-title">
                    Додаткові
                </div>
                <ul class="footer-top__column-list">
                    <li>
                        <a href="index.php?page=container"> Виробники</a>
                    </li>
                    <li>
                        <a href="index.php?page=home"> FAQ</a>
                    </li>
                    <li>
                        <a href="index.php?page=home"> Блог</a>
                    </li>
                    <li>
                        <a href="index.php?page=contact"> Контакти</a>
                    </li>
                    <li>
                        <a href="index.php?page=container">Акції</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top__join">
                <div class="footer-top__join-title">
                    Стежте за нами
                </div>
                <div class="footer-top__join-menu-icons">
                    <div class="footer-top__join-list">
                        <a href="index.php?page=contact">
                            <img
                                class="footer-top__icon-img"
                                src="images/youtube-icon.svg"
                                alt="facebook icon"
                            /></a>
                        <a href="index.php?page=contact">
                            <img
                                class="footer-top__icon-img"
                                src=" images/instagram-icon.svg"
                                alt="instagram icon"
                            /></a>
                        <a href="index.php?page=contact">
                            <img
                                class="footer-top__icon-img"
                                src="images/facebook-icon.svg"
                                alt="facebook icon"
                            /></a>
                        <a href="index.php?page=contact">
                            <img
                                class="footer-top__icon-img"
                                src="images/twitter-icon.svg"
                                alt="facebook icon"
                            /></a>
                    </div>
                </div>
                <form action="index.php?page=<?=$page?>" method="post" class="footer-top__join-form">
                    <input
                        class="footer-top__form-item"
                        type="email" name="email"
                        placeholder="Введіть свій E-mail"
                    />
                    <button type="submit" name="send" class="footer-top__join-btn">
                        Підписатися
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__row-first">
                <div class="footer-logo">
                    <a href="index.php?page=home">
                        <img src="images/footer-logo.svg" alt="footer logo" />
                    </a>
                </div>
                <div class="footer__item">
                    <a href="#">Про компанію</a>
                </div>
                <div class="footer__item">
                    <a href="#">Угода користувача</a>
                </div>
                <div class="footer__item">
                    <a href="#">Політика конфіденційності</a>
                </div>
                <div class="footer__item">
                    <a href="#">Політика використання файлів cookie</a>
                </div>
                <div class="footer__item">
                    <a href="#">Політика авторських прав</a>
                </div>
            </div>
            <div class="footer__row-second">
                <div class="footer__item">
                    <a href="#">Політика торгової марки</a>
                </div>
                <div class="footer__item">
                    <a href="#">Правила спільноти</a>
                </div>
            </div>
        </div>
    </div>
</footer>