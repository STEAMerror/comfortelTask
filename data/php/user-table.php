<?php
//Форма для поиска
echo'<form id="myform" method="post" action="javascript:void(0);">
<p>Фамилия: <input type="text" name="fam" /></p>
 <p>Имя: <input type="text" name="name" /></p>
 <p>Отчество: <input type="text" name="otchestvo" /></p>
 <p>Статус: <input type="text" name="status" /></p>
 <p><input type="submit" class="btn" id="search" value="поиск"/></p>
</form>';
require_once 'connect.php';
//Вывод таблицы пользователя		
$result = mysqli_query ($con, "SELECT * from `user`");
echo '<table border="1">';
echo '<tr> <th> Фамилия </th> <th> Имя </th> <th> Отчество </th> <th> Статус </th> </tr>';
while($name = mysqli_fetch_assoc($result)) {
    echo ' <tr>  <th>' . $name['fam'] . '</th> <th>' . $name['name'] .
	 '</th> <th>' . $name['otchestvo'] . '</th> <th> ' . $name['status'] . '</br> </th>';
	echo '</tr>';
}
echo '</table>';

mysqli_close ($con);

?>
