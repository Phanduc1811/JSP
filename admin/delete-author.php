<?php
include '../admin/pdo.php';
$m = isset($_GET['manxb']) ? $_GET['manxb'] : '';
if ($m != '') {
    $sql = "delete from nhaxb where manxb= ? ";
    $a = [$m];
    $objStatement = $objPDO->prepare($sql);
    $objStatement->execute($a);
}
header('location:tables.php');
