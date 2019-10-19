<?php
require_once 'connect.php';
//Получаем методом пост данные формы
$e = $_POST["id"];
//Запрос в бд для удаления данных пользователя
 $query = 'DELETE FROM `user` WHERE `id`=' . $e;
  echo $query;
  $result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
  mysqli_close($con);
?>
