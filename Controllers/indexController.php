<?php
    class indexController extends controller
    {
        function _construct (){
            parent::_construct();
        }

        public function index(){
            $this->_view->renderizar('index');
            
        }
    }