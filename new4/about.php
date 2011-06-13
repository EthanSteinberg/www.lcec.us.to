<?php include "doctype.php" ?>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="description" content="La Canada Engineering Club team 2429 FRC FLL First Solar Boat">
      <title>Welcome to Team 2429</title>


<?php include "top.php" ?>

<script type="text/javascript">
$(document).ready(function()  {
   $("#backgroundChange").click(function () {
      $('body').removeClass('normalBg').addClass('specialBg');
   });
});   
</script>

<div class="centered">
<h1>About LCEC.US</h1><br>
The current version of lcec.us is three years old. It was originally desinged with custom PHP and looks much the same as it does now, and then was changed to use iframes. It has now been changed so that it uses only regular pages, no iframes, so that search engines and bookmarking work better. All the HTML and CSS, and some of the JavaScript, on the site is completly custom coded directly out of good old notepad and vim; no evil wysiwyg editors. The area inside the lcec.us/new4 directory is activly maintained, including picture/video slideshows, club calender events, and major club news.
</div>
<br><br><br>
I've gotten repeated requests about wanting to see the site in a white/gray backround. <a href="#" id="backgroundChange">Click here to try this.</a>
<?php include "bottom.php" ?>

