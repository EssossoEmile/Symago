<?php
    require_once '../entities/salleConferance.class.php';
	
	class SalleConferanceDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new SalleConferance
	 * @param SalleConferance $f
	 */
	public function create(SalleConferance $f){
		$sql = "INSERT INTO salle_conferance VALUES (null,
				'".$f->getNom()."',
				'".$f->getDateDebut()."',
				'".$f->getDateFin()."',
				".$f->getStatus().",
				".$f->getHeureDebut().",
				".$f->getHeureFin().",
				'".$f->getMatricule()."',
				'".$f->getRaison()."'
			)";
		$this->_db->exec($sql);
	}
	/**
	 * delete exist SalleConferance
	 * @param unknown $id
	 * @return boolean
	 */
	public function delete($id){
		//now delete SalleConferance
		$sql="delete from salle_conferance where idConfe=".$id."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * update exist SalleConferance
	 * @param SalleConferance $f
	 * @return boolean
	 */
	public function update(SalleConferance $f){
		$sql = "UPDATE SalleConferance SET nom='".$f->getNom()."',
				dateDebut='".$f->getDateDebut()."',
				dateFin='".$f->getDateFin()."',
				status=".$f->getStatus().",
				heureDebut=".$f->getHeureDebut().",
				heureFin=".$f->getHeureFin().",
				matricule='".$f->getMatricule()."',
				raison='".$f->getRaison()."'
				where idConfe=".$f->getId()."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * get one SalleConferance from exist id
	 * @param unknown $id
	 * @return PDOStatement
	 */
	public function get($id){
		$sql="select * from SalleConferance";
		if($id!=null)$sql.=" where idConfe=".$id."";
		return $this->_db->query($sql);
	}
	/**
	 * get all SalleConferance from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from SalleConferance";
		return $this->_db->query($sql);
	}
	public function getAllSalle(){
		$sql="select nom from SalleConferance";
		return $this->_db->query($sql);
	}
}