<?php
class Pembelian {
    private $id_pembelian;
    private $jumlah_pembelian;
    private $harga_beli;
    private $id_barang;
    private $id_supplier;

    function set_id_pembelian ($id_pembelian) {
        $this->id_pembelian = $id_pembelian;
    }

    function set_jumlah_pembelian ($jumlah_pembelian) {
        $this->jumlah_pembelian = $jumlah_pembelian;
    }

    function set_harga_beli ($harga_beli) {
        $this->harga_beli = $harga_beli;
    }

    function set_id_barang ($id_barang) {
        $this->id_barang = $id_barang;
    }

    function set_id_supplier ($id_supplier) {
        $this->id_supplier = $id_supplier;
    }

    function get_id_pembelian () {
        return $this->id_pembelian;
    }

    function get_jumlah_pembelian () {
        return $this->jumlah_pembelian;
    }

    function get_harga_beli () {
        return $this->harga_beli;
    }

    function get_id_barang () {
        return $this->id_barang;
    }

    function get_id_supplier () {
        return $this->id_supplier;
    }
}