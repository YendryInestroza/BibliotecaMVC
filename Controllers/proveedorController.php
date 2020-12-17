<?php

    class proveedorController extends Controller{
        private $_proveedores;
        function __construct(){
            parent::__construct();
            $this->_proveedores = $this->loadModel('proveedores');
        }

        public function generarTable(){
            $fila = $this ->_proveedores ->obtenerproveedores();
            $table = '';
            foreach ($fila as $p){
                $datos = json_encode($p);

                $table.='<tr>
                <td class="text-center">'.$p['p_id'].'</td>
                <td>'.$p['nom_prov'].'</td>
                <td>'.$p['dir_prov'].'</td>
                <td>'.$p['tel_prov'].'</td>
                <td>'.$p['rep_prov'].'</td>
                <td class="text-center">
                    <button class="btn btn-primary editprov" data-toggle="modal" data-target="#Editar_prov" data-editp=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                    </button>
                </td>
                <td class="text-center">
                    <button class="btn btn-danger deltprov"  data-deltp=\'' .$p['p_id']. '\'>
                    <span class="fas fa-trash"></span>
                    </button>
                </td>
                </tr>';
            }
            return $table;
        }

        public function index(){
            $table = $this->generarTable();
            $this->_view->table=$table;
            $this->_view->renderizar('index');
        }

        public function agregar_prov(){
            if($this->getTexto('agregar')=='1') {
            $nom_prov = $this->getTexto('nom_prov');
            $dir_prov = $this->getTexto('dir_prov');
            $tel_prov = $this->getTexto('tel_prov');
            $rep_prov = $this->getTexto('rep_prov');
            $this->_proveedores->agregar_prov($nom_prov, $dir_prov, $tel_prov, $rep_prov);
            $this->redireccionar('proveedor');
        }
    
            $this->_view->renderizar('agregar_prov');
        }

        public function update(){
            $this->_proveedores->actualizar(array(
                "p_id" => $this->getTexto('p_id'),
                "nom_prov" => $this->getTexto('nom_prov'),
                "dir_prov" => $this->getTexto('dir_prov'),
                "tel_prov" => $this->getTexto('tel_prov'),
                "rep_prov" => $this->getTexto('rep_prov')
            ));

            echo $this->generarTable();
        }

        public function delete(){
            $this->_proveedores->elimprov($this->getTexto('p_id'));

            echo $this->generarTable();
        }
    }

?>