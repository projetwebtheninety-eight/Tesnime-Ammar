<?PHP
require_once "core/PromoC.php";
$id=$_GET["id"];
$rdv1C=new PromoC();
$dataPoints = array(
    array("label"=> "Like", "y"=> (int)$rdv1C->CountLike($id)),
    array("label"=> "Dislike", "y"=> (int)$rdv1C->CountDislike($id))
);
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
             <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                 <div class="bg-white tm-block"> 
                      <div class="row">
                       <!-- <div class="right_col" role="main"> -->
       
        <!--<div class="right_col" role="main">-->
       
<br>
<br><br>
<br><br><input class="form-control" id="myI" type="text" placeholder="Search.."><br><br><br>
</div>
        
		  	   <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Avis"
  },
  data: [{
    type: "column", 
    legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="libStat/canvasjs.min.js"></script>

        
           
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