<?php

class Rdv
{
	private $nom;
	private $prenom;
	private $mail;
	private $adresse;
	private $dateR;
	private $description;
	
	
	function __construct($nom,$prenom,$mail,$add,$date,$descr)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->adresse=$add;
		$this->dateR=$date;
		$this->description=$descr;
		
	}
	
	
	function getDateR()
	{
		return $this->dateR;
	}
	
	function getNom()
	{
		return $this->nom;
	}
	
	function getPrenom()
	{
		return $this->prenom;
	}
	function getMail()
	{
		return $this->mail;
	}
	function getAdd()
	{
		return $this->adresse;
	}
	function getDescr()
	{
		return $this->description;
	}
}