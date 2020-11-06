$(document).ready(function(){

   $("#btn").click(function(){
       var ime=$("#ime").val();
   var prezime=$("#prezime").val();
   var auto=$("#automobil").val();
   $.ajax({
   type: 'POST', 
   url: 'process.php',
   data: {ime:ime, prezime:prezime, automobil:automobil},
   success: function(data){
   $('#msg').html(data);
   }
   
   }
   )
   
   
   })
   
   })