<?php
include '../admin/pdo.php';
$m = isset($_POST['DH51800367_masach']) ? $_POST['DH51800367_masach'] : '';
$t = isset($_POST['DH51800367_tensach']) ? $_POST['DH51800367_tensach'] : '';
$g = isset($_POST['DH51800367_gia']) ? $_POST['DH51800367_gia'] : 0;
$mt = isset($_POST['DH51800367_mota']) ? $_POST['DH51800367_mota'] : '';
$maLoai = isset($_POST['DH51800367_maLoai']) ? $_POST['DH51800367_maLoai'] : '';
$maNxb = isset($_POST['DH51800367_maNxb']) ? $_POST['DH51800367_maNxb'] : '';
$h = '';
if ($m == '') {
    header('location:tables.php');
    exit;
}

$sql = "update sach set tensach=?, gia=?, mota=?, maNxb=?, maLoai=? where masach=? ";
$a = [$t, $g, $mt, $maNxb, $maLoai, $m];
//echo $sql;
//print_r($a);
$objStatement = $objPDO->prepare($sql); 
$objStatement->execute($a); 
$n = $objStatement->rowCount();
header('location:tables');
