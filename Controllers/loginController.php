<?php
    class loginController extends Controller{
        function __constructor(){
            parent::__constructor();
        }

        public function index(){
            if($this->getTexto("ingresar")== "1"){
                // Acceso a la base de datos con los campos para verificar el usurio y clave que estos sean validos 

                if($this->getTexto('usuario')== "YendryInestroza" && $this->getTexto('password')=="michy"){
                    // validados
                    Accesos::setDatos('validado',true);
                    Accesos::setDatos('rol','invitado');
                    Accesos::setdatos('usuario', 'Yendry Inestroza');
                    $this->redireccionar('index');
                }else{
                    $this->_view->mensaje = '<div class="alert alert-danger" role="alert">
                    <strong><i class="icon fas fa-exclamation-triangle"></i> Usuario y/o Clave Incorrectos.</strong>
                    </div>';
                }
               
            }
            $this->_view->renderizar("index");
        }
        public function salir(){
            Accesos::salir();
            $this->redireccionar('index');
        }
    }
?>