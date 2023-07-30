<?php

class Supplier {
    private $id_supplier;
    private $nama_supplier;
    private $no_hp_supplier;
    private $alamat_supplier;

    function set_id_supplier($id_supplier) {
        $this->id_supplier = $id_supplier;
    }

    function set_nama_supplier($nama_supplier) {
        $this->nama_supplier = $nama_supplier;
    }

    function set_no_hp_supplier($no_hp_supplier) {
        $this->no_hp_supplier = $no_hp_supplier;
    }

    function set_alamat_supplier($alamat_supplier) {
        $this->alamat_supplier = $alamat_supplier;
    }

    function get_id_supplier() {
        return $this->id_supplier;
    }

    function get_nama_supplier() {
        return $this->nama_supplier;
    }

    function get_no_hp_supplier() {
        return $this->no_hp_supplier;
    }

    function get_alamat_supplier() {
        return $this->alamat_supplier;
    }

}