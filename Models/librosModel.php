<?php
    class librosModel extends Model
    {
        function __construct (){
            parent::__construct ();
        }
            public function getlibros(){
                $fila = $this->_db->query("SELECT * FROM libros")->fetchAll();
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

        public function edilibro($id,$nom,$aut,$ar,$edic,$ed,$prov,$np,$fi,$cant,$pre,$obs){
            $this->_db->prepare("UPDATE libros SET nom_li=:nom, autor_li=:aut, area_li:ar, edicion_li:edic, editor_li:ed, proveedor_li:prov, npagina_li=:np, fingreso_li=:fi, cantidad_li=:cant, precio_li:pre, observaciones_li=:obs WHERE idlibro =:id")
            ->execute(array(
                "id"=>$id,
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
                "obs" => $obs,
            ));
        }
    }
  