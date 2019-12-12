<?php
    require_once '../entities/personMateriel.class.php';
	
	class PersonMaterielDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new PersonMateriel
	 * @param PersonMateriel $f
	 */
	public function create(PersonMateriel $f){
		$sql = "INSERT INTO person_materiel VALUES (
				'".$f->getIdPerson()."',
				'".$f->getIdMateriel()."'
			)";
		$this->_db->exec($sql);
	}
	/**
	 * get all PersonMateriel from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from person_materiel";
		return $this->_db->query($sql);
	}
}