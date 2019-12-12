<?php
    require_once '../entities/materiel.class.php';
	
	class MaterielDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
    public function create(Materiel $f){
		$sql = "INSERT INTO person VALUES (null,
				'".$f->getCode()."',
				'".$f->getNom()."' 
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
		$sql="delete from materiel where id_materiel=".$id."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * update exist Person
	 * @param Person $f
	 * @return boolean
	 */
	public function update(Materiel $f){
		$sql = "UPDATE person SET firstName='".$f->getCode()."',
				lastName='".$f->getNom."'
				where id_materiel=".$f->getId()."";
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
		$sql="select * from materiel";
		if($id!=null)$sql.=" where id_materiel=".$id."";
		return $this->_db->query($sql);
	}
		public function getNom($nom){
		$sql="select * from materiel";
		if($matricule!=null)$sql.=" where nom='".$nom."'";
		return $this->_db->query($sql);
	}
	/**
	 * get all Person from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from materiel";
		return $this->_db->query($sql);
	}
	
}