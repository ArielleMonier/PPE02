

<h1> <?php echo "$titre (Client n°$num )"; ?> </h1> 

<p> <?php foreach ($res as $res_new): ?>
<p><?php echo "N° de réservation :" . $res_new['idReserv']; ?> <br/>
        <?php echo" Date d'arrivée : " . $res_new['Date_Arrivee']; ?> <br/>
        <?php echo"Date de départ :" . $res_new['Date_Depart']; ?> <br/>
        <?php echo"Nombre de personne : " . $res_new['Nb_Personnes']; ?> <br/>
        <?php echo "Ménage ? " . $res_new['Menage']; ?> <br/>
        <?php echo"Etat de la réservation : " . $res_new['EtatReservation']; ?></p>


<?php endforeach; ?>

<p>Retour au <a href ='http://localhost/codeigniter/index.php/reservations/calendrier'>calendrier</a>

</p>

