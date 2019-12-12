<?php
    require_once '../entities/person.class.php';
	
	class PersonDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new Person
	 * @param ParcAuto $f
	 */
	public function create(Person $f){
		$sql = "INSERT INTO person VALUES (null,
				'".$f->getFirstName()."',
				'".$f->getLastName()."',
				'".$f->getMatricule()."'
			)";
		$this->_db->exec($sql);
	}
	/**
	 * delete exist Person
	 * @param unknown $id
	 * @return boolean
	 */
	public function delete($id){
		//now delete Person
		$sql="delete from person where id_person=".$id."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * update exist Person
	 * @param Person $f
	 * @return boolean
	 */
	public function update(person $f){
		$sql = "UPDATE person SET firstName='".$f->getFirstName()."',
				lastName='".$f->getLastName()."',
				matricule='".$f->getMatricule()."'
				where id_person=".$f->getId()."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * get one Person from exist id
	 * @param unknown $id
	 * @return PDOStatement
	 */
	public function get($id){
		$sql="select * from person";
		if($id!=null)$sql.=" where id_person=".$id."";
		return $this->_db->query($sql);
	}
		public function getMatricule($matricule){
		$sql="select * from person";
		if($matricule!=null)$sql.=" where matricule='".$matricule."'";
		return $this->_db->query($sql);
	}
	/**
	 * get all Person from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from person";
		return $this->_db->query($sql);
	}
}