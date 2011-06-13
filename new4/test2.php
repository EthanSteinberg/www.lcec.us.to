<?php 

session_start();
include "login.php";
require_once 'HTMLPurifier.auto.php';
$b = new MyConnection();

include "doctype.php";

if (isset($_SESSION["UserAuthenticated"]) && $_SESSION["UserAuthenticated"] == true)
{
   $username = $_SESSION["UserID"];

   if (isset($_POST["textName"]))
   {
      if ($b->canEdit($_POST["textName"],$username) && $_POST["token"] == $_SESSION["editToken"])
      {
         $purifier = new HTMLPurifier();
         $cleanAlter = $purifier->purify($_POST["alter"]);
         $b->changeText($_POST["textName"],$cleanAlter);
         unset($_SESSION["editToken"]);
      }
   }

}
else
{
   $username = "";
}
$_SESSION["editToken"] = createToken();


function attemptChange($name, $username)
{
   global $b;
   $text = $b->getText($name);
   echo $text . '<br><br>';

   if ($b->canEdit($name,$username))
   {
      $token = $_SESSION["editToken"];

      echo "
         <button type='unhide' class='unhiding' target='" . $name ."'> Edit the text</button>
         <form class='editbox' id='" . $name ."' action='test2.php' method='post'>
         <textarea name='alter' cols='40'>" . $text . " </textarea>
         <input type='hidden' name='textName' value='" . $name . "'/>
         <input type='hidden' name='token' value='" . $token . "'/>
         <input type='submit' />
         </form>
         ";
   }
}
?>

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
   $(".editbox").hide();
   $(".unhiding").click(function () {
      var tar = "#" + $(this).attr("target");
      $(tar).toggle();
   });
});
</script>

<h1 class="centered"> FRC Status Page </h1>
<table border=1>
<tr>
<td> Sections</td>
<td> Code</td>
<td> Mechanical</td>
<td> Electrical</td>
<td> ?</td>
</tr>
<tr>
<td> Captian </td>
<td> Forrest <img width="80" alt="" height="auto" src="/new4/about2429/members/forest.jpg">EmailForCaptainHere</td>
<td> Forrest <img width="80" alt="" height="auto" src="/new4/about2429/members/forest.jpg">EmailForCaptainHere</td>
<td> Forrest <img width="80" alt="" height="auto" src="/new4/about2429/members/forest.jpg">EmailForCaptainHere</td>
<td> Forrest <img width="80" alt="" height="auto" src="/new4/about2429/members/forest.jpg">EmailForCaptainHere</td>
</tr>
<tr>
<td> Current Status </td>
<td> <?php attemptChange("codeStatus",$username)?> </td>
<td> <?php attemptChange("mechanicalStatus",$username)?> </td>
<td> <?php attemptChange("electricalStatus",$username)?> </td>
<td> <?php attemptChange("whatStatus",$username)?> </td>
</tr>
<tr>
<td> Documents(CAD, code repository, etc) </td>
<td> <?php attemptChange("codeDocs",$username)?> </td>
<td> <?php attemptChange("mechanicalDocs",$username)?> </td>
<td> <?php attemptChange("electricalDocs",$username)?> </td>
<td> <?php attemptChange("whatDocs",$username)?> </td>
</tr>
</table>

<?php

if ($username)
   echo 'You are logged in as ' . $username;

else
   echo 'You are not logged in.';
?>

<?php include "bottom.php"  ?>
