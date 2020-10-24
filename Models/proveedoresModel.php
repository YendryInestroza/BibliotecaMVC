<?php
    class proveedoresModel extends Model{
    function __construct(){
        parent::__construct();
        }
    public function getproveedor(){
        $fila = $this->_db->query("SELECT * FROM proveedores")->fetchAll();
        $table ='';
        foreach($fila AS $s){
            $datosp= json_encode($s);
            $table .='
            <tr>
                <td>'.$s['p_id'].'</td>
                <td>'.$s['nom_prov'].'</td>
                <td>'.$s['dir_prov'].'</td>
                <td>'.$s['tel_prov'].'</td>
                <td>'.$s['rep_prov'].'</td>
                <td class="text-center"><button class="btn btn-Warning editBoton" data-prov=\''.$datosp.'\' data-target="#Editar_prove" data-toggle="modal">
                <i class="fas fa-edit"></i></button></td>
            </tr>
                ';
                }
                return $table;
            }

    public function agregarprov($nom,$dir,$tel,$rep){
        $this->_db->prepare("INSERT INTO proveedores(nom_prov, dir_prov, tel_prov, rep_prov) VALUES(:nom,:dir,:tel,:rep)")->execute(array(
                    "nom" => $nom,
                    "dir" => $dir,
                    "tel" => $tel,
                    "rep" => $rep
                ));
            }
    public function editarprov($nom,$dir,$tel,$rep){
        $this->_db->prepare("UPDATE proveedores SET nom_prov=:nom, dir_prov=:dir, tel_prov=:tel, rep_prov=:rep WHERE ")
        ->execute(array(
            "nom" => $nom,
            "dir" => $dir,
            "tel" => $tel,
            "rep" => $rep
        ));
        }
    }