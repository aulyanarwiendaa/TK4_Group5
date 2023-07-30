<?php
class Penjualan {
  private $id_penjualan;
  private $jumlah_penjualan;
  private $harga_jual;
  private $id_barang;
  private $id_customer;

  function set_id_penjualan($id_penjualan) {
      $this->id_penjualan = $id_penjualan;
  }

  function set_jumlah_penjualan($jumlah_penjualan) {
      $this->jumlah_penjualan = $jumlah_penjualan;
  }

  function set_harga_jual($harga_jual) {
      $this->harga_jual = $harga_jual;
  }

  function set_id_barang($id_barang) {
      $this->id_barang = $id_barang;
  }

  function set_id_customer($id_customer) {
      $this->id_customer = $id_customer;
  }

  function get_id_penjualan() {
      return $this->id_penjualan;
  }

  function get_jumlah_penjualan() {
      return $this->jumlah_penjualan;
  }

  function get_harga_jual() {
      return $this->harga_jual;
  }

  function get_id_barang() {
      return $this->id_barang;
  }

  function get_id_customer() {
      return $this->id_customer;
  }
}