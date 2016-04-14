<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/css/formulaire.css" />
    </head>
    <body>

        <?php echo form_open('Reservationss/connexion'); ?>
        <div>
            <label>Identifiant : </label><input type="text" name="Login" />
            <br/>
            <label>Mot de passe : </label><input type="password" name="mdp" />
        </div><br />
        <input type="submit" name="submit" value="Se Connecter" />
        <?php echo form_close(); ?>
    </body>
</html>
