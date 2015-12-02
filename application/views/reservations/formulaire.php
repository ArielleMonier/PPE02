<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/css/formulaire.css" />
        <title></title>
    </head>
    <body>
        <?php
        echo validation_errors();
        echo form_open('reservations/ajout_utilisateur');
        ?>
        
         <label for="id">Votre id : </label>
         <input type="text" name="id" value=""/><br />

        <label for="date_arrivee">Date d'arrivée :</label>
        <input type="date" name="date_arrivee" /><br />

        <label for="date_depart"> Date de départ : </label>
        <input type="date" name="date_depart" /><br />

        <label for="nbpersonnes">Nombre de personnes : </label>
        <input type="text" name="nbpersonnes" value="" /><br />
        
        <label>Pension : </label>
        <select name = "pension">
            <option value="pension_complete">Pension complete</option>
            <option value="demi-pension">Demi-pension</option>
        </select><p><br></p>
        
        <label for="forfait">Voulez-vous le forfait "ménage de fin de séjour" ?</label>
        <input type="radio" name="forfait" value=1 />Oui
        <input type="radio" name="forfait" value=0 checked/>Non
        <p><br></p>

        <input type="submit" name="submit" value="Réserver !" />
        <?php echo form_close(); ?><br/>
        
        
        <a href="http://localhost/codeigniter/index.php/Reservations/calendrier">Retour au calendrier</a>
    </body>
</html>
