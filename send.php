<?php

if(!empty($_POST)) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $error = false;

    if (trim($name) == '') {
        $error = true;
        $namePlaceholder = 'Введіть ваше ім\'я!';
    }
    if (trim($surname) == '') {
        $error = true;
        $surnamePlaceholder = 'Введіть ваше прізвище!';
    }
    if (trim($email) == '') {
        $error = true;
        $emailPlaceholder = 'Введіть ваш email!';
    }
    if (trim($phone) == '') {
        $error = true;
        $phonePlaceholder = 'Введіть ваш телефон!';
    }
    if (strlen($comment) < 5) {
        $error = true;
        $commentPlaceholder = 'Коментар повинен містити більше 5 символів!';
    }
    if (trim($comment) == '') {
        $error = true;
        $commentPlaceholder = 'Введіть ваш коментар!';
    }

    if ($error == false) {
        $message = 'Ім\'я: ' . $name . ' Прізвище: ' . $surname . ' Телефон: ' . $phone . ' Коментар: ' . $comment;
        $subject = "=?utf-8?B?" . base64_encode("Текстове повідомлення") . "?=";
        $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
        mail('kadyrbekov@gmail.com', $subject, $message, $headers);
    }
}

?>

