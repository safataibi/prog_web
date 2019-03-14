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

  <form method="post" action="enregistrement.php" autocomplete="on">
Nom : <input type="text" name="n" value="<?php if(isset($_GET['n'])){ echo $_GET['n'];}?>"/><br/>
Prenom : <input type="text" name="p" value="<?php if(isset($_GET['p'])){ echo $_GET['p'];}?>"/><br/>
Adresse : <input type="text" name="adr" value="<?php if(isset($_GET['adr'])){ echo $_GET['adr'];}?>"/><br/>
Numéro de téléphone : <input type="text" name="num" value="<?php if(isset($_GET['num'])){ echo $_GET['num'];}?>"/><br/>
Adresse e-mail : <input type="text" name="mail" value="<?php if(isset($_GET['mail'])){ echo $_GET['mail'];}?>"/><br/>
Mot de passe : <input type="password" name="mdp1" value=""/><br/>
Confirmer le mot de passe : <input type="password" name="mdp2" value=""/><br/>
<input type="submit" name="genre" value="Envoyer"/>
  </form>

<p class="para"> Page de
  <a href="contact/contact.html">
    Contact
  </a>
</p>
</body>
</html>
