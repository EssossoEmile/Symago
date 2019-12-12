<?php
    require_once '../entities/personSalleConfe.class.php';
	
	class PersonSalleConfeDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new PersonSalleConfe
	 * @param PersonSalleConfe $f
	 */
	public function create(PersonSalleConfe $f){
		$sql = "INSERT INTO person_salle_confe VALUES (
				'".$f->getIdPerson()."',
				'".$f->getIdConfe()."'
			)";
		$this->_db->exec($sql);
	}
	/**
	 * get all PersonSalleConfe from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from person_salle_confe";
		return $this->_db->query($sql);
	}
}