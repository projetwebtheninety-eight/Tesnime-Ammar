<?php 
session_start();
  include_once 'core/PromoC.php';
  include_once 'entities/Promo.php';
  $produitC = new PromoC();

  if (isset($_POST['Ajouter'])) {
    $produit = new Promo($_POST['nom-p'], $_POST['prix-p'], $_POST['pred-p'],  $_FILES['img-p']['name'], $_FILES['img-p']['tmp_name']);
    $produitC->ajouterPromo($produit);
  }
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
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Ajouter Promotion</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                             <form method="post" enctype="multipart/form-data" name="ajouterEvent">



                             

                                <div class="input-group -mb-3">
                      <label>Nom du produit<span></span>
                      </label>
                      <div class="form-group__content">
                        <select class="form-control" name="nom-p" id="exampleSelectGender" >
  //Il ne manque pas quelque chose dans ton select ? Genre le nom du champs ?
<?php
$db = mysql_connect('localhost', 'root', '') or exit(mysql_error());// on sélectionne la base
mysql_select_db('cave',$db) or exit(mysql_error());
 
 
$sql = "SELECT nom FROM produit";
$res = mysql_query($sql) or exit(mysql_error());
while($data=mysql_fetch_array($res)) {
   echo '<option>'.$data["nom"].'</option><br/>'; //Attention à ne pas oublier le . qui sert à concaténer ton expression
}
 
// on ferme la connexion à mysql
mysql_close(); //Facultatif, source de bug sur certaines versions de Wamp
?>
   
</select>
                      </div>
                    </div>
                                <div class="input-group -mb-3">
                      <label>Prix <span></span>
                      </label>
                      <div class="form-group__content">
                        <select class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" name="prix-p" id="exampleSelectGender" >
  //Il ne manque pas quelque chose dans ton select ? Genre le nom du champs ?
<?php
$db = mysql_connect('localhost', 'root', '') or exit(mysql_error());// on sélectionne la base
mysql_select_db('cave',$db) or exit(mysql_error());
 
 
$sql = "SELECT prix FROM produit";
$res = mysql_query($sql) or exit(mysql_error());
while($data=mysql_fetch_array($res)) {
   echo '<option>'.$data["prix"].'</option><br/>'; //Attention à ne pas oublier le . qui sert à concaténer ton expression
}
 
// on ferme la connexion à mysql
mysql_close(); //Facultatif, source de bug sur certaines versions de Wamp
?>
   
</select>
                      </div>
                    </div>
                               
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Prix réduction</label>
                                    <textarea   class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" type=number  name="pred-p" rows="1" ></textarea>
  
                                </div>


              <div><label >Image</label></div>
              <div>  <input class="input-group mb-3" type="file" name="img-p" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required="" value=""></div>
              
             
                

              
                                     
                                </div>

                                

                                	 <div>              <tr>
              <td><input   type="submit" name="Ajouter" class="btn btn-success" value="Ajouter"></td>
            </tr></div>


            </div>
                            </form>
                        
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
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>