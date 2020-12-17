<?php 

class areasModel extends Model{
     function __construct(){
    	parent::__construct();
    }

	public function obtenerareas($campo=null,$valor=null){
		return $this->_db->query("SELECT * FROM areas")->fetchAll();
		
	}

	public function agregarareas($area, $descripcion_area){
	  $this->_db->prepare('INSERT INTO areas(area, descripcion_area) VALUES(:area, :descripcion_area)')
	  ->execute(array(
			'area' => $area,
			'descripcion_area' => $descripcion_area
		));
	}
		
 	public function actualizar($datos)
	{
		$this->_db->prepare('UPDATE areas SET 
			area = :are, descripcion_area = :descrip
			where id_area = :id')->execute(array(
				'id' => $datos['id'],
				'are' => $datos['area'],
				'descrip' => $datos['descripcion']		
	    ));
	}


	public function delArea($id){
		$this->_db->prepare("DELETE FROM areas WHERE id_area = :id")->execute(["id" => $id]);
	}
}


 ?>
