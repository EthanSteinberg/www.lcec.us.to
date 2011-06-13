
<?php 

include "util.php";

class myConnection
{

   private $dbh;
   public function __construct()
   {
      $this->dbh = new PDO('mysql:host=localhost;dbname=users', "ethan", "some");
   }

   public function canEdit( $tableName, $username)
   {
      $sql = 'SELECT * FROM text
         WHERE user= ? AND name = ?';

      $sh1 = $this->dbh->prepare($sql);
      $sh1->execute(array($username,$tableName));
      $res = $sh1->fetchAll();
      if (isset($res[0]))
         return true;

      else
         return false;
   }

   public function getText($tableName)
   {
      $sql = 'SELECT * FROM text
         WHERE  name = ?';

      $sh1 = $this->dbh->prepare($sql);
      $sh1->execute(array($tableName));
      $res = $sh1->fetchAll();

      return $res[0][2];
   }

   public function changeText($tableName, $text)
   {
      $sql = 'UPDATE text
         SET stuff = ?
         WHERE  name = ?';

      $sh1 = $this->dbh->prepare($sql);
      $sh1->execute(array($text,$tableName));
   }



   public function loginAttempt($username, $password)
{
   if (preg_match("/^\w+$/",$username) == 0)
      return false;

   $res = $this->findName($username);

   if (isset($res[0]))
   {
      $p = crypt($password,$res[0][1]);
      if ($res[0][1] != $p)
      {
         return false;
      }

      else
      {
         return true;
      }

   }

}

public function findName($username)
{ 
   {
      $sql = 'SELECT * FROM pass
         WHERE name= ?';

      $sh1 = $this->dbh->prepare($sql);
      $sh1->execute(array($username));
      $res = $sh1->fetchAll();
      return $res;
   }
}

public function createAccount($username, $password)
{
   if (preg_match("/^\w+$/",$username) == 0)
      return false;
   $res = $this->findName($username);

      if (isset($res[0]))
      {
         return false;
      }
      else
      {
         $sql = 'INSERT INTO pass
            VALUES( ?, ?);';

         $sh2 = $this->dbh->prepare($sql);
         $bsr = createHash();
         $sh2->execute(array($_POST['username'],crypt($_POST['password'],$bsr)));
         //print_r($sh2->fetchAll());
         //
         return true;
      }
}
}

?>
