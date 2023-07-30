<?php
date_default_timezone_set("Asia/Jakarta");
if(!isset($_SESSION)) { 
    session_start(); 
}

require_once "controller/base_controller.php";

class HakAksesController {
    function callasset(){
        $baseController = new BaseController();
        $baseController->callasset();
    }
    function callconnection(){
        $baseController = new BaseController();
        $baseController->callconnection();
    }
    function callsession(){
        $baseController = new BaseController();
        $baseController->callsession();
    }
    function callmodel(){
        $baseController = new BaseController();
        $baseController->callmodel();
    }
   
    // HAK AKSES
    function hak_akses_list(){
        $this->callmodel();
        $model = new model;
        
        $hak_akses_list = $model->select("hak_akses");
        return $hak_akses_list;
    }
    
    function hak_akses_detail($data){
        $this->callmodel();
        
        $model = new model;
        
        $id = $data;
        
        $hakAksesDetail = $model->selectWhere("hak_akses", "id_akses = '$data'");
        return $hakAksesDetail;
    }

    function hak_akses_add_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $nama_akses = $data->get_nama_akses();
        $keterangan = $data->get_keterangan();
        
        $model->insert("hak_akses", "null, '$nama_akses', '$keterangan'");
    }

    function hak_akses_edit_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_akses = $data['id_akses'];
        $nama_akses = $data['nama_akses'];
        $keterangan = $data['keterangan'];
        
        $model->updateWhere("hak_akses", "nama_akses = '$nama_akses', keterangan = '$keterangan'", "id_akses = '$id_akses'");
    }
    
    function hak_akses_delete_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_akses = $data['id_akses'];
        
        $delete = $model->delete("hak_akses", "id_akses = '$id_akses'");
        return $delete;
    }
}

?>