$(document).ready(function(){
  $("#username").click(function(){
   $.post("content.php",{username:$("#username").val()},function(data){
      $("#id1").text(data);
   });
   
  
    });
});