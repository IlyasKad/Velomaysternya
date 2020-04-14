<?php
    session_start();
?>

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
if ($_SESSION['user']){
    header('Location: index.php?page=profile');
}
require_once "header.php";

?>

<section class = "auth">
    <div class="container">
        <div class="auth__content">
            <div class="auth__title">
                Авторизація
            </div>

            <form class="auth__form" action="signin.php" method="post">
                <label>Логін</label>
                <input class = "auth__input" type="text" name="login" placeholder="Введіть логін">
                <label>Пароль</label>
                <input class = "auth__input" type="password" name="password" placeholder="Введіть пароль">
                <button class="auth__btn" type="submit">Увійти</button>
                <p class="auth__question">
                    У вас немає акаунта? - <a class="auth__registration" href="index.php?page=registration">зареєструйтесь</a>
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
