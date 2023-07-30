<?php
require_once "controller/pembelian_controller.php";
require_once "controller/supplier_controller.php";
require_once "controller/barang_controller.php";

$pembelianController = new PembelianController();
$pembelianController->callasset();

$pembelianDetail = null;
if (isset($_GET['id'])) {
  $pembelianDetail = $pembelianController->pembelian_detail($_GET['id']);
}

$supplierController = new SupplierController();
$supplierList = $supplierController->supplier_list();

$barangController = new BarangController();
$barangList = $barangController->barang_list();
?>
<html>

<head>
</head>

<body>
  <div class="clm-12" style="border-bottom:1px solid black;">
    <h1><?php echo $pembelianDetail != null ? "Edit Pembelian" : "Tambah Pembelian" ?></h1>
  </div>
  <form action="submit.php" method="post" enctype="multipart/form-data">
    <?php if ($pembelianDetail) : ?>
      <input type="hidden" name="id_pembelian" value="<?php echo $pembelianDetail[0]['id_pembelian'] ?>">
    <?php endif ?>
    <table class="table">
      <tr>
        <td>Barang</td>
        <td>:</td>
        <td>
          <select name="id_barang" class="input" required>
            <?php foreach ($barangList as $barang) : ?>
              <option value="<?php echo $barang['id_barang']; ?>" <?php if ($pembelianDetail != null && $barang['id_barang'] == $pembelianDetail[0]['id_barang']) {
                                                                        echo "selected";
                                                                      } ?>><?php echo $barang['nama_barang'] . " (" . $barang["satuan"] . ")"; ?></option>
            <?php endforeach ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Harga Beli</td>
        <td>:</td>
        <td><input type="text" class="input" name="harga_beli" value="<?php echo $pembelianDetail != null ? $pembelianDetail[0]['harga_beli'] : '' ?>" autocomplete="off" required/></td>
      </tr>
      <tr>
        <td>Jumlah Pembelian</td>
        <td>:</td>
        <td><input type="text" class="input" name="jumlah_pembelian" value="<?php echo $pembelianDetail != null ? $pembelianDetail[0]['jumlah_pembelian'] : '' ?>" autocomplete="off" required/></td>
      </tr>
      <tr>
        <td>Supplier</td>
        <td>:</td>
        <td>
          <select name="id_supplier" class="input" required>
            <?php foreach ($supplierList as $supplier) : ?>
              <option value="<?php echo $supplier['id_supplier']; ?>" <?php if ($pembelianDetail != null && $supplier['id_supplier'] == $pembelianDetail[0]['id_supplier']) {
                                                                        echo "selected";
                                                                      } ?>><?php echo $supplier['nama_supplier']; ?></option>
            <?php endforeach ?>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="3" style="text-align:right">
          <?php if ($pembelianDetail) : ?>
            <input type="submit" name="pembelian-edit-submit" class="btn btn-success" style="width:100px;" value="Edit">
          <?php endif ?>
          <?php if ($pembelianDetail == null) : ?>
            <input type="submit" name="pembelian-add-submit" class="btn btn-success" style="width:100px;" value="Add">
          <?php endif ?>
          <a href="?page=pembelian&&subpage=pembelian-list"><input type="button" class="btn btn-danger" style="width:100px;" value="Cancel"></a>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>