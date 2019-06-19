<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <title> Fiche de suivi patient </title>
  </head>

  <body>
    <h2> Premier contact et origine de la référence </h2>
<form autocomplete="off" method="post" action="traitement/enregistrement.php">
Date de l’entretien d’accueil et date première consultation: <input type="text" name="date1" value=""><br>
Origine de la référence : <select class="" name="origine">
                            <option value="1">Présentation spontanée</option>
                            <option value="2">Service public</option>
                            <option value="3">Association de soutien</option>
                            <option value="4">Centre d'hébergement ou hôtel</option>
                            <option value="5">Professionnel de santé</option>
                          </select><br>
Si autre, préciser: <input type="text" name="autre" value="">
<br>
<h2> Caractéristique du patient </h2>
  Nom du patient: <input type="text" name="nompa" value=""><br>
  Nom du psychologue: <input type="text" name="nompsy" value=""> <br>
  Nationalité: <input type="text" name="natio" value=""><br>
  Nom du traducteur <input type="text" name="nomtrad" value=""><br>
  Langue du traducteur: <input type="text" name="lang" value=""><br>
  Téléphone du traducteur: <input type="number" name="teltrad" value=""><br>
  Numéro de dossier: <input type="number" name="numdoss" value=""><br>
  Genre: <input type="text" name="genre" value=""><br>
  Date de naissance: <input type="text" name="datenaiss" value=""><br>
  Etude ou Profession: <input type="text" name="etudouprof" value=""><br>
  Situation sociale: <select class="" name="situsoc">
                        <option value="1">Isolé</option>
                        <option value="2">En famille</option>
                        <option value="3">Amis</option>
                      </select><br>

  Présence d'enfants: <select class="" name="enfants">
                        <option value="1">Oui en France</option>
                        <option value="2">Oui au pays</option>
                        <option value="3">Non</option>
                      </select><br>

  Adresse patient: <input type="text" name="adr" value=""><br>
  Téléphone patient: <input type="text" name="telpat" value=""><br>
  Lieu de résidence premier entretien: <select class="" name="dom">
                    <option value="1">CADA, CHRS, CPH</option>
                    <option value="2">Hôtel stable</option>
                    <option value="3">Particulier stable</option>
                    <option value="4">Sans domicile fixe (rue, hôtel précaire, particulier précaire)</option>
                  </select><br>

  Situation légale ou administrative: <select class="" name="sitlegadm">
                    <option value="1">Aucune démarche effectuée</option>
                    <option value="2">Attente préfecture</option>
                    <option value="3">Attente réponse OFPRA</option>
                    <option value="4">Attente recours procédure normale</option>
                    <option value="5">Attente recours procédure prioritaire</option>
                    <option value="6">Attente recours convention Dublin</option>
                    <option value="7">Débouté/réexamen en cours</option>
                    <option value="8">Réfugié statutaire</option>
                  </select><br>

  Accès au soin: <select class="" name="soin">
                    <option value="1">CMU</option>
                    <option value="2">AME</option>
                    <option value="3">Non</option>
                  </select><br>

  Durée de séjour: <select class="" name="dureesej">
                      <option value="1"> < 3 mois</option>
                      <option value="2">de 3 mois à 1 an</option>
                      <option value="3"> > 1 an</option>
  </select><br>

  Evènement de vie, évènements traumatiques et trajectoire: <input type="text" name="eventr" value=""><br>
  Condition du patient au début de la thérapie: <input type="text" name="condition" value=""><br>
  Expression clinique et diagnostique: <input type="text" name="exprclidiag" value=""><br>

  <h2> Thérapie </h2> <br>
            Individuelle: <input type="radio" name="thrp" value="individuelle"><br>
            Groupale: <input type="radio" name="thrp" value="groupale"><br>
            Familiale: <input type="radio" name="thrp" value="familiale"><br>
            Consultation ethnopsychiatrique: <input type="radio" name="thrp" value="consultation ethnopsychiatrique"><br>
            EMDR: <input type="radio" name="thrp" value="EMDR"><br>
<br>

  <table border="1px">
  <th> Tableau des souffrances </th>
  <td> Sévérité </td>
<tr>
  <td> Souffrance liée à des évènements s'étant produits au pays </td>
  <td> <select class="" name="souffrpays">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select> </td>
</tr>
<tr>
  <td> Souffrance liée au parcours d'exil (sauf France) </td>
  <td> <select class="" name="souffrexil">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select> </td>
</tr>
<tr>
  <td> Souffrance sociale en France </td>
  <td> <select class="" name="souffrfr">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select> </td>
</tr>
</table>

