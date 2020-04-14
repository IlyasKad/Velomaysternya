
<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: index.php?page=registration');
    } else if(trim($password) == '' || trim($login) == '' || trim( $email) == '' || trim($full_name) == '' ){
        $_SESSION['message'] = 'Заповніть порожнє поле';
        header('Location: index.php?page=registration');
    } else {
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'],  $path)){
            $_SESSION['message'] = 'Помилка під час запуску повідомлення';
            header('Location: index.php?page=registration');
        }

        $password = md5($password);

        //добавление записи в базу данных
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, ' $full_name', '$login','$email', '$password', '$path')");
        // второй парарметр - sql-запрос на базу данных

        $_SESSION['message'] = 'Реєстрація пройшла успішно';
        header('Location: index.php?page=auth');
    }

?>
