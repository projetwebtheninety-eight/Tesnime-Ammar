<?php 
include_once "config.php";
class PromoC{
public function ajouterPromo($produit)
	{
		try{
			$it = $produit->getImageTmp();
			$i = $produit->getImage();
			//move the uploaded pictures
			//move_uploaded_file($it,"../uploads/$i");
			
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('INSERT INTO promo(nom, prix, prixred , image,like_promo,dislike) 
									  VALUES (:n,:p,:pred,:i,0,0)');
			$n = $produit->getNom();

			$p = $produit->getPrix();
			$pred = $produit->getPrixred();
			$i = $produit->getImage();
			
			
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':pred', $pred);
			$stmt->bindparam(':i', $i);
			
		

			$stmt->execute();

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function   afficherPromo()
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT `nom`, `prix`, `prixred`, `image`, `id` FROM `promo`  ');
			$stmt->execute();
			$produits=$stmt->fetchAll();
			return $produits;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}

	public function supprimerPromo($id){
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('DELETE FROM promo WHERE id = :id');
			$stmt->bindparam(":id",$id);
			if($stmt->execute())
				header('location: afficherPromo.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function ModifierPromo($produit){
		try{
			$n = $produit->getNom();
			$p = $produit->getPrix();
			$pred = $produit->getPrixred();
			$i = $produit->getId();

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('UPDATE promo SET nom = :n,prix = :p, prixred = :pred where  id = :id');
			
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':pred', $pred);
			$stmt->bindparam(':id', $i);
			if($stmt->execute())
				header('location: afficherPromo.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	 function updateLike($id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE promo SET  like_promo=like_promo+1 where id=:u";
 		try{

        $req=$db->prepare($sql);
		
        
		
		
        $req->bindValue(':u',$id);
		
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}

	function updateDislike($id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE promo SET  dislike=dislike+1 where id=:u";
 		try{

        $req=$db->prepare($sql);
		
        
		
		
        $req->bindValue(':u',$id);
		
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	
}
	
 ?>