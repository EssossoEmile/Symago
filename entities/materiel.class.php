<?php
class materiel{
	private $_idMateriel;
	private $_code;
	private $_nom;
	
	
	
	/**
	 * constructor
	 */
	public function __construct(){
	}
	
	//dynamic initialization of attributes via an associative array data (hydration)
	public function hydrate(Array $data){
		foreach ($data as $key => $value){
			// Get the name of the setter for the attribute
			$method = 'set'.ucfirst($key);
			// If the corresponding setter exists.
			if (method_exists($this, $method)){
				// We call the setter.
				$this->$method(addslashes(stripslashes($value)));
			}
		}
	}
	
	/**
	 * getters and sectteurs
	 *
	 */
	public function setIdMateriel($var){
		$this->__idMateriel=$var;
	}
	public function getIdMateriel(){
		return $this->__idMateriel;
	}
	
	public function setNom($var){
		$this->_nom=$var;
	}
	public function getNom(){
		return $this->_nom;
	}
	

}
