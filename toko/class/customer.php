<?php

class Customer {
    private $id_customer;
    private $nama_customer;
    private $no_hp_customer;
    private $alamat_customer;

    function set_id_customer($id_customer) {
        $this->id_customer = $id_customer;
    }

    function set_nama_customer($nama_customer) {
        $this->nama_customer = $nama_customer;
    }

    function set_no_hp_customer($no_hp_customer) {
        $this->no_hp_customer = $no_hp_customer;
    }

    function set_alamat_customer($alamat_customer) {
        $this->alamat_customer = $alamat_customer;
    }

    function get_id_customer() {
        return $this->id_customer;
    }

    function get_nama_customer() {
        return $this->nama_customer;
    }

    function get_no_hp_customer() {
        return $this->no_hp_customer;
    }

    function get_alamat_customer() {
        return $this->alamat_customer;
    }

}