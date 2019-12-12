<?php
class Bureau{
	private $_idBureau;
	private $_nomBureau;
	private $_occupe;
	private $_nomPersonne;
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
	public function setIdBureau($var){
		$this->_idBureau=$var;
	}
	public function getIdBureau(){
		return $this->_idBureau;
	}
	public function setNomBureau($var){
		$this->_nomBureau=$var;
	}
	public function getNomBureau(){
		return $this->_nomBureau;
	}
	public function setOccupe($var){
		$this->_occupe=$var;
	}
	public function getOccupe(){
		return $this->_occupe;
	}
	public function setNomPersonne($var){
		$this->_nomPersonne=$var;
	}
	public function getNomPersonne(){
		return $this->_nomPersonne;
	}
	public function setMatricule($var){
		$this->_matricule=$var;
	}
	public function getMatricule(){
		return $this->_matricule;
	}
	

}
