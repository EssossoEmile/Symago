<?php
    require_once '../entities/bureau.class.php';
	
	class BureauDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new Bureau
	 * @param Bureau $f
	 */
	public function create(Bureau $f){
		$sql = "INSERT INTO bureau VALUES (null,
				'".$f->getNomBureau()."',
				".$f->getOccupe().",
				'".$f->getNomPersonne()."',
				'".$f->getMatricule()."'
			)";
		$this->_db->exec($sql);
	}
	/**
	 * delete exist Bureau
	 * @param unknown $id
	 * @return boolean
	 */
	public function delete($id){
		//now delete Bureau
		$sql="delete from bureau where id_bureau=".$id."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * update exist Bureau
	 * @param Bureau $f
	 * @return boolean
	 */
	public function update(bureau $f){
		$sql = "UPDATE bureau SET nomBureau='".$f->getNomBureau()."',
				nomBureau='".$f->getNomBureau()."',
				occupe=".$f->getOccupe().",
				nomPersonne='".$f->getNomPersonne()."',
				matricule='".$f->getMatricule()."'
				where id_bureau=".$f->getIdBureau()."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * get one Bureau from exist id
	 * @param unknown $id
	 * @return PDOStatement
	 */
	public function get($id){
		$sql="select * from bureau";
		if($id!=null)$sql.=" where id_bureau=".$id."";
		return $this->_db->query($sql);
	}
	/**
	 * get one Bureau 
	 * @param unknown $occupe
	 * @return PDOStatement
	 */
	public function getOccupe($matricule){
		$sql="select * from bureau";
		if($matricule!=null)$sql.=" where matricule=".$matricule."";
		return $this->_db->query($sql);
	}
	/**
	 * get all Bureau from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from bureau";
		return $this->_db->query($sql);
	}
}