<?php
require_once "controller/customer_controller.php";
$customerController = new CustomerController();
$customerController->callasset();
$customer_list = $customerController->customer_list();
?>
<html>

<head>
</head>
<div class="clm-12 np">
  <div class="container-full" id="daftarproduk">
    <h1>Daftar Customer</h1>
    <input type="hidden" id="totalcheck" value="0" />
    <table class="table table-bordered" style="margin-top:10px">
      <?php if ($customer_list != null) : ?>
        <thead>
          <th>No</th>
          <th>Nama Customer</th>
          <th>No HP</th>
          <th>Alamat</th>
          <th></th>
        </thead>

        <?php $no = 1;
        foreach ($customer_list as  $customer) : ?>
          <tr>
            <td><?php echo $no;
                $no++ ?></td>
            <td style="width:200px"><?php echo $customer['nama_customer'] ?></td>
            <td><?php echo $customer['no_hp_customer'] ?></td>
            <td><?php echo $customer['alamat_customer'] ?></td>
            <td class="text-center">
              <a href="submit.php?customer-edit=<?php echo $customer['id_customer'] ?>"><button class="btn btn-warning">Edit</button></a>
              <a href="submit.php?customer-delete=<?php echo $customer['id_customer'] ?>"><button class="btn btn-danger">Hapus</button></a>
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
  <a href="?page=customer&&subpage=customer-detail">
    <img src="assets/img/add_blue.png" class="flyitem" style="width:65px; height:65px;">
  </a>
</div>
</html>