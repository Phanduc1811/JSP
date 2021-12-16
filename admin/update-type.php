<?php 
include '../admin/pdo.php';
$m = isset($_POST['DH51800367_manxb']) ? $_POST['DH51800367_manxb'] : '';
$t = isset($_POST['DH51800367_tennxb']) ? $_POST['DH51800367_tennxb'] : '';

$sql="update loai set tenloai=? where maloai=?  ";
$a =[$t, $m];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van


header('location:tables');