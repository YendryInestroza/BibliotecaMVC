<?php   
    class librosController extends Controller{
        private $_libros; 
        function __construct(){
            parent::__construct();
                $this->_libros = $this->loadModel('libros');
        }

        /*Llamar las categorías*/ 
        
        public function generarCategoria(){
            $fila = '';
            $datos = $this->_libros->getCat();
            foreach($datos AS $c){

                $fila .= '<option value="'.$c['id_area'].'">'.$c['area'].'</option>';
            }
            return $fila;
        }

        /*Llamar los proveedores*/ 
        public function generarProveedor(){
            $fila = '';
            $datos= $this->_libros->getProv();
            foreach($datos AS $p){
                $fila .= '<option value="'.$p['p_id'].'">'.$p['nom_prov'].'</option>';
            }
            return $fila;
        }



        public function generarTable(){
            $fila = $this->_libros->obtenerlibros();
            $tableli ='';
            foreach($fila AS $l){
                $datos=json_encode($l);

                $tableli.='<tr>
                    <td class="text-center">'.$l['codigo'].'</td>
                    <td>'.$l['titulo'].'</td>
                    <td>'.$l['autor'].'</td>
                    <td class="text-center">'.$l['cantidad'].'</td>
                    <td class="text-center">
                        <button class="btn btn-info verlibro" data-toggle="modal" data-target="#verLibro" data-verli=\'' .$datos. '\'>
                        <span class="fas fa-eye"></span>
                        </button>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary editlibro" data-toggle="modal" data-target="#editLibro" data-editli=\'' .$datos. '\'>
                        <span class="fas fa-edit"></span>
                        </button>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-danger dellibro"  data-delli=\'' .$l['codigo']. '\'>
                        <span class="fas fa-trash"></span>
                        </button>
                    </td>  
                    </tr>';
            }
                return $tableli;
        }

        public function index(){
            
            $tableli = $this->generarTable();
            $this->_view->tableli=$tableli;
            $this->_view->renderizar('index');
            }
            
        public function agregar_libro(){
            if($this->getTexto('agregar')=='1'){
                $codigo = $this->getTexto('codigo');
                $titulo = $this->getTexto('titulo');
                $autor = $this->getTexto('autor');
                $editorial = $this->getTexto('editorial');
                $edicion = $this->getTexto('edicion');
                $year = $this->getTexto('year');
                $categoria = $this->getTexto('categoria');
                $proveedor = $this->getTexto('proveedor');
                $fingreso = $this->getTexto('fingreso');
                $cantidad = $this->getTexto('cantidad');
                $this->_libros->agregar_libro($codigo, $titulo, $autor, $editorial, $edicion, $year, $categoria, $proveedor, $fingreso, $cantidad);
                $this->redireccionar('libros');
            }
            $this->_view->categoria = $this->generarCategoria();
            $this->_view->proveedor = $this->generarProveedor();
            $this->_view->renderizar('agregar_libro');
        }
    
        public function update(){
            $this->_libros->actualizar(array(
                "codigo" => $this->getTexto('codigo'),
                "titulo" => $this->getTexto('titulo'),
                "autor" => $this->getTexto('autor'),
                "editorial" => $this->getTexto('editorial'),
                "edicion" => $this->getTexto('edicion'),
                "year" => $this->getTexto('year'),
                "categoria" => $this->getTexto('categoria'),
                "proveedor" => $this->getTexto('proveedor'),
                "fingreso" => $this->getTexto('fingreso'),
                "cantidad" => $this->getTexto('cantidad')
            ));

            echo $this->generarTable();
        }

        public function delete(){
            $this->_libros->elimli($this->getTexto('codigo'));

            echo $this->generarTable();
        }
    }
?>