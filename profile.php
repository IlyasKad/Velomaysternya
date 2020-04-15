<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=cyrillic" rel="stylesheet" />
    <link href="<https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />


    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <title>Velomaysternya</title>
</head>
<body>
<?php
require_once "header.php";
?>
<section class = "profile">
    <div class="container">
        <div class="profile__content">
            <img class="profile__img" src="<?= $_SESSION['user']['avatar'] ?>" alt="Photo of user">
            <div class="profile__main">
                <div class="profile__data">
                    <div class="profile__data-key">
                        <div class="profile__data-item">Ваше ім'я:</div>
                        <div class="profile__data-item">Ваша пошта:</div>
                        <div class="profile__data-item">Телефон:</div>
                        <div class="profile__data-item profile__data-item-del">Мова спілкування:</div>
                        <div class="profile__data-item profile__data-item-add">Мова:</div>
                        <div class="profile__data-item">На рахунку:</div>
                    </div>
                    <div class="profile__data-value">
                        <div class="profile__data-item"> <?= $_SESSION['user']['full_name'] ?> </div>
                        <div class="profile__data-item"> <?= $_SESSION['user']['email'] ?> </div>
                        <div class="profile__data-item profile__data-item-unique"><a href="#">Додати</a></div>
                        <div class="profile__data-item ">Українська</div>
                        <div class="profile__data-item ">0 бонусів</div>
                    </div>
                </div>
                <div class="profile__settings">
                    <div class="profile__settings-item"><a href="#">Редагувати дані</a></div>
                    <div class="profile__settings-item"><a href="#">Змінити пароль</a></div>
                </div>
                <div class="profile__exit"><a href="logout.php">Вихід</a></div>
            </div>
        </div>
    </div>
</section>

<?php
require_once "footer.php";
?>
</body>
</html>

