<?php
require_once 'connect.php';
//Получаем методом пост данные формы
$a = $_POST["fam"];
$b = $_POST["name"];
$c = $_POST["otchestvo"];
$d = $_POST["status"];
$e = $_POST["id"];
//Запрос в бд для изменения данных пользователя
 $query = 'UPDATE `user` SET `fam`="' . $a . '", `name`=' .'"' . $b . '", `otchestvo`=' .
  '"'  . $c . '", `status`=' . '"' . $d . '"' . 'WHERE `id`=' . $e ;
  echo $query;
  $result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
  mysqli_close($con);
?>
<?php
require_once 'connect.php';
//Вывод таблицы пользователя		
$result = mysqli_query ($con, "SELECT * from `user`");
echo '<table border="1">';
echo '<tr><th> id </th> <th> Фамилия </th> <th> Имя </th> <th> Отчество </th> <th> Статус </th> </tr>';
while($name = mysqli_fetch_assoc($result)) {
    echo ' <tr> <th>' . $name['id'] . '</th> <th>' . $name['fam'] . '</th> <th>' . $name['name'] .
	 '</th> <th>' . $name['otchestvo'] . '</th> <th> ' . $name['status'] . '</br> </th>';
	echo '</tr>';
}
echo '</table>';
mysqli_close ($con);

?>