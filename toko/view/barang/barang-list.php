<?php
require_once "controller/barang_controller.php";
$barangController = new BarangController();
$barangController->callasset();
$barang_list = $barangController->barang_list();
?>
<html>

<head>
</head>
<div class="clm-12 np">
  <div class="container-full" id="daftarproduk">
    <h1>List Barang</h1>
    <input type="hidden" id="totalcheck" value="0" />
    <table class="table table-bordered" style="margin-top:10px">
      <?php if ($barang_list != null) : ?>
        <thead>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Keterangan</th>
          <th>Satuan</th>
          <th></th>
        </thead>

        <?php $no = 1;
        foreach ($barang_list as  $barang) : ?>
          <tr>
            <td><?php echo $no;
                $no++ ?></td>
            <td style="width:200px"><?php echo $barang['nama_barang'] ?></td>
            <td><?php echo $barang['keterangan'] ?></td>
            <td><?php echo $barang['satuan'] ?></td>
            <td class="text-center">
              <a href="submit.php?barang-edit=<?php echo $barang['id_barang'] ?>"><button class="btn btn-warning">Edit</button></a>
              <a href="submit.php?barang-delete=<?php echo $barang['id_barang'] ?>"><button class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
        <?php endforeach ?>
      <?php else : ?>
        <tr>
          <td colspan="7" style="text-align:center">Tidak Ada Data.</td>
        </tr>
      <?php endif ?>
    </table>
  </div>
</div>
<div class="fly-right">
  <a href="?page=barang&&subpage=barang-detail">
    <img src="assets/img/add_blue.png" class="flyitem" style="width:65px; height:65px;">
  </a>
</div>
</html>