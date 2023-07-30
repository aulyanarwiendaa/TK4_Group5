<?php
require_once "controller/supplier_controller.php";
$supplierController = new SupplierController();
$supplierController->callasset();
$supplier_list = $supplierController->supplier_list();
?>
<html>

<head>
</head>
<div class="clm-12 np">
  <div class="container-full" id="daftarproduk">
    <h1>Daftar Supplier</h1>
    <input type="hidden" id="totalcheck" value="0" />
    <table class="table table-bordered" style="margin-top:10px">
      <?php if ($supplier_list != null) : ?>
        <thead>
          <th>No</th>
          <th>Nama Supplier</th>
          <th>No HP</th>
          <th>Alamat</th>
          <th></th>
        </thead>

        <?php $no = 1;
        foreach ($supplier_list as  $supplier) : ?>
          <tr>
            <td><?php echo $no;
                $no++ ?></td>
            <td style="width:200px"><?php echo $supplier['nama_supplier'] ?></td>
            <td><?php echo $supplier['no_hp_supplier'] ?></td>
            <td><?php echo $supplier['alamat_supplier'] ?></td>
            <td class="text-center">
              <a href="submit.php?supplier-edit=<?php echo $supplier['id_supplier'] ?>"><button class="btn btn-warning">Edit</button></a>
              <a href="submit.php?supplier-delete=<?php echo $supplier['id_supplier'] ?>"><button class="btn btn-danger">Hapus</button></a>
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
  <a href="?page=supplier&&subpage=supplier-detail">
    <img src="assets/img/add_blue.png" class="flyitem" style="width:65px; height:65px;">
  </a>
</div>

</html>