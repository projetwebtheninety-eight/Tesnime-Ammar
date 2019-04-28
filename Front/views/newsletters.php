  
<?php 

$em = '
cavernagouter@gmail.com'; // email 
$nom = '
cavernagouter@gmail.com'; // Nom ou auteur ou speudo ou ... 

// insertion de la news dans sa table: 
$q = "INSERT INTO newsletters (email,nom,date) VALUES('$em','$nom',NOW())"; 
mysql_query($q); 

?> 	




<?php 

  //Vous pouvez apeler ce fichier newsletters.php 
  // OU 
  //lui donner le nom que vous voulez 

  //    CONNECTION 
    
  $mabasededonnee = "cave"; 
    
  $connection = mysql_connect("localhost","root","");  
  // test la connection 
  if ( ! $connection )  
  die ("connection impossible");  
  // Connecte la base 
  mysql_select_db($mabasededonnee) or die ("pas de connection"); 

  //envoie du mail 

  //titre du mail 
  $titre = 'Newletters'; 


  $q = mysql_query("SELECT email FROM newsletters"); // requete 
  $compteur=1; // variable pour compter les mails 
  while ($r = mysql_fetch_array($q)) {  
  $e_mail = $r['email']; //prend l'email de la table 

  // 1 exemple de contenu du mail 
  $contenu = 'Bonjour! <br />Email : '.$e_mail.'<br />'; 
  $contenu .= 'Voici la derniere newletters::'; 
  $contenu .= 'Au revoir <br /><br />'; 
  
  // envoi du mail HTML 
  $from = "From: hello <newsletter@monsite.ext>\nMime-Version:"; 
  $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n"; 
  // envoie du mail 
  mail($e_mail,$titre,$contenu,$from); 

        echo'N° '.$compteur.' - '.$e_mail.' : envoyé avec succés!<br />'; 
        $compteur++; // ajoute 1 à la variale du compteur 
        }  // fin du while 

?> 

