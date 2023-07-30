<?php
date_default_timezone_set("Asia/Jakarta");
if(!isset($_SESSION)) { 
    session_start(); 
}

require_once "controller/base_controller.php";

class SupplierController {
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
   
    function supplier_list(){
        $this->callmodel();
        $model = new model;
        
        $supplier_list = $model->select("supplier");
        return $supplier_list;
    }
    
    function supplier_detail($data){
        $this->callmodel();
        
        $model = new model;
        
        $supplier_detail = $model->selectWhere("supplier", "id_supplier = '$data'");
        return $supplier_detail;
    }

    function supplier_add_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $nama_supplier = $data->get_nama_supplier();
        $no_hp_supplier = $data->get_no_hp_supplier();
        $alamat_supplier = $data->get_alamat_supplier();
        
        $model->insert("supplier", "null, '$nama_supplier', '$no_hp_supplier', '$alamat_supplier'");
    }

    function supplier_edit_submit($data){
        $this->callmodel();
        
        $model = new model;

        $id_supplier = $data->get_id_supplier();
        $nama_supplier = $data->get_nama_supplier();
        $no_hp_supplier = $data->get_no_hp_supplier();
        $alamat_supplier = $data->get_alamat_supplier();
        
        $model->updateWhere("supplier", "nama_supplier = '$nama_supplier', no_hp_supplier = '$no_hp_supplier', alamat_supplier = '$alamat_supplier'", "id_supplier = '$id_supplier'");
    }
    
    function supplier_delete_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_supplier = $data['id_supplier'];
        
        $delete = $model->delete("supplier", "id_supplier = '$id_supplier'");
        return $delete;
    }
}

?>