<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Loại Sách</title>
    <link rel="stylesheet" href="./assets/css/form-style.css">
</head>

<body>
    <form action="add-typef.php" method="POST" enctype="multipart/form-data" class="form-admin">
        <fieldset>
            <legend>Thêm Loại Sách</legend>
            <span>Mã Loại:</span> <input type="text" name="DH51800367_maloai"><br>
            <span>Tên Loại:</span> <input type="text" name="DH51800367_tenloai"><br>
            <input type="submit" value="Thêm">
        </fieldset>
    </form>
</body>

</html>