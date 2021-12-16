<?php
include '../admin/pdo.php';
$m = isset($_POST['DH51800367_maloai']) ? $_POST['DH51800367_maloai'] : '';
$t = isset($_POST['DH51800367_tenloai']) ? $_POST['DH51800367_tenloai'] : '';
if ($m == '') {
    header('location:tables.php');
    exit;
}
$sql = "insert into loai(maloai, tenloai) values(?, ?)";
$a = [$m, $t];
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
header('location:tables');