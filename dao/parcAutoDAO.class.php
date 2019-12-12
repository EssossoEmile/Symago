<?php
    require_once '../entities/parcAuto.class.php';
	
	class ParcAutoDAO{
	private $_db;
	
	public function __construct(){
		$this->_db= DB::connectionDB();
	}
	
	/**
	 * create new ParcAuto
	 * @param ParcAuto $f
	 */
	public function create(ParcAuto $f){
		$sql = "INSERT INTO parc_auto VALUES (null,
				'".$f->getNom()."',
				".$f->getEstAttribue().",
				'".$f->getDateArrive()."',
				'".$f->getDateAttribution()."',
				'".$f->getDateFinAttribution()."',
				".$f->getHeureArrive().",
				".$f->getHeureAttribution().",
				".$f->getHeureFinAttribution().",
				'".$f->getNature."',
				'".$f->getNumeroChassis."',
				'".$f->getImmatriculation."',
				'".$f->getMarque;"',
				'".$f->getTypes."',
				".$f->getPuissance.",
				'".$f->getGenre."',
				".$f->getPrixAquisition.",
				'".$f->getNatureUtilisation."',
				'".$f->getPrenom."',
				'".$f->getMatricule."',
				'".$f->getStructureUtilisatrice."',
				'".$f->getFonction."',
				'".$f->getTelephone."',
				'".$f->getLocalisationMateriel."'
			)";
		$this->_db->exec($sql);
	}
	/**
	 * delete exist ParcAuto
	 * @param unknown $id
	 * @return boolean
	 */
	public function delete($id){
		//now delete ParcAuto
		$sql="delete from parc_auto where id_auto=".$id."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * update exist ParcAuto
	 * @param ParcAuto $f
	 * @return boolean
	 */
	public function update(parc_auto $f){
		$sql = "UPDATE parc_auto SET nom='".$f->getNom()."',
				estAttribue=".$f->getEstAttribue().",
				dateArrive='".$f->getDateArrive()."',
				dateAttribution='".$f->getDateAttribution()."',
				dateFinAttribution='".$f->getDateFinAttribution()."',
				heureArrive=".$f->getHeureArrive().",
				heureAttribution=".$f->getHeureAttribution().",
				heureFinAttribution=".$f->getHeureFinAttribution().",
				nature='".$f->getNature."',
				numeroChassis='".$f->getNumeroChassis."',
				immatriculation='".$f->getImmatriculation."',
				marque='".$f->getMarque;"',
				type='".$f->getTypes."',
				puissance=".$f->getPuissance.",
				genre='".$f->getGenre."',
				prixAquisition=".$f->getPrixAquisition.",
				natureUtilisation='".$f->getNatureUtilisation."',
				prenom='".$f->getPrenom."',
				matricule='".$f->getMatricule."',
				structureUtilisatrice='".$f->getStructureUtilisatrice."',
				fonction='".$f->getFonction."',
				telephone='".$f->getTelephone."',
				localisationMateriel'".$f->getLocalisationMateriel."'
				where id_auto=".$f->getId()."";
		$res = $this->_db->exec($sql);
		if($res>0)return true;
		else return false;
	}
	/**
	 * get one ParcAuto from exist id
	 * @param unknown $id
	 * @return PDOStatement
	 */
	public function get($id){
		$sql="select * from parc_auto";
		if($id!=null)$sql.=" where id_auto=".$id."";
		return $this->_db->query($sql);
	}
	/**
	 * get all ParcAuto from database
	 * @return PDOStatement
	 */
	public function getAll(){
		$sql="select * from parc_auto";
		return $this->_db->query($sql);
	}
}