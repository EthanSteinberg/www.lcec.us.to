<?php include "doctype.php" ?>
<?php include "util.php" ?>

<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="description" content="La Canada Engineering Club team 2429 FRC FLL First Solar Boat">
      <title>Welcome to Team 2429</title>

<?php include "top.php" ?>
<script type="text/javascript" src="nicEdit.js"> </script>

<script type="text/javascript">
$(document).ready(function () {
   nicEditors.allTextAreas();
   /*$(".editbox").hide();
     $(".unhiding").click(function () {
           var tar = "#" + $(this).attr("target");
                 $(tar).toggle();
                 });*/
});
</script>
<br>

<?php echo createHash() ?>
<br>
<?php echo createHash2() ?>

<br>


<textarea name="wow"> </textarea>

<?php include "bottom.php"  ?>
