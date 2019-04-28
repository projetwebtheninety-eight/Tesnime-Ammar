<?php
session_start();
  include_once 'core/EventC.php';
    $p = new EventC();
    $liste = $p->afficherEvent();
     
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
  
              <td><h3>#</h3></td>
              <td><h3>Image</h3></td>
              <td><h3>Nom</h3></td>
              <td><h3>Description</h3></td>
              <td><h3>Localisation</h3></td>
              <td><h3>Date</h3></td>
              <td><h3>Action</h3></td>
            </tr>
            <?php 
              foreach($liste as $l){
            ?>
            <tr>
              <td><?php echo $l['id'] ?></td>


<td><img src=uploads/<?php echo $l['image']; ?> alt=""></td>
                
              <td><?php echo $l['nom'] ?></td>
              <td><?php echo $l['description'] ?></td>
              <td><?php echo $l['localisation'] ?></td>
               <td><?php echo $l['date'] ?></td>
              
              <td>
                <a href="modifierEvent.php?id=<?php echo $l['id'] ?>">Modifier</a>
                <a href="supprimerEvent.php?id=<?php echo $l['id'] ?>">Supprimer</a>
                
                <a href="chart.php?id=<?php echo $l['id'] ?>">Statistique</a>
              </td>
            </tr>
            <?php } ?>
          </table>
          <div class="form-actions">
          <a class="btn btn-success" href="ajouterEvent.php">Ajouter</a>  
         <a class="btn btn-danger" href="imprimer.php">Imprimer</a>
                 
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