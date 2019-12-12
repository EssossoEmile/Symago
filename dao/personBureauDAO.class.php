<?php
    require_once '../entities/personBureau.class.php';
	
	class PersonBureauDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new PersonBureau
	 * @param PersonBureau $f
	 */
	public function create(PersonBureau $f){
		$sql = "INSERT INTO person_bureau VALUES (
				'".$f->getIdPerson()."',
				'".$f->getIdBureau()."'
			)";
		$this->_db->exec($sql);
	}
	
	
	/**
	 * get all PersonBureau from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from person_bureau";
		return $this->_db->query($sql);
	}
}