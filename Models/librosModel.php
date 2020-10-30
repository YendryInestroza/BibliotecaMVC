<?php
    class librosModel extends Model
    {
        function __construct (){
            parent::__construct ();
        }
            public function getlibros(){
                $fila = $this->_db->query("SELECT l. *,p.nom_prov FROM 
                libros as l INNER JOIN proveedores as p ON l.proveedor_li=p.p_id")->fetchAll();
                
                return $fila;
            }

        public function agregarLibro($nom,$aut,$ar,$edic,$ed,$prov,$np,$fi,$cant,$pre,$obs){
            $this->_db->prepare("INSERT INTO libros(nom_li, autor_li, area_li, edicion_li, editor_li, proveedor_li, npagina_li, fingreso_li, cantidad_li, precio_li, observaciones_li) 
            VALUES(:nom,:aut,:ar,:edic,:ed,:prov,:np,:fi,:cant,:pre,:obs)")->execute(array(
                "nom" => $nom,
                "aut" => $aut,
                "ar" => $ar,
                "edic" => $edic,
                "ed" => $ed,
                "prov" => $prov,
                "np" => $np,
                "fi" => $fi,
                "cant" => $cant,
                "pre" => $pre,
                "obs" => $obs
            ));
        }

        public function editarLibro($datos){
            foreach($datos AS $key =>$value){
                $$key = $value;
            }
            $this->_db->prepare("UPDATE libros SET nom_li = :nom, autor_li = :aut, area_li =:ar, edicion_li =:edic, editor_li =:ed, proveedor_li =:prov, npagina_li =:np,
                                fingreso_li =:fi, cantidad_li =:cant, precio_li =:pre, observaciones_li =:obs WHERE libros.idlibro =:id")
                ->execute(array(
                    "id"=>$l_id, 
                    "nom" => $l_nom,
                    "aut" => $l_aut,
                    "ar" => $l_ar,
                    "edic" => $l_edic,
                    "ed" => $l_ed,
                    "prov" => $l_prov,
                    "np" => $l_np,
                    "fi" => $l_fi,
                    "cant" => $l_cant,
                    "pre" => $l_pre,
                    "obs" => $l_obs

                ));
        }
        public function getProveedores(){
            $prov=$this->_db->query("SELECT * FROM proveedores")->fetchAll();
                return $prov;
        }

        public function elim($id){
            $this->_db->prepare("DELETE FROM libros WHERE idlibro = :id")->execute(array("id"=>$id));
        }
    }
  ?>