$(document).ready(function () {
   var targetHeight = $(window).height() -250;

   if (targetHeight < 450)
      targetHeight = 450;

   $("#realContent").height(targetHeight); 
});
