<!DOCTYPE html>

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
        <fieldset>
            <legend>Votre Voyage</legend>
        <!--<div>
            <label for="id">Votre id : </label>
            <input type="text" name="id" value=""/><br />
        </div>-->

        <div>
            <label for="date_arrivee">Date d'arrivée :</label>
            <input type="date" name="date_arrivee" /><br />
        </div>

        <div>
            <label for="date_depart"> Date de départ : </label>
            <input type="date" name="date_depart" /><br />
        </div>

        <div>
            <label for="nbpersonnes">Nombre de personnes : </label>
            <input type="text" name="nbpersonnes" value="" /><br />
        </div>

        <div>
            <label for="pension">Pension : </label>
            <select name = "pension">
                <option value="pension_complete">Pension complete</option>
                <option value="demi-pension">Demi-pension</option>
            </select><br>
        </div>

        <div>
            <label for="forfait">Voulez-vous le forfait "ménage de fin de séjour" ?</label>
            <input type="radio" name="forfait" value=1 />Oui
            <input type="radio" name="forfait" value=0 checked/>Non
            <br>
        </div><br />
        <input type="submit" name="submit" value="Réserver !" />
        <a href="http://localhost/codeigniter/index.php/Reservations/calendrier" id ="bouton" class="bouton" style='font-family:"trebuchet ms","sans-serif"'>Retour !</a>
        <?php echo form_close(); ?><br/>


        
    </body>
</html>
