function authorization(){

var formData = new FormData($('#authorization')[0]);
$.ajax({
      type: "POST",
      processData: false,
      contentType: false,
      url: "work/authorization.php",
      data: formData 
      })
      .done(function(data) {      	
      if(data=="Авторизован"){
        window.location.href="guestbook.php";
       }
       else{
        alert(data);
       }          
      });  
}

function registration(){

var formData = new FormData($('#registration')[0]);
$.ajax({
      type: "POST",
      processData: false,
      contentType: false,
      url: "work/registration.php",
      data: formData 
      })
      .done(function(data) {        
      if(data=="Зарегистрирован"){
        window.location.href="guestbook.php";
       }
       else{
        alert(data);
       }          
      });   
}

function note(){

var formData = new FormData($('#note')[0]);
$.ajax({
      type: "POST",
      processData: false,
      contentType: false,
      url: "work/note.php",
      data: formData 
      })
      .done(function(data) {        
      if(data=="Добавили"){
        location.reload();
       }
       else{
        alert(data);
       }          
      });   
}

$(".red").on("click",function(){
   var id_form=$(this).attr("att");
    var formData = new FormData($('#'+id_form+'')[0]);
$.ajax({
      type: "POST",
      processData: false,
      contentType: false,
      url: "work/red.php",
      data: formData 
      })
      .done(function(data) {        
      if(data=="Отредактировали"){
        alert("Отредактировали");
       }
       else{
        alert(data);
       }          
      });  
});
$(".del").on("click",function(){
    $.post("work/del.php",
    {
        id_note:$(this).attr("alt")
    },
   function(data) {
      location.reload();
      });  
});