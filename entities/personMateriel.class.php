<?php
class PersonMateriel{
	private $_idPerson;
	private $_idMateriel;

	
	
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
	public function setIdPerson($var){
		$this->_idPerson=$var;
	}
	public function getIdPerson(){
		return $this->_idPerson;
	}
	public function setIdMateriel($var){
		$this->_idMateriel=$var;
	}
	public function getIdMateriel(){
		return $this->_idMateriel;
	}

}
