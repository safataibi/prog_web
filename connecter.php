<?php
  session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/index.css" />
<title> Lanimosa </title>
</head>

<body>
<div id="entete">
<img id="logo" src="images/logo.jpg" alt="logo du site"/>
<h1> Lanimosa </h1>
</div>

<ul id="menu-deroulant">

<li><a href="index.php">Accueil</a> </li>
<li><a>Articles</a>
<ul>
  <li><a href="articles/Lampe.html">Lampe</a></li>
  <li><a href="articles/Plante.html">Plante</a></li>
  <li><a href="articles/Tableau.html">Tableau</a></li>
</ul>

</li>

<li><a href="contact/contact.html">Contact</a>
<ul>
  <li><a href="../contact/contact.html">Présentation</a></li>
  <li><a href="../contact/contact.html">Me contacter</a></li>
</ul>
</li>
</ul>

<?php

  include('bd.php');
  $bdd= getDB();
  $q="select * from clients
    where
    mail='".$_POST['mail']."'
    and mdp='".$_POST['mdp1']."'
    ";
  echo $q;
  $req= $bdd -> query($q);
  $c = $req -> fetch();

if($c['mail']=="" || $c['mdp']=="")
{
  echo '<meta http-equiv="refresh" content="10; URL=connexion.php"/>';
}

else
{
  $_SESSION['client']=array(
    'Nom' => $_POST['n'],
    'Prenom' => $_POST['p'],
    'Mail' => $_POST['mail'],
    'Mot de passe' => $_POST['mdp1']
  );

  echo '<meta http-equiv="refresh" content="10; URL=index.php"/>';
}

?>

</body>
</html>
