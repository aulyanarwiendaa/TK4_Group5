<?php
//if(!isset($_GET['page']) || !isset($_GET['subpage'])) {
  //  header("location:admin.php?page=home&&subpage=dashboard");
//}


require_once "controller/base_controller.php";
$baseController = new BaseController();
$baseController->callasset();
define('BASE_URL', 'http://localhost/tp4idim');
?>
<html>

<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="clm-12 np">
        <?php include "view/adder/sidebar-admin.php" ?>
        <div class="clm-10 np">
            <div class="container-full">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    $subpage = $_GET['subpage'];
                    $file = "view/$page/$subpage.php";

                    if (!file_exists($file)) {
                        include("view/$page/$subpage.php");
                    } else {
                        include($file);
                    }
                } else {
                    include("view/home/dashboard.php");
                }
                ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>