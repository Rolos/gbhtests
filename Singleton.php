<?php

class Singleton{

	//variable que tendra la instancia unica de esta clase
	public static $instance;

	//esta variable mantiene el conteo
	public static $count;

	//el constructor privado es el corazon del singleton
	private function __construct(){}

	//este metodo retorna el conteo total de veces que el metodo ha sido llamado
	public static function count(){
		return self::$count;
	}

	//nuestro metodo de prueba. Aqui contaremos el numero de veces que este metodo es llamado
	public function call(){		
		self::$count++;
	}

	//esta funcion retorna la unica instancia de este objeto
	public static function getInstance(){
		if(self::$instance === null){
			self::$instance = new Singleton();
		}
		return self::$instance;
	}
}