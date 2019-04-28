<?php
require '../entities/reservation.php';
require '../core/reservationC.php';

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['adresse']) and isset($_POST['date']) and isset($_POST['description']) ){

//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
if($_POST['nom']=="" or $_POST['prenom']=="" or $_POST['mail']=="" or $_POST['adresse']=="" or $_POST['date']=="" or $_POST['description']=="")
{
	echo "<script type='text/javascript'>";
echo "alert('Please no empty fields!!');
             window.location.href='../blog-detail.php';";
echo "</script>";
	
}
else if ( ctype_alpha($_POST['nom'])==true && ctype_alpha($_POST['prenom'])==true && strtotime($_POST['date']) > strtotime('now'))
{
	 $rdv1=new Rdv($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['adresse'],$_POST['date'],$_POST['description']);
     $rdv1C=new RdvC();
     $rdv1C->ajouterRdv($rdv1);
     //header('Location: ../views/front/sendRdv.php');
	 echo '<meta http-equiv="refresh" content="0; URL=../blog-detail.php" />';
		
     
}
else 
{
	
	 //echo "nom doit etre une chaine!";
	    echo "<script type='text/javascript'>";
       echo "alert('enter the date correcty or nom and prenom !!');
             window.location.href='../blog-detail.php';";
        echo "</script>";
}	
}
?>