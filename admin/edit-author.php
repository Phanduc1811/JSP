<?php
include '../admin/pdo.php';
$m = isset($_GET['manxb']) ? $_GET['manxb'] : '';
$t = isset($_GET['tennxb']) ? $_GET['tennxb'] : '';
if ($m == '') {
    header('location:tables.php');
    exit;
}
$sql = "select * from nhaxb where manxb=?";
$a = [$m];
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
$data = $objStatement->fetch(PDO::FETCH_OBJ);
////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Nhà Xuất Bản</title>
    <link rel="stylesheet" href="./assets/css/form-style.css">
</head>

<body>
    <form action="update-author.php" method="POST" enctype="multipart/form-data" class="form-admin">
        <fieldset>
            <legend>Sửa Nhà Xuất Bản</legend>
            <span>Mã Nhà Xuất Bản:</span> <input type="text" name="DH51800367_manxb" value='<?php echo $data->manxb ?>'><br>
            <span>Tên Nhà Xuất Bản</span> <input type="text" name="DH51800367_tennxb" value='<?php echo $data->tennxb ?>'><br>
            <input type="submit" value="Cập Nhật">
        </fieldset>
    </form>
</body>

</html>