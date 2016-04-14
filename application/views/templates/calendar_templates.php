<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/css/formulaire.css" />
        <title></title>
    </head>
<?php

echo $this->calendar->generate($annee, $mois, $jour);
?>
<a href="http://localhost/codeigniter/index.php/Reservations/create_compte" id ="bouton" class="bouton" style='font-family:"trebuchet ms","sans-serif"'>S'inscrire</a>
<a href="http://localhost/codeigniter/index.php/Reservations/ajout_utilisateur" id ="bouton" class="bouton" style='font-family:"trebuchet ms","sans-serif"'>Réserver</a>