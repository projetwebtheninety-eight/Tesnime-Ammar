<?php
require "entities/reservation.php";
require "core/reservationC.php";
$id=$_GET["id"];
$ec= new RdvC();
$ec->SupprimerRdv($id);
echo '<meta http-equiv="refresh" content="0; URL=afficherReservation.php" />';
//header('Location: ../front/dispalyRdvFront.php');
?>