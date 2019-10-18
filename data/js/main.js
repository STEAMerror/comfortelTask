// index.php кнопка перехода в админ панель
$(document).on('click','#admin',function(){
  $.post("data/php/admin.php", function(data){
    $('main').html(data);
  });
});
//index.php кнопка перехода в user
$(document).on('click','#user',function(){
  $.post("data/php/user.php", function(data){
    $('main').html(data);
  });
});
// main-block.php кнопка "Назад"
$(document).on('click','#back',function(){
  $.post("data/php/main-block.php", function(data){
    $('main').html(data);
  });
});
//Кнопка поиск
$(document).on('click','#search',function(){
  $.post("data/php/user-table.php", function(){
    searchUser();
  });
});
//Кнопка добавить пользователя
$(document).on('click','#add',function(){
  $.post("data/php/admin-add-form.php", function(data){
    $('main').html(data);
  });
});
//Кнопка вызова формы для изменения
$(document).on('click','#change',function(){
  $.post("data/php/admin-change-form.php", function(data){
    $('main').html(data);
  });
});
//Кнопка изменить
$(document).on('click','#changeUser',function(){
  $.post("data/php/admin-change-form.php", function(){
    changeUser();
  });
});
// Кнопка добавить
$(document).on('click','#addUser',function(){
  $.post("data/php/admin-add-form.php", function(){   
    addUser();
  });
});
//Функция добавления нового пользователя
function addUser() {
  var msg = $('#myform').serialize();
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'data/php/add-user.php',
        data: msg,
        success: function(data) {
          $('.user-table').html(data),
          alert('Успех!');
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
//Функция изменения данных пользователя
function changeUser() {
  var msg = $('#myform').serialize();
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'data/php/change-user.php',
        data: msg,
        success: function(data) {
          $('.user-table').html(data);
          alert('Успех!');
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
//Функция поиска пользователя
function searchUser() {
  var msg = $('#myform').serialize();
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'data/php/search-user.php',
        data: msg,
        success: function(data) {
          $('.user-table').html(data);
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
$(document).ready(function(){  
  //Пользователь
  $('#user').click(function(){
      $('.main').each(function(){
          $(this).html('');
          });
      $.ajax({
          url: "data/php/user.php",  
          cache: false,
          success: function(html){  
              $(".main").html(html);  
          }  
      });  
  });
  //кнопка назад
  $('#back').click(function(){
    $('.main').each(function(){
        $(this).html('');
        });
    $.ajax({
        url: "data/php/main-block.php",  
        cache: false,
        success: function(html){  
            $(".main").html(html);  
        }  
    });  
}); 
  //Админка
  $('#admin').click(function(){
      $('.main').each(function(){
          $(this).html('');
          });
      $.ajax({
          url: "data/php/admin.php",  
          cache: false,
          success: function(html){  
              $(".main").html(html);  
          }  
      });  
  });    
});  