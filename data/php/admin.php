<main class="block">
<form>  
    <input id="back" type="button" value="Назад">
</form>
<H1>Вы администратор</H1>
<form>  
    <input id="add" type="button" value="Добавить пользователя">
    <input id="change" type="button" value="Изменить">
</form>
<div class="user-table">
  <?php
  //Вызываем поиск для админа как у пользователя
  echo 'Поиск пользователя:';
    require 'user-table.php';
   ?>
</div>
</main>
