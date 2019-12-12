<?php
class SalleConferance{
	private $_idConfe;
	private $_nom;
	private $_dateDebut;
	private $_dateFin;
	private $_status;
	private $_heureDebut;
	private $_heureFin;
	private $_matricule;
	private $_raison;
	
	
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
	public function setIdConfe($var){
		$this->_idConfe=$var;
	}
	public function getIdConfe(){
		return $this->_idConfe;
	}
	public function setNom($var){
		$this->_nom=$var;
	}
	public function getNom(){
		return $this->_nom;
	}
	public function setDateDebut($var){
		$this->_dateDebut=$var;
	}
	public function getDateDebut(){
		return $this->_dateDebut;
	}
	public function setDateFin($var){
		$this->_dateFin=$var;
	}
	public function getDateFin(){
		return $this->_dateFin;
	}
	public function setStatus($var){
		$this->_status=$var;
	}
	public function getStatus(){
		return $this->_status;
	}
	public function setHeureDebut($var){
		$this->_heureDebut=$var;
	}
	public function getHeureDebut(){
		return $this->_heureDebut;
	}
	public function setHeureFin($var){
		$this->_heureFin=$var;
	}
	public function getHeureFin(){
		return $this->_heureFin;
	}
	public function setMatricule($var){
		$this->_matricule=$var;
	}
	public function getMatricule(){
		return $this->_matricule;
	}
	public function setRaison($var){
		$this->_raison=$var;
	}
	public function getRaison(){
		return $this->_raison;
	}

}
