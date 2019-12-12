<?php
    require_once '../entities/materielBureau.class.php';
	
	class MaterielBureauDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new MaterielBureau
	 * @param MaterielBureau $f
	 */
	public function create(MaterielBureau $f){
		$sql = "INSERT INTO materiel_bureau VALUES (null,
				'".$f->getNomAttribution()."',
				'".$f->getMateriel()."',
				'".$f->getDateAttribution()."',
				'".$f->getDateFinAttribution()."',
				".$f->getHeureAttribution().",
				".$f->getHeureFinAttribution()."
			)";
		$this->_db->exec($sql);
	}
	/**
	 * delete exist MaterielBureau
	 * @param unknown $id
	 * @return boolean
	 */
	public function delete($id){
		//now delete MaterielBureau
		$sql="delete from materiel_bureau where id_materiel=".$id."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * update exist MaterielBureau
	 * @param MaterielBureau $f
	 * @return boolean
	 */
	public function update(materielBureau $f){
		$sql = "UPDATE materiel_bureau SET code=".$f->getCode().",
				nomAttribution='".$f->getNomAttribution()."',
				materiel='".$f->getMateriel()."',
				dateAttribution='".$f->getDateAttribution()."',
				dateFinAttribution='".$f->getDateFinAttribution()."',
				heureAttribution=".$f->getNomHeureAttribution().",
				heureFinAttribution=".$f->getHeureFinAttribution().",
				matricule=".$f->getMatricule()."
				where 	id_materiel=".$f->getIdMateriel()."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * get one MaterielBureau from exist id
	 * @param unknown $id
	 * @return PDOStatement
	 */
	public function get($id){
		$sql="select * from materiel_bureau";
		if($id!=null)$sql.=" where 	id_materiel=".$id."";
		return $this->_db->query($sql);
	}
	/**
	 * get all MaterielBureau from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from materiel_bureau";
		return $this->_db->query($sql);
	}
}