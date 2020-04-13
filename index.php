<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=cyrillic"
          rel="stylesheet"/>
    <link href="<https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic"
          rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>

    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>

    <title>Velomaysternya</title>
</head>
<body>

<?php
    require_once "header.php";
    $page = $_GET['page'];
    $page = trim($page);
    $page = stripslashes($page);
    $page = strip_tags($page);


    if ($page == "container") {
        require_once "container.php";
    } else if ($page == "info") {
        require_once "info.php";
    } else if ($page == "auth") {
        require_once "auth.php";
    } else if ($page == "registration") {
        require_once "registration.php";
    } else if ($page == "profile") {
        require_once "profile.php";
    } else if ($page == "signin") {
        require_once "signin.php";
    } else if ($page == "signup") {
        require_once "signup.php";
    } else if ($page == "contact") {
        require_once "contact.php";
    } else {
        require_once "home.php";
    }

    require_once "footer.php";

?>
</body>
</html>