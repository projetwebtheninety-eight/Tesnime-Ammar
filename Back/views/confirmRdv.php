<?PHP
require "entities/reservation.php";
require "core/reservationC.php";
require_once 'phpmailer/PHPMailerAutoLoad.php';

if(empty($_GET["id"]))
{
	echo "<script type='text/javascript'>";
echo "alert('something wrong!');";
echo "</script>";
exit;
}
else
{
$id=$_GET["id"];
$ec= new RdvC();
$ec->confirmerRdv($id);
//$result=$ec->recupererEmail($id);

$db= mysqli_connect("localhost","root","","cave");
$sql = "SELECT mail FROM  rdv where id_rdv='$id' ";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
$row_data = mysqli_fetch_array($result);
$to =$row_data['mail'];
$subject = "Reservation Evenement";
$messageBody ="Reservation confirmed";


if( $count ==0){
        echo"Jointurek ghalta";
        return;
    }
	else 
	{
		$mail = new PHPMailer();

        $mail->SMTPAuth = true;
        $mail->isSMTP(); // authentication enabled
        $mail->IsHTML(true); 
        $mail->SMTPSecure = 'tls';//turn on to send html email
        // $mail->Host = "ssl://smtp.zoho.com";
        $mail->SMTPKeepAlive = true;   
     
        $mail->Host = "smtp.gmail.com"; 
        $mail->Port = 587;
        $mail->Username = "cavernagouter@gmail.com";
        $mail->Password = "123456caverne";
        $mail->SetFrom("cavernagouter@gmail.com", "La Cavevne gouter");
        $mail->Subject = $subject;
        //$mail->AddEmbeddedImage('img/eyezone1.png','logo');
        $mail->Body = $messageBody;
        $mail->AddAddress($to);
		
		if(!$mail->send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
       } 
       else {
           echo "Message has been sent successfully";
      }
	}


//header('Location: displayRdv.php'); 
}

?>

