<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=cyrillic" rel="stylesheet" />
    <link href="<https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />


    <link rel="stylesheet" href="css/auth.css" />
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <title>Velomaysternya</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['user']){
    header('Location: profile.php');
}
require_once "header.php";

?>

<section class = "auth">
    <div class="container">
        <div class="auth__content">
            <div class="auth__title">
                Реєстрація
            </div>
            <form class="auth__form" action="signup.php" method="post" enctype="multipart/form-data">
                <label>ПІБ</label>
                <input class = "auth__input" type="text" name="full_name" placeholder="Введіть своє повне ім'я">

                <label>Логін</label>
                <input class = "auth__input" type="text" name="login" placeholder="Введіть логін">

                <label>Пошта</label>
                <input class = "auth__input" type="email" name="email" placeholder="Введіть адресу своєї пошти">

                <label>Зображення профілю</label>
                <input class = "auth__input" type="file" name="avatar">

                <label>Пароль</label>
                <input class = "auth__input" type="password" name="password" placeholder="Введіть пароль">

                <label>Підтвердження пароля</label>
                <input class = "auth__input" type="password" name="password_confirm" placeholder="Підтвердіть пароль">

                <button class="auth__btn" type="submit">Увійти</button>
                <p class="auth__question">
                    У вас є акаунт? - <a class="auth__registration" href="auth.php">авторизуйтесь</a>
                </p>
                <?php
                    if($_SESSION['message']) {
                        echo '<p class="auth__msg"> '. $_SESSION['message'] .' </p>';
                    }
                    unset($_SESSION['message']);
                ?>

            </form>
        </div>
    </div>
</section>

<?php
require_once "footer.php";
?>
</body>
</html>

