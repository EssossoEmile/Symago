<?php
    require_once '../entities/personAuto.class.php';
	
	class PersonAutoDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new PersonAuto
	 * @param PersonAuto $f
	 */
	public function create(PersonAuto $f){
		$sql = "INSERT INTO person_auto VALUES (
				'".$f->getIdPerson()."',
				'".$f->getIdAuto()."'
			)";
		$this->_db->exec($sql);
	}
	
	/**
	 * get all PersonAuto from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from person_auto";
		return $this->_db->query($sql);
	}
}