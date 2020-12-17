<?php
    class proveedoresModel extends Model{
        function __construct(){
        parent::__construct();
    }

    public function obtenerproveedores(){
		return $this->_db->query("SELECT * FROM proveedores")->fetchAll();
	}

	public function agregar_prov($nom_prov, $dir_prov, $tel_prov, $rep_prov){
	  $this->_db->prepare('INSERT INTO proveedores(nom_prov, dir_prov, tel_prov, rep_prov) VALUES(:nom_prov, :dir_prov, :tel_prov, :rep_prov)')
	  ->execute(array(
            'nom_prov' => $nom_prov,
            'dir_prov' => $dir_prov,
            'tel_prov' => $tel_prov,
            'rep_prov' => $rep_prov
		));
	}

    public function actualizar($datos){
        $this->_db->prepare('UPDATE proveedores SET nom_prov = :nom_prov, dir_prov = :dir_prov, tel_prov = :tel_prov, rep_prov = :rep_prov WHERE p_id = :p_id')->execute(array(
            'p_id' => $datos['p_id'],
            'nom_prov' => $datos['nom_prov'],
            'dir_prov' => $datos['dir_prov'],
            'tel_prov' => $datos['tel_prov'],
            'rep_prov' => $datos['rep_prov']
        ));
    }

    public function elimprov($p_id){
        $this->_db->prepare("DELETE FROM proveedores WHERE p_id = :p_id")->execute(["p_id" =>$p_id]);
    }

}



?>