<?PHP
require_once '../config.php';
class RdvC
{
	function ajouterRdv($rdv){
		$sql="insert into rdv (nom,prenom,mail,adresse,date,description) values (:p,:n,:i,:u,:o,:l)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $date=$rdv->getDateR();
		$nom=$rdv->getNom();
        $prenom=$rdv->getPrenom();
		$mail=$rdv->getMail();
	    $adresse=$rdv->getAdd();
	    $description=$rdv->getDescr();
			
		$req->bindValue(':p',$nom);
		$req->bindValue(':n',$prenom);
		$req->bindValue(':i',$mail);
		$req->bindValue(':u',$adresse);
		$req->bindValue(':o',$date);
		$req->bindValue(':l',$description);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherRdv(){
		$db = config::getConnexion();
       		$sql="SELECT * FROM rdv";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$rdv= $req->fetchALL(PDO::FETCH_OBJ);
		return $rdv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
}
	?>
	