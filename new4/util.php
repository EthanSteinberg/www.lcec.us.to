<?php
function createHash2()
{
   $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $i = 0;
   $salt = "";


   while ($i < 22 )
   {   $salt .= $characterList{mt_rand(0,strlen($characterList)-1)};
   $i++;
   }

   return '$2a$07$' . $salt;
}

function createHash()
{
   $f = fopen('/dev/urandom', 'r');
   $data = fgets($f, 17);
   return '$2a$07$' . base64_encode($data);
}

function createToken()
{
   return md5(uniqid(rand(), true));
}

