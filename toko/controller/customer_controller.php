<?php
date_default_timezone_set("Asia/Jakarta");
if(!isset($_SESSION)) { 
    session_start(); 
}

require_once "controller/base_controller.php";

class CustomerController {
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
   
    function customer_list(){
        $this->callmodel();
        $model = new model;
        
        $customer_list = $model->select("customer");
        return $customer_list;
    }
    
    function customer_detail($data){
        $this->callmodel();
        
        $model = new model;
        
        $customer_detail = $model->selectWhere("customer", "id_customer = '$data'");
        return $customer_detail;
    }

    function customer_add_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $nama_customer = $data->get_nama_customer();
        $alamat_customer = $data->get_alamat_customer();
        $no_hp_customer = $data->get_no_hp_customer();
        
        $model->insert("customer", "null, '$nama_customer', '$alamat_customer', '$no_hp_customer'");
    }

    function customer_edit_submit($data){
        $this->callmodel();
        
        $model = new model;

        $id_customer = $data->get_id_customer();
        $nama_customer = $data->get_nama_customer();
        $alamat_customer = $data->get_alamat_customer();
        $no_hp_customer = $data->get_no_hp_customer();
        
        $model->updateWhere("customer", "nama_customer = '$nama_customer', alamat_customer = '$alamat_customer', no_hp_customer = '$no_hp_customer'", "id_customer = '$id_customer'");
    }
    
    function customer_delete_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_customer = $data['id_customer'];
        
        $delete = $model->delete("customer", "id_customer = '$id_customer'");
        return $delete;
    }
}

?>