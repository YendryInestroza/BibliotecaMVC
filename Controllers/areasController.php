<?php 

class areasController extends Controller{  
    private $_areas;
     function __construct(){
        parent::__construct();
        $this->_areas=$this->loadModel('areas');
    }

    public function generarTabla(){
        $fila=$this->_areas->obtenerareas();
        $tabla='';
        foreach ($fila as $f) {

        $datos= json_encode($f);

        $tabla.='<tr>
       
            <td class="text-center">'.$f['id_area'].'</td>
            <td>'.$f['area'].'</td>
            <td>'.$f['descripcion_area'].'</td>
            <td class="text-center">
                <div class="btn-group">
                   <button class="btn btn-info botonEditar1" data-toggle="modal" data-target="#modalEditarcat" data-p=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                   </button>
                  
                   <button class="btn btn-danger botonEliminar1 ml-3" data-d=\'' .$f['id_area']. '\'>
                    <span class="fas fa-trash"></span>
                   </button>
                </div>
            </td>
            </tr>';
        }

        return $tabla;
    }

    public function index()
    {   
        $tabla=$this->generarTabla();
        $this->_view->tabla=$tabla;
        $this->_view->renderizar('index');
           
    }


    public function edit(){
            $id_area=$this->getTexto('id_area');
            $area=$this->getTexto('area');
            $descripcion_area=$this->getTexto('descripcion_area');
            $this->_area->actualizararea($id_area,$area,$descripcion_area);
        echo $this->generarTabla();
    }

   public function agregarareas(){
        if($this->getTexto('agregar')=='1') {
        $area=$this->getTexto('area');
        $descripcion_area=$this->getTexto('descripcion_area');
        $this->_areas->agregarareas($area, $descripcion_area);
        $this->redireccionar('areas');
    }

        $this->_view->renderizar('agregarareas');
    }























    public function eliminar(){
        $idtbCategorias = $this->getTexto('idtbCategorias');
        $this->_categorias->eliminar($idtbCategorias);
        echo $this->generarTabla();
    }
    

}


 ?>