<br><br>
Projet thérapeutique: <input type="text" name="prjth" value=""><br>
Difficulté principale rencontrée lors de la thérapie: <input type="text" name="diffp" value="">
<br><br>
<h2>Evaluation Symptomatique </h2>
Date de la dernière consultation: <input type="text" name="datederconsultsymp" value=""><br>
Suivi réalisé: <select class="" name="suivireal">
                <option value="1">Patient jamais venu</option>
                <option value="2">Simple demande ponctuelle</option>
                <option value="3">Arrêt à la première séance</option>
                <option value="4">Suivi thérapeutique mis en place</option>
                <option value="5">Autre</option>
                <input type="text" name="stmp" value="précisez">
              </select><br>

              Arrêt du suivi: <select class="" name="arretsuivi">
                              <option value="1">Fin de cure décidée d'un accord commun</option>
                              <option value="2">A l'initiative du patient</option>
                              <option value="3">A l'initiative du psychologue</option>
                              <option value="4">Motif extérieur (déménagement par ex)</option>
                              <option value="5">Autre</option>
                            </select><br>

              Motifs fin de cure: <select class="" name="motif">
                                  <option value="1">Fin de suivi thérapeutique</option>
                                  <option value="2">En raison d'un faible investissement</option>
                                  <option value="3">En raison d'un problème socio-économique</option>
                                  <option value="4">Difficulté rencontrée par le psychologue</option>
                                  <option value="5">Orientation vers un autre professionnel</option>
                                  <option value="5">Déménagement</option>
                                  <option value="5">Autre raison</option>
                                  <input type="text" name="motif1" value="précisez">
                                </select><br>

<p>Appréciation de l'accompagnement:</p>

<table border="1px">
  <tr>
    <td>Inadaptée</td>
    <td> <input type="radio" name="choix1" value="1"> </td>
  </tr>
  <tr>
    <td>Peu efficace</td>
    <td><input type="radio" name="choix1" value="2"></td>
  </tr>
  <tr>
    <td>Satisfaction moyenne</td>
    <td><input type="radio" name="choix1" value="3"></td>
  </tr>
  <tr>
    <td>Résultats appréciables</td>
    <td><input type="radio" name="choix1" value="4"></td>
  </tr>
  <tr>
    <td>Très bons résultats</td>
    <td><input type="radio" name="choix1" value="5"></td>
  </tr>
</table>

<h2> Evolution Psychosociale </h2>
Date de la dernière consultation: <input type="text" name="datederconsultpsy" value=""><br>
Statut adminstratif à la sortie: <input type="text" name="statadmsort" value=""><br>
Hébergement: <input type="text" name="heberg" value=""><br>
Suivi mis en place: <input type="text" name="smp" value="">  <br>

<p>Appréciation de l'accompagnement:</p>

<table border="1px">
  <tr>
    <td>Inadaptée</td>
    <td> <input type="radio" name="choix2" value="1"> </td>
  </tr>
  <tr>
    <td>Peu efficace</td>
    <td><input type="radio" name="choix2" value="2"></td>
  </tr>
  <tr>
    <td>Satisfaction moyenne</td>
    <td><input type="radio" name="choix2" value="3"></td>
  </tr>
  <tr>
    <td>Résultats appréciables</td>
    <td><input type="radio" name="choix2" value="4"></td>
  </tr>
  <tr>
    <td>Très bons résultats</td>
    <td><input type="radio" name="choix2" value="5"></td>
  </tr>
</table>

<h2>Evolution médicale</h2>
  Date dernière consultation: <input type="text" name="datederconsultmed" value=""><br>
  Référence psychiatrique faite pendant le suivi? A qui? <input type="text" name="refpsy" value=""><br>
  Suivi mis en place: <input type="text" name="smpmed" value=""><br>

<p>Appréciation de l'accompagnement:</p>

<table border="1px">
  <tr>
    <td>Inadaptée</td>
    <td> <input type="radio" name="choix3" value="1"> </td>
  </tr>
  <tr>
    <td>Peu efficace</td>
    <td><input type="radio" name="choix3" value="2"></td>
  </tr>
  <tr>
    <td>Satisfaction moyenne</td>
    <td><input type="radio" name="choix3" value="3"></td>
  </tr>
  <tr>
    <td>Résultats appréciables</td>
    <td><input type="radio" name="choix3" value="4"></td>
  </tr>
  <tr>
    <td>Très bons résultats</td>
    <td><input type="radio" name="choix3" value="5"></td>
  </tr>
</table>
<button type="submit"> Envoyer les informations </button>
</form>
  </body>
  </html>
