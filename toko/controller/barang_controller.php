<?php
date_default_timezone_set("Asia/Jakarta");
if(!isset($_SESSION)) { 
    session_start(); 
}

require_once "controller/base_controller.php";

class BarangController {
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
   
    // BARANG
    function barang_list(){
        $this->callmodel();
        $model = new model;
        
        $barang_list = $model->select("barang");
        return $barang_list;
    }
    
    function barang_detail($data){
        $this->callmodel();
        
        $model = new model;
        
        $id = $data;
        
        $barangDetail = $model->selectWhere("barang", "id_barang = '$data'");
        return $barangDetail;
    }

    function barang_add_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $nama_barang = $data->get_nama_barang();
        $keterangan = $data->get_keterangan();
        $satuan = $data->get_satuan();
        
        $model->insert("barang", "null, '$nama_barang', '$keterangan', '$satuan', null");
    }

    function barang_edit_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_barang = $data->get_id_barang();
        $nama_barang = $data->get_nama_barang();
        $keterangan = $data->get_keterangan();
        $satuan = $data->get_satuan();
        
        $model->updateWhere("barang", "nama_barang = '$nama_barang', keterangan = '$keterangan', satuan = '$satuan'", "id_barang = '$id_barang'");
    }
    
    function barang_delete_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_barang = $data['id_barang'];
        
        $delete = $model->delete("barang", "id_barang = '$id_barang'");
        return $delete;
    }
}

?>