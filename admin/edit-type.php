<?php
include '../admin/pdo.php';
$m = isset($_GET['maloai']) ? $_GET['maloai'] : '';
$t = isset($_GET['tenloai']) ? $_GET['tenloai'] : '';
if ($m == '') {
    header('location:tables.php');
    exit;
}
$sql = "select * from loai where maloai=?";
$a = [$m];
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
$data = $objStatement->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Loại Sách</title>
    <link rel="stylesheet" href="./assets/css/form-style.css">
</head>

<body>
    <form action="update-type.php" method="POST" enctype="multipart/form-data" class="form-admin">
        <fieldset>
            <legend>Sửa Loại Sách</legend>
            <span>Mã Loại</span> <input type="text" name="DH51800367_manxb" value='<?php echo $data->maloai ?>'><br>
            <span>Tên Loại</span> <input type="text" name="DH51800367_tennxb" value='<?php echo $data->tenloai ?>'><br>
            <input type="submit" value="Cập Nhật">
        </fieldset>

    </form>
</body>

</html>