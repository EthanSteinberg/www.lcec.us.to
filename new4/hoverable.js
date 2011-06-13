$(document).ready(function ()
{
   $(".hoverable").hover(
      function() {
         this.src = this.src.substr(0,this.src.length-5) + 'b.png';
      },

      function()  {
         this.src = this.src.substr(0,this.src.length-5) + 'a.png';
         });
});
