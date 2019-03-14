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

<p> Bienvenue chez Lanimosa, votre magasin de décoration d'intérieur design, venu tout droit d'images de vos blogs préférés.  </p>

<table>
  <tr>
    <td>
<img id="image1" src="images/plantes-1.jpg" alt="image plante 1" width=300 height=300 />
</td>
<td>
<img id="image4" src="images/mapemonde.jpg" alt="image mapemonde" width=300 height=300 />
</td>
<td>
  <img src="images/plantes-2.jpg" alt="image plante 2" width=300 height=300 />
</td>
</tr>
<tr>
  <td>
<img id="image2" src="images/lampes-2.jpg" alt="image lampe 2" width=300 height=300 />
</td>
<td>
<img id="image3" src="images/tableau-bois-mur.jpg" alt="image tableau 1" width=300 height=300 />
</td>
<td>
   <img src="images/lampes-3.jpg" alt="image lampe 3" width=300 height=300 />
</td>
</tr>
</table>

<table>
<tr>
       <th>id_art</th>
       <th>nom</th>
       <th>quantite</th>
       <th>prix</th>
</tr>

<?php

include('bd.php');
$chemin="articles/";
$bdd= getDB();
$rep= $bdd -> query("select * from articles");
while ($art = $rep->fetch())
{
  ?>
  <tr>
  <td><?php echo $art["id_art"]; ?></td>
  <td><a href="<?php echo $chemin.$art["nom"].'.html'; ?>"><?php echo $art["nom"]; ?></a></td>
  <td><?php echo $art["quantite"]; ?></td>
  <td><?php echo $art["prix"]; ?></td>
  </tr>
<?php
}
 ?>
</table>

<p>
  <a href="nouveau.php">
    Nouveau client
    </a>
 </p>

<p>
  <a href="connexion.php">
    Se connecter
  </a> 
</p>
       <p class="para"> Page de
         <a href="contact/contact.html">
           Contact
         </a>
       </p>
  </body>
  </html>
