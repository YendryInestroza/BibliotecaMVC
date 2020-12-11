<?php 

class areasModel extends Model{
     function __construct(){
    	parent::__construct();
    }

	public function obtenerareas($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM areas")->fetchAll();
		return $fila;
	}

	public function agregarareas($area, $descripcion_area){
	  $this->_db->prepare('INSERT INTO areas(area, descripcion_area) VALUES(:area, :descripcion_area)')
	  ->execute(array(
		'area'=>$area,
		'descripcion_area'=>$descripcion_area
	));
	}
		
 	public function actualizararea($id_area,$area,$descripcion_area)
	{
		$this->_db->prepare('UPDATE areas SET 
			area, descripcion_area = :area, descripcion_area
			where id_area= :id_area')->execute(array(
				'id_area'=>$id_area,
				'area'=>$area,
				'descripcion_area'=>$descripcion_area		
	    ));
	}

	public function eliminar($idtbCategorias){
        $this->_db->prepare('DELETE FROM tbcategorias WHERE idtbCategorias =:idtbCategorias')->execute(
        	array(
        		'idtbCategorias'=>$idtbCategorias,
        	));
    }
}


 ?>
