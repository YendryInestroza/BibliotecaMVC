<?php
    class indexController extends controller
    {
        function _construct (){
            parent::_construct();
        }

        public function index(){
           if(Accesos::getDatos('validado'))
           $this-> _view->renderizar("index");
            else $this->redireccionar('login');
            
        }
    }