<?php   
    class librosController extends Controller
    {
        private $libros; 
        function __construct (){
            parent::__construct ();
                $this->libros = $this->loadModel("libros");
        }
        public function index(){
            if($this->getText('edilibro')=='1'){
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
                $this->_libros->edilibro($l_id,$l_nom,$l_aut,$l_ar,$l_edic,$l_ed,$l_prov,$l_np,$l_fi,$l_cant,$l_pre,$l_obs);
            }
        }
            public function verlibros(){
                $this->_view->titulo = '<h1 class="h3 text-gray-800 text-center">LIBROS</h1>';
                $table = $this->libros->getlibros();
                $this->_view->contenido =$table;
    
                $this->_view->renderizar("verlibros");
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
