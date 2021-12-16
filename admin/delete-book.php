<?php 
include '../admin/pdo.php';
$m = isset($_GET['masach'])?$_GET['masach']:'';
if ($m !='')
{
    $sql="delete from sach where masach= ? ";
    $a =[$m];
    $objStatement= $objPDO->prepare($sql);
    $objStatement->execute($a);
}
header('location:tables.php');