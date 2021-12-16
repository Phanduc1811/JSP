<?php
include '../admin/pdo.php';
$m = isset($_GET['maloai']) ? $_GET['maloai'] : '';
if ($m != '') {
    $sql = "delete from loai where maloai= ? ";
    $a = [$m];
    $objStatement = $objPDO->prepare($sql);
    $objStatement->execute($a);
}
header('location:tables.php');
