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
                <button class="btn btn-primary editcatg" data-toggle="modal" data-target="#editcat" data-p=\'' .$datos. '\'>
                <span class="fas fa-edit"></span>
                </button>
            </td>
            <td class="text-center"> 
                <button class="btn btn-danger elimcatg ml-3" data-elim=\'' .$f['id_area']. '\'>
                <span class="fas fa-trash"></span>
                </button></td>
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

    //se envia ala informacion atraves de ajax a este metodo update
    public function update(){

        //se crea un metodo en el modelo actualizar y sele manda un array
        //con los datos que bienen de ajax
        $this->_areas->actualizar(array(
            "id" => $this->getTexto('id'),
            "area" => $this->getTexto('area'),
            "descripcion" => $this->getTexto('descripcion')
        ));

        //se hace un echo de la tabla con la nueva informacion
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

    //se envia la informacion desde ajax al metodo delete
    public function delete(){
        //se crea el metodo en el  modelo llamado delArea y se le pasa el id
       $this->_areas->delArea($this->getTexto('id'));
       //se hace un echo de la tabla con la nueva informacion
       echo $this->generarTabla();
    }
    

}


 ?>
