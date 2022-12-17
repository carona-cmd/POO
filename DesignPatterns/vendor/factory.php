<?php

final class Factory
{
	// instance de la classe
	private static $_instance = null;
	private $_namespace;

	// constructeur bloqué
	protected function __construct()
	{ 
	}

	public static function getInstance($namespace = null)
	{
		//si pas d'instance en cours on en crée une
		if(is_null(self::$_instance)) self::$_instance  = new self;
		self::$_instance->_namespace = $namespace;
		return self::$_instance; 
	}

	public function __call($meth, $args)
	{
		// on fabrique le nom de la classe dynamiquement
		$class = ucfirst(strtolower($this->_namespace.$meth));
		//si la classe existe
		if(class_exists($class, false))
		{
			//appel de la classe PHP Reflexion (cf doc)
			$refClass = new ReflectionClass($class);
			// si classe instantiable et possède un constructeur
			if($refClass->isInstantiable() && $refClass->hasMethod('__construct'))
			{
				//appel de la classe et passage des paramètres
			 	return $refClass->newInstanceArgs($args);
			}											 
			else throw new Exception("la classe $class n'est pas instanciable...<br>");
		}																		
		else throw new exception("La classe $class est introuvable...<br>");
	} 	
}