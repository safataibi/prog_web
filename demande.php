<?php

echo '<meta http-equiv="refresh" content="10; URL=index.php"/>';

include('bd.php');
$bdd= getBD();
$demande = "insert into demande_consult(nom_patient, prenom_patient, adresse,
num_tel, pays_origine, date_arrivee, langue, besoin_interprete, situ_soc_jur, mode_heberg, nom_ref_social,
droits_ouverts, histoire_motif_demande, plaintes_psy_soma, nom_med_traitant,
traitement, antécédents, autre_ref_med) values(
  '".$_POST['n']."',
  '".$_POST['p']."',
  '".$_POST['adr']."',
  '".$_POST['num']."',
  '".$_POST['pays_org']."',
  '".$_POST['date_arr']."',
  '".$_POST['langue']."',
  '".$_POST['interprete']."',
  '".$_POST['ssj']."',
  '".$_POST['heberg']."',
  '".$_POST['refsoc']."',
  '".$_POST['droitsouv']."',
  '".$_POST['histoire']."',
  '".$_POST['plaintesps']."',
  '".$_POST['medt']."',
  '".$_POST['traitemt']."',
  '".$_POST['anten']."',
  '".$_POST['autreref']."'
);";
echo $demande;
$bdd -> query($demande);
?>
