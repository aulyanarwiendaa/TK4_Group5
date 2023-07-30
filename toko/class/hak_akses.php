<?php

class HakAkses
{
    private $id_akses;
    private $nama_akses;
    private $keterangan;

    function set_id_akses($id_akses)
    {
        $this->id_akses = $id_akses;
    }

    function set_nama_akses($nama_akses)
    {
        $this->nama_akses = $nama_akses;
    }

    function set_keterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }

    function get_id_akses()
    {
        return $this->id_akses;
    }

    function get_nama_akses()
    {
        return $this->nama_akses;
    }

    function get_keterangan()
    {
        return $this->keterangan;
    }
}