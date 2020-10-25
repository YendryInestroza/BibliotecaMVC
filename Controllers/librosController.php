<?php   
    class librosController extends Controller
    {
        private $libros; 

        function __construct (){
            parent::__construct ();
                $this->libros = $this->loadModel("libros");
        }

        public function generarTabla(){
            $fila = $this->libros->getlibros();
            $table ='';
            
            foreach($fila AS $s){

                $datosl=json_encode($s);
                $table .='
                <tr>
                    <td>'.$s['idlibro'].'</td>
                    <td>'.$s['nom_li'].'</td>
                    <td>'.$s['autor_li'].'</td>
                    <td>'.$s['edicion_li'].'</td>
                    <td>'.$s['area_li'].'</td>
                    <td>'.$s['proveedor_li'].'</td>
                    <td>'.$s['npagina_li'].'</td>
                    <td class="text-center"><button class="btn btn-Warning editBoton" data-libros=\''.$datosl.'\' data-target="#edilibro" data-toggle="modal">
                    <i class="fas fa-edit"></i></button></td>
                </tr>
                ';
            }
                return $table;
        }

        public function index(){
            $this->_view->renderizar("index");
            $this->_view->titulo = '<h1 class="h3 text-gray-800 text-center">LIBROS</h1>';
            $table = $this->generarTabla();
            $this->_view->contenido =$table;
    
            $this->_view->renderizar("verlibros");
            }

        public function edit(){
                
                    $l_id = $this->getTexto('l_id');
                    $l_nom = $this->getTexto('l_nom');
                    $l_aut = $this->getTexto('l_aut');
                    $l_ar = $this->getTexto('l_ar');
                    $l_edic = $this->getTexto('l_edic');
                    $l_ed = $this->getTexto('l_ed');
                    $l_prov = $this->getTexto('l_prov');
                    $l_np = $this->getTexto('l_np');
                    $l_fi = $this->getTexto('l_fi');
                    $l_cant = $this->getTexto('l_cant');
                    $l_pre = $this->getTexto('l_pre');
                    $l_obs = $this->getTexto('l_obs');
                    $this->libros->edilibro($l_id,$l_nom,$l_aut,$l_ar,$l_edic,$l_ed,$l_prov,$l_np,$l_fi,$l_cant,$l_pre,$l_obs);

                    echo $this->generarTabla();
            
        }

        public function agregar(){
            if($this->getTexto('add') == '1'){
                $l_nom = $this->getTexto('l_nom');
                $l_aut = $this->getTexto('l_aut');
                $l_ar = $this->getTexto('l_ar');
                $l_edic = $this->getTexto('l_edic');
                $l_ed = $this->getTexto('l_ed');
                $l_prov = $this->getTexto('l_prov');
                $l_np = $this->getTexto('l_np');
                $l_fi = $this->getTexto('l_fi');
                $l_cant = $this->getTexto('l_cant');
                $l_pre = $this->getTexto('l_pre');
                $l_obs = $this->getTexto('l_obs');
                $this->libros->agregarLibro($l_nom,$l_aut,$l_ar,$l_edic,$l_ed,$l_prov,$l_np,$l_fi,$l_cant,$l_pre,$l_obs);
                $this->redireccionar('libros/verlibros');
            }
            $this->_view->renderizar("agregar");
        }
    }
