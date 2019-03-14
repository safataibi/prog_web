<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/index.css" />
    <title> Lanimosa </title>
  </head>

  <body>

<?php

function getDB(){
  $bdd = new PDO('mysql:host=localhost;dbname=lanimosa;charset=utf8', 'root', 'root');
  return $bdd;
}

?>
  </body>
  </html>
