<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/index.css" />
    <title> Lanimosa </title>
        <?php
        if (($_POST['mdp1'] != $_POST['mdp2']) || $_POST['mdp2']="")
        {
          echo '<meta http-equiv="refresh" content="10; URL=nouveau.php?n='.$_POST['n'].'&p='.$_POST['p'].'&adr='.$_POST['adr'].'&num='.$_POST['num'].'&mail='.$_POST['mail'].'"/>';

        }

        else
        {
          echo '<meta http-equiv="refresh" content="10; URL=index.php"/>';
          include('bd.php');
          $bdd= getDB();
          $req = "insert into clients(nom, prenom, adresse, numero, mail, mdp) values(
             '".$_POST['n']."',
             '".$_POST['p']."',
             '".$_POST['adr']."',
             '".$_POST['num']."',
             '".$_POST['mail']."',
             '".$_POST['mdp1']."'
           );";
        echo $req;
        $bdd -> query($req);
}
     ?>
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

<p class="para"> Page de
  <a href="contact/contact.html">
    Contact
  </a>
</p>
</body>
</html>
