<!--соединение с базой данных-->

<?php
    $connect = mysqli_connect('localhost', 'root', '27082001', 'users');

    if(!$connect){
        die('Error connect to DataBase');//выведет сообщение и остановит код
    }

?>