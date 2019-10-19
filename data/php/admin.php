<main class="block">
<form>  
    <input class="btn" id="back" type="button" value="Назад">
</form>
<H1>Вы администратор</H1>
<form>  
    <input class="btn" id="add" type="button" value="Добавить пользователя">
    <input class="btn" id="change" type="button" value="Изменить">
</form>
<div class="user-table">
  <div class="tabl">
  <?php
  //Вызываем поиск для админа как у пользователя
  echo '<H1>Поиск пользователя:</H1>';
    require 'user-table.php';
   ?>
  </div> 
</div>
</main>
