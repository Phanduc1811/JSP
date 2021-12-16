<?php
include '../admin/pdo.php';
$m = isset($_POST['DH51800367_manxb']) ? $_POST['DH51800367_manxb'] : '';
$t = isset($_POST['DH51800367_tennxb']) ? $_POST['DH51800367_tennxb'] : '';
if ($m == '') {
    header('location:tables.php');
    exit;
}
$sql = "insert into nhaxb(manxb, tennxb) values(?, ?)";
$a = [$m, $t];
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
header('location:tables');
