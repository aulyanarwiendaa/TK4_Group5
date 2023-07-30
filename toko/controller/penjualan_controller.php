<?php
date_default_timezone_set("Asia/Jakarta");
if(!isset($_SESSION)) { 
    session_start(); 
}

require_once "controller/base_controller.php";

class PenjualanController {
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
   
    function penjualan_list(){
        $this->callmodel();
        $model = new model;
        
        $penjualan_list = $model->select3Table("penjualan", "customer", "barang", "penjualan.id_customer = customer.id_customer", "barang.id_barang = penjualan.id_barang");
        return $penjualan_list;
    }
    
    function penjualan_detail($data){
        $this->callmodel();
        
        $model = new model;
        
        $penjualan_detail = $model->selectWhere("penjualan", "id_penjualan = '$data'");
        return $penjualan_detail;
    }

    function penjualan_add_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $jumlah_penjualan = $data->get_jumlah_penjualan();
        $harga_jual = $data->get_harga_jual();
        $id_barang = $data->get_id_barang();
        $id_customer = $data->get_id_customer();
        
        $model->insert("penjualan", "null, '$jumlah_penjualan', '$harga_jual', '$id_barang', '$id_customer', NOW(), null");
    }

    function penjualan_edit_submit($data){
        $this->callmodel();
        
        $model = new model;

        $id_penjualan = $data->get_id_penjualan();
        $jumlah_penjualan = $data->get_jumlah_penjualan();
        $harga_jual = $data->get_harga_jual();
        $id_barang = $data->get_id_barang();
        $id_customer = $data->get_id_customer();
        
        $model->updateWhere("penjualan", "jumlah_penjualan = '$jumlah_penjualan', harga_jual = '$harga_jual', id_barang = '$id_barang', id_customer = '$id_customer'", "id_penjualan = '$id_penjualan'");
    }
    
    function penjualan_delete_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_penjualan = $data['id_penjualan'];
        
        $delete = $model->delete("penjualan", "id_penjualan = '$id_penjualan'");
        return $delete;
    }
}

?>