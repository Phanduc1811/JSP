<?php
include '../admin/pdo.php';
$m = isset($_GET['masach']) ? $_GET['masach'] : '';
$t = isset($_GET['tensach']) ? $_GET['tensach'] : '';
$g = isset($_GET['gia']) ? $_GET['gia'] : 0;
$mt = isset($_GET['mota']) ? $_GET['mota'] : '';
$maLoai = isset($_GET['maLoai']) ? $_GET['maLoai'] : '';
$maNxb = isset($_GET['maNxb']) ? $_GET['maNxb'] : '';
$h = '';

if ($m == '') {
    header('location:tables.php');
    exit;
}
$sql = 'select * from nhaxb';
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
$dataNxb = $objStatement->fetchAll(PDO::FETCH_OBJ);


$sql = 'select * from loai';
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
$dataLoai = $objStatement->fetchAll(PDO::FETCH_OBJ);

$sql = "select * from sach where masach= ? ";
$a = [$m];
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
$data1 = $objStatement->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Sách</title>
    <link rel="stylesheet" href="./assets/css/form-style.css">
</head>

<body>
    <form action="update-book.php" method="POST" enctype="multipart/form-data" class="form-admin">
        <fieldset>
            <legend>Sửa Sách</legend>
            <span>Mã Sách:</span> <input type="text" name="DH51800367_masach" id="" value="<?php echo $data1->masach ?>"><br>
            <span>Tên Sách:</span> <input type="text" name="DH51800367_tensach" id="" value="<?php echo $data1->tensach ?>"><br>
            <span>Mô Tả:</span> <textarea name="DH51800367_mota" id="" cols="50" rows="1" value="<?php echo $data1->mota ?>"></textarea><br>
            <span>Giá:</span> <input type="number" name="DH51800367_gia" id="" value="<?php echo $data1->gia ?>"><br>
            <span>Hình: </span><input type="file" name="DH51800367_hinh" id="" value="<?php echo $data1->hinh ?>"><br>
            <span>Nhà Xuất Bản:</span> <select name="DH51800367_maNxb" id="">
                <?php
                foreach ($dataNxb as $dn) {
                    $selected = '';
                    if ($dn->manxb == $data1->manxb)
                        $selected = 'selected';
                ?>
                    <option value="<?php echo $dn->manxb ?>" <?php echo $selected ?>> <?php echo $dn->tennxb ?></option>
                <?php
                }
                ?>
            </select><br>
            <span>Loại Sách:</span> <select name="DH51800367_maLoai" id="">
                <?php
                foreach ($dataLoai as $dl) {
                    $selected = '';
                    if ($dl->maloai == $data1->maloai)
                        $selected = 'selected';
                ?>
                    <option value="<?php echo $dl->maloai ?>" <?php echo $selected ?>> <?php echo $dl->tenloai ?></option>
                <?php
                }
                ?>
            </select><br>
            <input type="submit" value="Thêm Sách" id="">
        </fieldset>

    </form>
</body>

</html>