<html>
    <head>
        <title>My Form</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/css/formulaire.css" />
    </head>
    <body>

        <?php echo validation_errors(); ?>

        <?php echo form_open('reservations/create_compte'); ?>
        <div>
            <label>Login : </label>
            <input type="text" name="login" value="" size="30" />

            <label>Mot de passe : </label>
            <input type="password" name="password" value="" size="30" />

            <label>Confirmer mot de passe : </label>
            <input type="password" name="passconf" value="" size="30" />
            <?php
            
            ?>
            <label>Nom : </label>
            <input type="text" name="nom" value="" size="30" />

            <label>Prenom :</label>
            <input type="text" name="prenom" value="" size="30" />
        </div>
        <br />


        <div><input type="submit" value="Créer !" />
            <a href="http://localhost/codeigniter/index.php/Reservations/calendrier" id ="bouton" class="bouton" style='font-family:"trebuchet ms","sans-serif"'>Retour !</a>
        </div>
<?php echo form_close(); ?><br/>

    </form>

</body>
</html>
