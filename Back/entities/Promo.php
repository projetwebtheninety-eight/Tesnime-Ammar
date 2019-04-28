<?php  
class Promo
{
	private $id;
	private $nom;
	private $prix;
	private $prixred;
	private $image;
	private $imageTmp;

	public function setNom($n){
		$this->nom = $n;
	}
	public function setPrix($p){
		$this->prix = $p;
	}
	public function setPrixred($pred){
		$this->prixred = $pred;
	}	
	
	public function setId($id){
		$this->id = $id;
	}
	public function setImage($i){
		$this->image = $i;
	}
	public function setImageTmp($i){
		$this->imageTmp = $i;
	}
	public function getImage(){
		return $this->image;
	}
	public function getImageTmp(){
		return $this->imageTmp;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getPrix(){
		return $this->prix;
	}	
	public function getPrixred(){
		return $this->prixred;
	}	
	
	public function getId(){
		return $this->id;
	}
	function __construct($n,$p, $pred, $i, $it){
		$this->nom  	   = $n;
		$this->prix = $p;
		$this->prixred=$pred;
		$this->image       = $i;
		$this->imageTmp    = $it;

	}
}
	?>