<?php
require_once "controller/dashboard_controller.php";
$dashboardController = new DashboardController();
$dashboardController->callasset();
$dashboard = $dashboardController->get_dasboard();
?>
<html>

<head>
</head>
<div class="clm-12 np">
    <div class="container-full" id="daftarproduk">
        <h1>Dashboard</h1>
        <input type="hidden" id="totalcheck" value="0" />
        <table class="table table-bordered" style="margin-top:10px">
            <?php if ($dashboard != null): ?>
                <thead>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Jumlah Penjualan</th>
                    <th>Stok</th>
                    <th>Jumlah Keuntungan(Kerugian)</th>
                    <th></th>
                </thead>

                <?php $no = 1;
                foreach ($dashboard as $item): ?>
                    <tr>
                        <td>
                            <?php echo $no;
                            $no++ ?>
                        </td>
                        <td style="width:200px">
                            <?php echo $item['nama_barang'] ?>
                        </td>
                        <td>
                            <?php echo $item['jumlah_pembelian'] ?>
                        </td>
                        <td>
                            <?php echo $item['jumlah_penjualan'] ?>
                        </td>
                        <td class="text-center">
                            <?php echo $item['stok'] ?>
                        </td>
                        <td class="text-center">
                            <?php echo $item['keuntungan'] ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align:center">Tidak Ada Data.</td>
                </tr>
            <?php endif ?>
        </table>
    </div>
</div>

</html>