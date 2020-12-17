<?php
    class librosModel extends Model{
        function __construct (){
            parent::__construct ();
        }
        
        public function obtenerlibros(){
            $fila = $this->_db->query("SELECT * FROM libro")->fetchAll();
                
                return $fila;
            }
        public function agregar_libro($codigo, $titulo, $autor, $editorial, $edicion, $year, $categoria, $proveedor, $fingreso, $cantidad){
            $this->_db->prepare('INSERT INTO libro(codigo, titulo, autor, editorial, edicion, year, categoria, proveedor, fingreso, cantidad) VALUE(:codigo, :titulo, :autor, :editorial, :edicion, :year, :categoria, :proveedor, :fingreso, :cantidad)')
            ->execute(array(
                'codigo' => $codigo,
                'titulo' => $titulo,
                'autor' => $autor,
                'editorial' => $editorial,
                'edicion' => $edicion,
                'year' => $year,
                'categoria' => $categoria,
                'proveedor' => $proveedor,
                'fingreso' => $fingreso,
                'cantidad' => $cantidad
            ));
        }

        public function getCat(){
            $fila= $this->_db->query("SELECT * FROM areas")->fetchAll();
            return $fila;
            }
        
        public function getProv(){
            $fila = $this->_db->query("SELECT * FROM proveedores")->fetchAll();
            return $fila;
        }
    
        public function actualizar($datos){
            $this->_db->prepare('UPDATE libro SET titulo = :titulo, autor = :autor, editorial = :editorial, edicion = :edicion, year = :year, categoria = :categoria, proveedor = :proveedor, fingreso = :fingreso, cantidad = :cantidad WHERE codigo = :codigo')->execute(array(
                'codigo' => $datos['codigo'],
                'titulo' => $datos['titulo'],
                'autor' => $datos['autor'],
                'editorial' => $datos['editorial'],
                'edicion' => $datos['edicion'],
                'year' => $datos['year'],
                'categoria' => $datos['categoria'],
                'proveedor' => $datos['proveedor'],
                'fingreso' => $datos['fingreso'],
                'cantidad' => $datos['cantidad']
            ));
        }

        public function elimli($codigo){
            $this->_db->prepare('DELETE FROM libro WHERE codigo = :codigo')->execute(["codigo"=>$codigo]);
        }
    }