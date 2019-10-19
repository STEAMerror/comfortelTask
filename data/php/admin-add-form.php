<?php
//Форма для добавления пользователя
echo'<form>  
<input class="btn" id="back" type="button" value="Назад">
</form>
<form id="myform" method="post" action="javascript:void(0);">
    <p>Фамилия: <input type="text" name="fam" /></p>
    <p>Имя: <input type="text" name="name" /></p>
    <p>Отчество: <input type="text" name="otchestvo" /></p>
    <p><input type="submit" class="btn" id="addUser" value="Добавить"/></p>
</form>';
?>