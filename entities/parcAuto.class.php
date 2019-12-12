<?php
class ParcAuto{
	private $_idAuto;
	private $_nom;
	private $_estAttribue;
	private $_dateArrive;
	private $_dateAttribution;
	private $_dateFinAttribution;
	private $_heureArrive;
	private $_heureAttribution;
	private $_heureFinAttribution;
	private $_nature;
	private $_numeroChassis;
	private $_immatriculation;
	private $_marque;
	private $_type;
	private $_puissance;
	private $_genre;
	private $_prixAquisition;
	private $_natureUtilisation;
	private $_prenom;
	private $_matricule;
	private $_structureUtilisatrice;
	private $_fonction;
	private $_telephone;	
	private $_localisationMateriel;	
	
	
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
	public function setIdAuto($var){
		$this->_idAuto=$var;
	}
	public function getIdAuto(){
		return $this->_idAuto;
	}
	public function setNom($var){
		$this->_nom=$var;
	}
	public function getNom(){
		return $this->_nom;
	}
	public function setEstAttribue($var){
		$this->_estAttribue=$var;
	}
	public function getEstAttribue(){
		return $this->_estAttribue;
	}
	public function setDateArrive($var){
		$this->_dateArrive=$var;
	}
	public function getDateArrive(){
		return $this->_dateArrive;
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
	public function setHeureArrive($var){
		$this->_heureArrive=$var;
	}
	public function getHeureArrive(){
		return $this->_heureArrive;
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
	public function setNature($var){
		$this->_nature=$var;
	}
	public function getNature(){
		return $this->_nature;
	}
	public function setNumeroChassis($var){
		$this->_numeroChassis=$var;
	}
	public function getNumeroChassis(){
		return $this->_numeroChassis;
	}
	public function setImmatriculation($var){
		$this->_immatriculation=$var;
	}
	public function getImmatriculation(){
		return $this->_immatriculation;
	}
	public function setMarque($var){
		$this->_marque=$var;
	}
	public function getMarque(){
		return $this->_marque;
	}
	public function setTypes($var){
		$this->_type=$var;
	}
	public function getTypes(){
		return $this->_type;
	}
	public function setPuissance($var){
		$this->_puissance=$var;
	}
	public function getPuissance(){
		return $this->_puissance;
	}
	public function setGenre($var){
		$this->_genre=$var;
	}
	public function getGenre(){
		return $this->_genre;
	}
	public function setPrixAquisition($var){
		$this->_prixAquisition=$var;
	}
	public function getPrixAquisition(){
		return $this->_prixAquisition;
	}
	public function setNatureUtilisation($var){
		$this->_natureUtilisation=$var;
	}
	public function getNatureUtilisation(){
		return $this->_natureUtilisation;
	}
	public function setPrenom($var){
		$this->_prenom=$var;
	}
	public function getPrenom(){
		return $this->_prenom;
	}
	public function setMatricule($var){
		$this->_matricule=$var;
	}
	public function getMatricule(){
		return $this->_matricule;
	}
	public function setStructureUtilisatrice($var){
		$this->_structureUtilisatrice=$var;
	}
	public function getStructureUtilisatrice(){
		return $this->_structureUtilisatrice;
	}
	public function setFonction($var){
		$this->_fonction=$var;
	}
	public function getFonction(){
		return $this->_fonction;
	}
	public function setTelephone($var){
		$this->_telephone=$var;
	}
	public function getTelephone(){
		return $this->_telephone;
	}
	public function setLocalisationMateriel($var){
		$this->_localisationMateriel=$var;
	}
	public function getLocalisationMateriel(){
		return $this->_localisationMateriel;
	}

}
