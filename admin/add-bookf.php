<?php
include '../admin/pdo.php';
$m = isset($_POST['DH51800367_masach']) ? $_POST['DH51800367_masach'] : '';
$t = isset($_POST['DH51800367_tensach']) ? $_POST['DH51800367_tensach'] : '';
$g = isset($_POST['DH51800367_gia']) ? $_POST['DH51800367_gia'] : 0;
$mt = isset($_POST['DH51800367_mota']) ? $_POST['DH51800367_mota'] : '';
$maLoai = isset($_POST['DH51800367_maLoai']) ? $_POST['DH51800367_maLoai'] : '';
$maNxb = isset($_POST['DH51800367_maNxb']) ? $_POST['DH51800367_maNxb'] : '';
$h='';
if ($m == '') {
    header('location:tables.php');
    exit;   
}
if(isset($_FILES['DH51800367_hinh']))
{
    if($_FILES['DH51800367_hinh']['error']==0)
    {
        $h=$_FILES['DH51800367_hinh']['name'];
        move_uploaded_file($_FILES['DH51800367_hinh']['tmp_name'], "../admin/image/$h");
    }
}

$sql = "insert into sach(masach, tensach, gia, hinh, mota, manxb, maloai) values(?, ?, ?, ?, ? ,? ,?) ";
$a = [$m, $t, $g, $h, $mt, $maNxb, $maLoai];
//echo $sql;
//print_r($a);
$objStatement = $objPDO->prepare($sql); //return B
$objStatement->execute($a); //ket qua truy van
header('location:tables');
