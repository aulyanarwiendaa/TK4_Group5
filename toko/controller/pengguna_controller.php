<?php
date_default_timezone_set("Asia/Jakarta");
if(!isset($_SESSION)) { 
    session_start(); 
}

require_once "controller/base_controller.php";

class PenggunaController {
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

    // PENGGUNA
    function pengguna_list(){
        $this->callmodel();
        $model = new model;
        
        $pengguna_list = $model->select("pengguna");
        return $pengguna_list;
    }
    
    function pengguna_detail($data){
        $this->callmodel();
        
        $model = new model;
        
        $id = $data;
        
        $penggunaDetail = $model->selectWhere("pengguna", "id_pengguna = '$data'");
        return $penggunaDetail;
    }

    function pengguna_add_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $nama_pengguna = $data->get_nama_pengguna();
        $password = $data->get_password();
        $nama_depan = $data->get_nama_depan();
        $nama_belakang = $data->get_nama_belakang();
        $no_hp = $data->get_no_hp();
        $alamat = $data->get_alamat();
        $id_akses = $data->get_id_akses();
        
        $model->insert("pengguna", "null, '$nama_pengguna', '$password', '$nama_depan', '$nama_belakang', '$no_hp', '$alamat', '$id_akses'");
    }

    function pengguna_edit_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_pengguna = $data->get_id_pengguna();
        $nama_pengguna = $data->get_nama_pengguna();
        $password = $data->get_password();
        $nama_depan = $data->get_nama_depan();
        $nama_belakang = $data->get_nama_belakang();
        $no_hp = $data->get_no_hp();
        $alamat = $data->get_alamat();
        $id_akses = $data->get_id_akses();
        
        $model->updateWhere("pengguna", "nama_pengguna = '$nama_pengguna', password = '$password', nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', no_hp = '$no_hp', alamat = '$alamat', id_akses = '$id_akses'", "id_pengguna = '$id_pengguna'");
    }
    
    function pengguna_delete_submit($data){
        $this->callmodel();
        
        $model = new model;
        
        $id_pengguna = $data['id_pengguna'];
        
        $delete = $model->delete("pengguna", "id_pengguna = '$id_pengguna'");
        return $delete;
    }
}

?>