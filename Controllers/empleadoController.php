<?php
    class empleadoController extends Controller{
        private $_empleado;
        function __construct(){
            parent:: __construct();
            $this->_empleado = $this->loadModel('empleado');
        }

        public function generarTable(){
            $fila = $this ->_empleado ->obtenerempleados();
            $tableempl = '';
            foreach ($fila as $e){
                $datos = json_encode($e);

                $tableempl.='<tr>
                <td class="text-center">'.$e['id'].'</td>
                <td>'.$e['nombre'].'</td>
                <td>'.$e['apellido'].'</td>
                <td>'.$e['telefono'].'</td>
                <td>'.$e['rol'].'</td>
                <td class="text-center">
                    <button class="btn btn-info verempl" data-toggle="modal" data-target="#verEmpl" data-verem=\'' .$datos. '\'>
                    <span class="fas fa-eye"></span>
                    </button>
                </td>
                <td class="text-center">
                    <button class="btn btn-primary editempl" data-toggle="modal" data-target="#editEmpl" data-editemp=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                    </button>
                </td>
                <td class="text-center">
                    <button class="btn btn-danger delempl"  data-delem=\'' .$e['id']. '\'>
                    <span class="fas fa-trash"></span>
                    </button>
                </td>
                </tr>';
            }
            return $tableempl;
        }

        public function index(){
            $tableempl = $this->generarTable();
            $this->_view->tableempl=$tableempl;
            $this->_view->renderizar('index');
        }

        public function agregar_empleado(){
            if($this->getTexto('agregar')=='1'){
                $nombre = $this->getTexto('nombre');
                $apellido = $this->getTexto('apellido');
                $f_nacimiento = $this->getTexto('f_nacimiento');
                $telefono = $this->getTexto('telefono');
                $usuario = $this->getTexto('usuario');
                $correo = $this->getTexto('correo');
                $pass = $this->getTexto('pass');
                $rol = $this->getTexto('rol');
                $this->_empleado->agregar_empleado($nombre, $apellido, $f_nacimiento, $telefono, $usuario, $correo, $pass, $rol);
                $this->redireccionar('empleado');
            }
            $this->_view->renderizar('agregar_empleado');
        }

        public function update(){
            $this->_empleado->actualizar(array(
                "id" => $this->getTexto('id'),
                "nombre" => $this->getTexto('nombre'),
                "apellido" => $this->getTexto('apellido'),
                "f_nacimiento" => $this->getTexto('f_nacimiento'),
                "telefono" => $this->getTexto('telefono'),
                "usuario" => $this->getTexto('usuario'),
                "correo" => $this->getTexto('correo'),
                "pass" => $this->getTexto('pass'),
                "rol" => $this->getTexto('rol')
            ));

            echo $this->generarTable();
        }

        public function delete(){
            $this->_empleado->elimempl($this->getTexto('id'));

            echo $this->generarTable();
        }
    }
?>