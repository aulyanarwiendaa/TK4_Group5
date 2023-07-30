<?php
require_once "controller/hak_akses_controller.php";
$hakAksesController = new HakAksesController();
$hakAksesController->callasset();
$hak_akses_list = $hakAksesController->hak_akses_list();
?>
<html>

<head>
</head>
<div class="clm-12 np">
    <div class="container-full" id="daftarproduk">
        <h1>Daftar Hak Akses</h1>
        <input type="hidden" id="totalcheck" value="0" />
        <table class="table table-bordered" style="margin-top:10px">
            <?php if ($hak_akses_list != null) : ?>
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">Nama Akses</th>
                    <th scope="col">Keterangan</th>
                    <th></th>
                </thead>

                <?php $no = 1;
                foreach ($hak_akses_list as  $hak_akses) : ?>
                    <tr>
                        <td><?php echo $no;
                            $no++ ?></td>
                        <td style="width:200px"><?php echo $hak_akses['nama_akses'] ?></td>
                        <td><?php echo $hak_akses['keterangan'] ?></td>
                        <td class="text-center">
                            <a href="submit.php?hak-akses-edit=<?php echo $hak_akses['id_akses'] ?>"><button class="btn btn-warning">Edit</button></a>
                            <a href="submit.php?hak-akses-delete=<?php echo $hak_akses['id_akses'] ?>"><button class="btn btn-danger">Hapus</button></a>
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
    <a href="?page=hak-akses&&subpage=hak-akses-detail">
        <img src="assets/img/add_blue.png" class="flyitem" style="width:65px; height:65px;">
    </a>
</div>

</html>