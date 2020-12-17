<?php
    class empleadoModel extends Model{
        function __construct(){
            parent::__construct();
        }
    
        public function obtenerempleados(){
            return $this->_db->query("SELECT * FROM usuario")->fetchAll();
        }

        public function agregar_empleado($nombre, $apellido, $f_nacimiento, $telefono, $usuario, $correo, $pass, $rol){
            $this->_db->prepare('INSERT INTO usuario(nombre, apellido, f_nacimiento, telefono, usuario, correo, pass, rol) VALUE(:nombre, :apellido, :f_nacimiento, :telefono, :usuario, :correo, :pass, :rol)')
            ->execute(array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'f_nacimiento' => $f_nacimiento,
                'telefono' => $telefono,
                'usuario' => $usuario,
                'correo' => $correo,
                'pass' => $pass,
                'rol' => $rol
            ));
        }


        public function actualizar($datos){
            $this->_db->prepare('UPDATE usuario SET nombre = :nombre, apellido = :apellido, f_nacimiento = :f_nacimiento, telefono = :telefono, usuario = :usuario, correo = :correo, pass = :pass, rol = :rol WHERE id = :id')->execute(array(
                'id' => $datos['id'],
                'nombre' => $datos['nombre'],
                'apellido' => $datos['apellido'],
                'f_nacimiento' => $datos['f_nacimiento'],
                'telefono' => $datos['telefono'],
                'usuario' => $datos['usuario'],
                'correo' => $datos['correo'],
                'pass' => $datos['pass'],
                'rol' => $datos['rol']

            ));
        }

        public function elimempl($id){
            $this->_db->prepare('DELETE FROM usuario WHERE id = :id')->execute(["id"=>$id]);
        }
    }
?>