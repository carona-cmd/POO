<?php
namespace vendor;

class Singleton
{
	// instance en cours de la classe
	protected static $_instance = null;
	// un nombre
	protected $number = 0;

	// constructeur protégé pour éviter un "new Singleton()"
	protected function __construct()
	{
		$this->number++;
	}

	// la méthode principale qui sera appelée
	public static function getInstance()
	{
		// si aucune instance exécutée on en crée une
		if(is_null(self::$_instance))
		{
			self::$_instance = new self;
		}
		// on retourne l'instance (unique) en cours
		return self::$_instance;
	} 

	// méthode pour connaitre le nombre de fois ou le constructeur à été lancé
	function getNumber()
	{
		return $this->number;
	}
}