<?php
    class proveedorController extends Controller
    {
        private $proveedores;

        function __construct (){
            parent::__construct();
            $this->proveedores = $this->loadModel("proveedores");
        }

        public function index(){
        
        if($this->getText('Editar_prov')=='1'){
            $p_nom = $this->getTexto("p_nom");
            $p_dir = $this->getTexto("p_dir");
            $p_tel = $this->getTexto("p_tel");
            $p_rep = $this->getTexto("p_rep");
            $this->_proveedores->editarprov($p_nom,$p_dir,$p_tel,$p_rep);
       
        }
        $this->_view->renderizar('index');

    }
        public function verProveedores(){

            if($this->getTexto("add") == "1"){
                $p_nom = $this->getTexto("p_nom");
                $p_dir = $this->getTexto("p_dir");
                $p_tel = $this->getTexto("p_tel");
                $p_rep = $this->getTexto("p_rep");
                $this->proveedores->agregarprov($p_nom,$p_dir,$p_tel,$p_rep);
            }

            $this->_view->titulo = '<h1 class="h3 text-gray-800 text-center">Proveedores</h1>';

            $table = $this->proveedores->getproveedor();
            $this->_view->contenido =$table;

            $this->_view->renderizar('verProveedores');
        }

    }

 
