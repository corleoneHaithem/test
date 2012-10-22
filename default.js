$(document).ready(function(){
  $("#h1").click(function(){
   $.post("content.php",{ind:"hh"},function(data){
      $("#id1").text(data);
   });
  
    });
});