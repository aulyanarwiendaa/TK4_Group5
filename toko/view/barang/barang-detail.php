<?php
require_once "controller/barang_controller.php";
$barangController = new BarangController();
$barangController->callasset();

$barangDetail = null;
if (isset($_GET['id'])) {
  $barangDetail = $barangController->barang_detail($_GET['id']);
}
?>
<html>

<head>
</head>

<body>
  <div class="clm-12" style="border-bottom:1px solid black;">
    <h1><?php echo $barangDetail != null ? "Edit Barang" : "Tambah Barang" ?></h1>
  </div>
  <form action="submit.php" method="post" enctype="multipart/form-data">
    <?php if ($barangDetail) : ?>
      <input type="hidden" name="id_barang" value="<?php echo $barangDetail[0]['id_barang'] ?>">
    <?php endif ?>
    <table class="table">
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" class="input" name="nama_barang" value="<?php echo $barangDetail != null ? $barangDetail[0]['nama_barang'] : '' ?>" autocomplete="off" required/></td>
      </tr>
      <tr>
        <td style="vertical-align:top;">Keterangan</td>
        <td style="vertical-align:top;">:</td>
        <td>
          <textarea class="input" name="keterangan" autocomplete="off" required><?php echo $barangDetail != null ? $barangDetail[0]['keterangan'] : '' ?></textarea>
        </td>
      </tr>
      <tr>
        <td>Satuan</td>
        <td>:</td>
        <td><input type="text" class="input" name="satuan" value="<?php echo $barangDetail != null ? $barangDetail[0]['satuan'] : '' ?>" autocomplete="off" required/></td>
      </tr>
      <tr>
        <td colspan="3" style="text-align:right">
          <?php if ($barangDetail) : ?>
            <input type="submit" name="barang-edit-submit" class="btn btn-success" style="width:100px;" value="Edit">
          <?php endif ?>
          <?php if ($barangDetail == null) : ?>
            <input type="submit" name="barang-add-submit" class="btn btn-success" style="width:100px;" value="Add">
          <?php endif ?>
          <a href="?page=barang&&subpage=barang-list"><input type="button" class="btn btn-danger" style="width:100px;" value="Cancel"></a>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>