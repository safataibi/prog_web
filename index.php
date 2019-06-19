<?php
  session_start();
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <title> Centre Frantz Fanon </title>
  </head>

  <body>
<div id="entete">
<img id="logo" src="" alt="logo du site"/>
    <h1> Centre Frantz Fanon </h1>
</div>

<ul id="menu-deroulant">

  <li><a href="index.php">Accueil</a> </li>
  <li><a href="contact/contact.php">Contact</a> </li>
<?php

if(isset($_SESSION['client']))
{
  echo "Bonjour";
  echo " ";
  echo $_SESSION['client']['Prenom'];
  echo " ";
  echo $_SESSION['client']['Nom'];
  echo '<li>
      <a href="panier.php">
     Panier
     </a>
     </li>';
  echo '<li>
     <a href="historique.php">
     Historique
       </a>
       </li>';
  echo '<li>
  <a href="traitement/deconnexion.php"> Déconnexion </a>
  </li>';
}

else
{
    echo '<li>
     <a href="traitement/nouveau.php">
       Nouveau patient
       </a>
       </li>';

       echo ' <li>
       <a href="traitement/connexion.php">
       Se connecter
       </a></li>';

       echo'<li>
       <a href="traitement/inscription.php">
       Inscription
       </a></li>';
}

?>
</ul>

<h2> Né d'un collectif inter-associatif </h2>

<p>
  Le projet, porté par la Cimade, a été pensé par un collectif inter-associatif composé de six associations
  (Médecins du Monde, Adages, le Groupe SOS, La Clède, l'Espélito, et la Cimade)
  toujours impliquées dans le pilotage stratégique du centre.
</p>

<h2> Le nom de Frantz Fanon </h2>

<p>
  Frantz Fanon, essayiste martiniquais, militant anticolonialiste, est l'un des fondateurs de la pensée
  tiers-mondiste. Il a notamment analysé et dénoncé les effets de la violence coloniale. Son approche novatrice
  dans la relation soignant/soigné, sa volonté de restaurer chez ses patients ce qui peut faire sens chez eux
  (leurs référents culturels, leur langue et l'organisation de leur vie sociale), tout en articulant les soins
  psychiques au contexte politique dans lesquels ils ont lieu, est une clinique de lien social qui fait écho à
  la clinique de l'exil que nous proposons au centre de soins et de ressources.
</p>

<h2> Le pôle soins </h2>

<p>
  Les modalités des suivis psychologiques proposés (type de consultation: individuelle ou familiale; durée;
  fréquence de la prise en charge) sont à définir avec chaque patient.e. Les consultations se font dans
  la langue du/de la patient.e en présence d'un.e interprète.
</p>

<p>
  La prise en charge psychothérapeutique des patient.e.s est assurée par des psychologues de sensibilités
  théoriques différentes et complémentaires (approche éthnopsychiatrique, psychanalytique, EMDR), qui se
  retrouvent autour du référentiel d'une clinique de l'exil.
</p>

<p>
  Clinique de l'exil: une clinique qui tient compte à la fois de la nature complexe des troubles psychiques,
  notamment des traumatismes intentionnels, de la dimension interculturelle de la rencontre clinique, de la
  dimension linguistique, et des conditions de vulnérabilité sociale et administrative dans lesquelles peuvent
  se trouver les patient.e.s.
</p>

<p>
  Des groupes de paroles sont proposés aux personnes mineures non accompagnées et aux femmes allophones
  victimes de violences.
</p>

<h2> Le pôle ressources </h2>

<p>
  Le centre de ressources est un pôle de soutien aux professionnel.le.s de la région Occitanie par
  l'organisation de formations, la mise en réseau, et l'organisation d'analyses de pratiques. Il contribue à
  l'émergence d'une offre de soins pérenne dans le droit commun, constitue et forme un réseau d'interprètes
  spécialisé.e.s dans l'accompagnement en santé, et soutient la réplication de centres de soins spécialisés
  de manière à couvrir les besoins à l'échelle de la région Occitanie.
</p>

<p>
  Le centre par la mise en oeuvre d'actions de capitalisation, de plaidoyer et de recherche, développe un
  observatoire régional de la santé mentale des personnes exilées.
</p>
  </body>
  </html>
