<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('reservations/create_compte'); ?>

<h5>Login : </h5>
<input type="text" name="login" value="" size="30" />

<h5>Mot de passe : </h5>
<input type="text" name="password" value="" size="30" />

<h5>Confirmer mot de passe : </h5>
<input type="text" name="passconf" value="" size="30" />

<h5>Nom : </h5>
<input type="text" name="nom" value="" size="30" />

<h5>Prenom : </h5>
<input type="text" name="prenom" value="" size="30" />


<div><input type="submit" value="Créer !" /></div>
<?php echo form_close(); ?><br/>

</form>

</body>
</html>
