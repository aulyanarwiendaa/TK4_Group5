<?php
require_once "controller/supplier_controller.php";
$supplierController = new SupplierController();
$supplierController->callasset();

$supplierDetail = null;
if (isset($_GET['id'])) {
  $supplierDetail = $supplierController->supplier_detail($_GET['id']);
}
?>
<html>

<head>
</head>

<body>
  <div class="clm-12" style="border-bottom:1px solid black;">
    <h1><?php echo $supplierDetail != null ? "Edit Supplier" : "Tambah Supplier" ?></h1>
  </div>
  <form action="submit.php" method="post" enctype="multipart/form-data">
    <?php if ($supplierDetail) : ?>
      <input type="hidden" name="id_supplier" value="<?php echo $supplierDetail[0]['id_supplier'] ?>">
    <?php endif ?>
    <table class="table">
      <tr>
        <td>Nama Supplier</td>
        <td>:</td>
        <td><input type="text" class="input" name="nama_supplier" value="<?php echo $supplierDetail != null ? $supplierDetail[0]['nama_supplier'] : '' ?>" autocomplete="off" required/></td>
      </tr>
      <tr>
        <td>No HP</td>
        <td>:</td>
        <td><input type="tel" pattern="[0-9]*" class="input" name="no_hp_supplier" value="<?php echo $supplierDetail != null ? $supplierDetail[0]['no_hp_supplier'] : '' ?>" autocomplete="off" required/></td>
      </tr>
      <tr>
        <td style="vertical-align:top;">Alamat Supplier</td>
        <td style="vertical-align:top;">:</td>
        <td>
          <textarea class="input" name="alamat_supplier" autocomplete="off" required><?php echo $supplierDetail != null ? $supplierDetail[0]['alamat_supplier'] : '' ?></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="3" style="text-align:right">
          <?php if ($supplierDetail) : ?>
            <input type="submit" name="supplier-edit-submit" class="btn btn-success" style="width:100px;" value="Edit">
          <?php endif ?>
          <?php if ($supplierDetail == null) : ?>
            <input type="submit" name="supplier-add-submit" class="btn btn-success" style="width:100px;" value="Add">
          <?php endif ?>
          <a href="?page=supplier&&subpage=supplier-list"><input type="button" class="btn btn-danger" style="width:100px;" value="Cancel"></a>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>