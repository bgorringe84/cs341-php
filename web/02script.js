$(function() {

   $("#submit").click(function(){
      
      $(document.body).css("background", $("#color").val());

   })


   $("#hideBtn").click(function(){
      if($("#third_div").css("visibility") == "hidden"){
         $("#third_div").fadeIn(1000);
      }
      else {
         $("#third_div").fadeOut(1000);
      }
});

});

function displayAlert(){
   alert("Clicked");
}
