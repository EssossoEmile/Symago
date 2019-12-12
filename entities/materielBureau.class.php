<?php
class MaterielBureau{
	private $_idMateriel;
	private $_code;
	private $_nomAttribution;
	private $_materiel;
	private $_dateAttribution;
	private $_dateFinAttribution;
	private $_heureAttribution;
	private $_heureFinAttribution;
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
	public function setIdMateriel($var){
		$this->_idMateriel=$var;
	}
	public function getIdMateriel(){
		return $this->_idMateriel;
	}
	 public function setCode($var){
		$this->_code=$var;
	}
	public function getCode(){
		return $this->_code;
	}
	public function setNomAttribution($var){
		$this->_nomAttribution=$var;
	}
	public function getNomAttribution(){
		return $this->_nomAttribution;
	}
	public function setMateriel($var){
		$this->_materiel=$var;
	}
	public function getMateriel(){
		return $this->_materiel;
	}
	public function setDateAttribution($var){
		$this->_dateAttribution=$var;
	}
	public function getDateAttribution(){
		return $this->_dateAttribution;
	}
	public function setDateFinAttribution($var){
		$this->_dateFinAttribution=$var;
	}
	public function getDateFinAttribution(){
		return $this->_dateFinAttribution;
	}
	public function setHeureAttribution($var){
		$this->_heureAttribution=$var;
	}
	public function getHeureAttribution(){
		return $this->_heureAttribution;
	}
	public function setHeureFinAttribution($var){
		$this->_heureFinAttribution=$var;
	}
	public function getHeureFinAttribution(){
		return $this->_heureFinAttribution;
	}
	public function setMatricule($var){
		$this->_matricule=$var;
	}
	public function getMatricule(){
		return $this->_matricule;
	}

}
