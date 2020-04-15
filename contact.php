<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=cyrillic" rel="stylesheet" />
    <link href="<https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />


    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <title>Velomaysternya</title>
</head>

<?php
    require_once "header.php";
    $namePlaceholder = 'Ім\'я';
    $surnamePlaceholder = 'Прізвище';
    $emailPlaceholder = 'Email';
    $phonePlaceholder = 'Телефон';
    $commentPlaceholder = 'Побажання';
    require_once "send.php";
?>


<body>
<!-- Contact me -->
<section class="contact">
    <div class="container">
        <div class="contact__background-img background-img">
            <div class="contact__content">
                <div class="title">
                    Контакти
                </div>
                <hr class="line-under contact__line-under" />
                <div class="contact__description">
                    Для того, щоб зв'язатися зі мною, заповніть форму.
                </div>

                <div class="contact__middle-section">
                    <form action="index.php?page=contact" method="post" class="contact__form">
                        <input class="form__item " type="text" name="name" placeholder="<?=$namePlaceholder?>" />
                        <input class="form__item form__item-unique" type="text" name="surname" placeholder="<?=$surnamePlaceholder?>" />
                        <input class="form__item " type="email" name="email" placeholder="<?=$emailPlaceholder?>"" />
                        <input class="form__item form__item-unique" type="tel" name="phone" placeholder="<?=$phonePlaceholder?>"" />
                        <textarea name="comment"
                            class="form__item textarea"
                            placeholder="<?=$commentPlaceholder?>""
                        ></textarea>
                        <button type="submit" name="send" class="section-btn contact__btn">
                            Відправити
                        </button>

                    </form>
                    <div class="contact__data">
                        <ul class="contact__list">
                            <li class="contact__list-item">
                                <img
                                    class="contact__icon"
                                    src="images/contact-message-icon.svg"
                                    alt="Message icon"
                                />
                                <span class="contact__item-description">
                      kadyrbekov301@gmail.com
                    </span>
                            </li>

                            <li class="contact__list-item">
                                <img
                                    class="contact__icon"
                                    src="images/contact-phone-icon.svg"
                                    alt="Phone icon"
                                />
                                <span class="contact__item-description">
                      +380 50 59 229 37
                    </span>
                            </li>

                            <li class="contact__list-item">
                                <img
                                    class="contact__icon"
                                    src="images/contact-home-icon.svg"
                                    alt="Home icon"
                                />
                                <span class="contact__item-description">
                                    м. Київ вул. Зарічна 25
                                </span>
                            </li>
                        </ul>
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