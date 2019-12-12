<?php
class Person{
	private $_idPerson;
	private $_firstName;
	private $_lastName;
	private $_matricule;
	
	
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
	public function setFirstName($var){
		$this->_firstName=$var;
	}
	public function getFirstName(){
		return $this->_firstName;
	}
	public function setLastName($var){
		$this->_lastName=$var;
	}
	public function getLastName(){
		return $this->_lastName;
	}
	public function setMatricule($var){
		$this->_matricule=$var;
	}
	public function getMatricule(){
		return $this->_matricule;
	}
	

}
