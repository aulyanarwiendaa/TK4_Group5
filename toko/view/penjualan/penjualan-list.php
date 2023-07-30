<?php
require_once "controller/penjualan_controller.php";
$penjualanController = new PenjualanController();
$penjualanController->callasset();
$penjualan_list = $penjualanController->penjualan_list();
?>
<html>

<head>
</head>
<div class="clm-12 np">
  <div class="container-full" id="daftarproduk">
    <h1>Daftar Penjualan</h1>
    <input type="hidden" id="totalcheck" value="0" />
    <table class="table table-bordered" style="margin-top:10px">
      <?php if ($penjualan_list != null) : ?>
        <thead>
          <th>No</th>
          <th>Nama Customer</th>
          <th>Nama Barang</th>
          <th>Jumlah Penjualan</th>
          <th>Harga Jual</th>
          <th></th>
        </thead>

        <?php $no = 1;
        foreach ($penjualan_list as  $penjualan) : ?>
          <tr>
            <td><?php echo $no;
                $no++ ?></td>
            <td style="width:200px"><?php echo $penjualan['nama_customer'] ?></td>
            <td><?php echo $penjualan['nama_barang'] ?></td>
            <td><?php echo $penjualan['jumlah_penjualan'] ?></td>
            <td><?php echo $penjualan['harga_jual'] ?></td>
            <td><?php echo $penjualan['created_at'] ?></td>
            <td class="text-center">
              <a href="submit.php?penjualan-edit=<?php echo $penjualan['id_penjualan'] ?>"><button class="btn btn-warning">Edit</button></a>
              <a href="submit.php?penjualan-delete=<?php echo $penjualan['id_penjualan'] ?>"><button class="btn btn-danger">Hapus</button></a>
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
  <a href="?page=penjualan&&subpage=penjualan-detail">
    <img src="assets/img/add_blue.png" class="flyitem" style="width:65px; height:65px;">
  </a>
</div>

</html>