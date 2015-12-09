<html>
    <head>
        <title>My Form</title>
        
    </head>
    <body>

        <?php echo validation_errors(); ?>

        <?php echo form_open('reservations/create_compte'); ?>

        <label>Login : </label>
        <input type="text" name="login" value="" size="30" />
        <br>

        <label>Mot de passe : </label>
        <input type="password" name="password" value="" size="30" />
        <br>

        <label>Confirmer mot de passe : </label>
        <input type="password" name="passconf" value="" size="30" />
        <br>

        <label>Nom : </label>
        <input type="text" name="nom" value="" size="30" />
        <br>

        <label>Prenom :</label>
        <input type="text" name="prenom" value="" size="30" />
        <br>

        <label for='admin'>Admin : </label>
        <input type="radio" name="admin" value=1 />Oui
        <input type="radio" name="admin" value=0 checked/>Non
        <br><br>


        <div><input type="submit" value="Créer !" /></div>
        <?php echo form_close(); ?><br/>

    </form>

</body>
</html>
