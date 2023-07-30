<?php

class Pengguna {
    private $id_pengguna;
    private $nama_pengguna;
    private $password;
    private $nama_depan;
    private $nama_belakang;
    private $no_hp;
    private $alamat;
    private $id_akses;

    function set_id_pengguna ($id_pengguna) {
        $this->id_pengguna = $id_pengguna;
    }

    function set_nama_pengguna ($nama_pengguna) {
        $this->nama_pengguna = $nama_pengguna;
    }

    function set_password ($password) {
        $this->password = $password;
    }

    function set_nama_depan ($nama_depan) {
        $this->nama_depan = $nama_depan;
    }

    function set_nama_belakang ($nama_belakang) {
        $this->nama_belakang = $nama_belakang;
    }

    function set_no_hp ($no_hp) {
        $this->no_hp = $no_hp;
    }

    function set_alamat ($alamat) {
        $this->alamat = $alamat;
    }

    function set_id_akses ($id_akses) {
        $this->id_akses = $id_akses;
    }

    function get_id_pengguna () {
        return $this->id_pengguna;
    }

    function get_nama_pengguna () {
        return $this->nama_pengguna;
    }

    function get_password () {
        return $this->password;
    }

    function get_nama_depan () {
        return $this->nama_depan;
    }

    function get_nama_belakang () {
        return $this->nama_belakang;
    }

    function get_no_hp () {
        return $this->no_hp;
    }

    function get_alamat () {
        return $this->alamat;
    }

    function get_id_akses () {
        return $this->id_akses;
    }
}