<?php
require_once "controller/pembelian_controller.php";
$pembelianController = new PembelianController();
$pembelianController->callasset();
$pembelian_list = $pembelianController->pembelian_list();
?>
<html>

<head>
</head>
<div class="clm-12 np">
  <div class="container-full" id="daftarproduk">
    <h1>Daftar Pembelian</h1>
    <input type="hidden" id="totalcheck" value="0" />
    <table class="table table-bordered" style="margin-top:10px">
      <?php if ($pembelian_list != null) : ?>
        <thead>
          <th>No</th>
          <th>Nama Supplier</th>
          <th>Nama Barang</th>
          <th>Jumlah Pembelian</th>
          <th>Harga Beli</th>
          <th></th>
        </thead>

        <?php $no = 1;
        foreach ($pembelian_list as  $pembelian) : ?>
          <tr>
            <td><?php echo $no;
                $no++ ?></td>
            <td style="width:200px"><?php echo $pembelian['nama_supplier'] ?></td>
            <td><?php echo $pembelian['nama_barang'] ?></td>
            <td><?php echo $pembelian['jumlah_pembelian'] ?></td>
            <td><?php echo $pembelian['harga_beli'] ?></td>
            <td><?php echo $pembelian['created_at'] ?></td>
            <td class="text-center">
              <a href="submit.php?pembelian-edit=<?php echo $pembelian['id_pembelian'] ?>"><button class="btn btn-warning">Edit</button></a>
              <a href="submit.php?pembelian-delete=<?php echo $pembelian['id_pembelian'] ?>"><button class="btn btn-danger">Hapus</button></a>
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
  <a href="?page=pembelian&&subpage=pembelian-detail">
    <img src="assets/img/add_blue.png" class="flyitem" style="width:65px; height:65px;">
  </a>
</div>

</html>