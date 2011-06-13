<?php include "../doctype.php" ?>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="description" content="La Canada Engineering Club team 2429 FRC FLL First Solar Boat">
      <title>Welcome to Team 2429</title>

<link rel="stylesheet" type="text/css" href="slide.css">
<?php include "../menu.php" ?>

<?php include "../top.php" ?>

<!-- The flash goes over this, so it is no good -->
<?php #include "menuabout2429.php" ?> 

<script type="text/javascript" src="../res/swfobject.js"></script>

<script type="text/javascript">

var flashvars = {
   frameWidth:   "10",
      frameColor: "0xffffff",
      frameBorderColor: "0xffffff",
      frameShadowColor: "0x191919",
      frameShadowOFfset: "5"
};
var params = {
   quality: "high",
      bgcolor: "#191919",
      allowFullScreen: "true"
};
swfobject.embedSWF("../res/gallery.swf", "myContent", "100%", "100%",
   "6",
   false, flashvars, params);
</script>	



    <div id="myContent">
      <noscript>
         <h2>Please enable Javascript</h2>
      </noscript>

<script type="text/javascript">
document.write("<h2>PhotoStack requires Macromedia Flash. <\/h2>\n");
document.write("<a href=\"http://www.macromedia.com/go/getflashplayer/\" target=\"_top\">\n");
document.write("<img src=\"../res/img/get_flash_player.gif\" alt=\"Get Flash Player\" width=\"88\" height=\"31\" border=\"0\">\n");
document.write("<\/a>\n");
</script>

  </div>

<?php include "../bottom.php" ?>
