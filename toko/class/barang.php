<?php
class Barang
{
  private $id_barang;
  private $nama_barang;
  private $keterangan;
  private $satuan;
  private $id_pengguna;

  function set_id_barang($id_barang)
  {
    $this->id_barang = $id_barang;
  }

  function set_nama_barang($nama_barang)
  {
    $this->nama_barang = $nama_barang;
  }

  function set_keterangan($keterangan)
  {
    $this->keterangan = $keterangan;
  }

  function set_satuan($satuan)
  {
    $this->satuan = $satuan;
  }

  function set_id_pengguna($id_pengguna)
  {
    $this->id_pengguna = $id_pengguna;
  }

  function get_id_barang()
  {
    return $this->id_barang;
  }

  function get_nama_barang()
  {
    return $this->nama_barang;
  }

  function get_keterangan()
  {
    return $this->keterangan;
  }

  function get_satuan()
  {
    return $this->satuan;
  }

  function get_id_pengguna()
  {
    return $this->id_pengguna;
  }
}
