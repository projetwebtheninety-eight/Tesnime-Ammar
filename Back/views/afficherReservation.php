<?php

  require_once 'core/reservationC.php';
    $p = new RdvC();
    $liste = $p->afficherRdv();
     
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Event - Dashboard Admin Template</title>
    <script src="add-event.js">
</script>
<script>
$(document).ready(function(){
  $("#myI").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myT tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <!--

    Template 2108 Dashboard

  http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg02">
    <div class="container">
        <?php include("codex/header.php"); ?>

        <!-- row -->
        <div class="row tm-mt-big">
             <!-- <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">-->
                 <div class="bg-white tm-block"> 
                      <div class="row">
                       <!-- <div class="right_col" role="main"> -->
       
        <!--<div class="right_col" role="main">-->
       
<br>
<br><br>
<br><br><input class="form-control" id="myI" type="text" placeholder="Search.."><br><br><br>
</div>
          <table id="myT" class="table" border="1">

            <tr style="background-color: #00cc99" >
  
              <td><h3>Nom</h3></td>
              <td><h3>Prenom</h3></td>
              <td><h3>Mail</h3></td>
              <td><h3>Adresse</h3></td>
              <td><h3>Date</h3></td>
              <td><h3>Description</h3></td>
            <td><h3>Etat</h3></td>
              <td><h3>Action</h3></td>
            </tr>
            <?php 
              foreach($liste as $l){
            ?>
            <tr>
              <td><?= $l->nom; ?></td>


<td><?= $l->prenom; ?> </td>
                
              <td><?= $l->mail;?></td>
              <td><?= $l->adresse; ?></td>
              <td><?= $l->date; ?></td>
              <td><?= $l->description;?></td>
                <td> <?php if ($l->etat==1) {echo "Yes";} else {echo "No";} ?> </td>
              <td>
                <a href="confirmRdv.php?id=<?= $l->id_rdv ?>">Confirmer</a>
                <a href="supprimerRdv.php?id=<?= $l->id_rdv?>">Refuser</a>
                
              
              </td>
            </tr>
            <?php } ?>
          </table>
          <div class="form-actions">
                           
          </div>
           
        </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018. Created by
                    <a href="http://www.tooplate.com" class="text-white tm-footer-link">The Ninety Eight</a> 
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
     <!-- Chart.js -->
    <script src="../vendor/Chart.js/dist/Chart.min.js"></script>
     <!-- bootstrap-progressbar -->
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
     <!-- gauge.js -->
    <script src="../vendor/gauge.js/dist/gauge.min.js"></script>
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>