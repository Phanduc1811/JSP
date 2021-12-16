<?php
include '../admin/pdo.php';
$sql = 'select * from nhaxb';
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
$dataNxb = $objStatement->fetchAll(PDO::FETCH_OBJ);


$sql1 = 'select * from loai';
$objStatement = $objPDO->prepare($sql1);
$objStatement->execute();
$dataLoai = $objStatement->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sách</title>
    <link rel="stylesheet" href="./assets/css/form-style.css">
</head>

<body>

    <form action="add-bookf.php" method="POST" enctype="multipart/form-data" class="form-admin">
        <fieldset>
            <legend>Thêm Sách</legend>
            <span>Mã Sách:</span> <input type="text" name="DH51800367_masach" id=""><br>
            <span>Tên Sách:</span> <input type="text" name="DH51800367_tensach" id=""><br>
            <span>Mô Tả:</span> <textarea name="DH51800367_mota" id="" cols="50" rows="1"></textarea><br>
            <span>Hình:</span> <input type="file" name="DH51800367_hinh" id=""><br>
            <span>Giá:</span> <input type="number" name="DH51800367_gia" id=""><br>

            <span>Nhà Xuất Bản:</span> <select name="DH51800367_maNxb" id="">
                <?php
                foreach ($dataNxb as $dn) {
                ?>
                    <option value="<?php echo $dn->manxb ?>"><?php echo $dn->tennxb ?></option>
                <?php
                }
                ?>
            </select><br>
            <span>Loại Sách:</span> <select name="DH51800367_maLoai" id="">
                <?php
                foreach ($dataLoai as $dl) {
                ?>
                    <option value="<?php echo $dl->maloai ?>"><?php echo $dl->tenloai ?></option>
                <?php
                }
                ?>
            </select><br>
            <input type="submit" value="Thêm Sách" id="">
        </fieldset>
    </form>


</body>

</html>