<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-
    oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2 style="text-align: center;margin-top : 50px">Sửa thông tin người nhận máu</h2>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'blood_recipient');
        $reci_id = $_GET['reci_id'];
        $slt = mysqli_query($conn, "Select * from recipient where reci_id = '$reci_id'");
        if (mysqli_num_rows($slt) > 0) {
            $row = mysqli_fetch_assoc($slt);
        } else {
            header('index.php');
        }
        ?>
        <form action="" method="Post" style="margin-top: 50px;">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Tên người nhận máu</label>
                <input name="reci_name" value="<?php echo $row['reci_name'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Năm sinh(tuổi)</label>
                <input name="reci_age" value="<?php echo $row['reci_age'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nhóm máu</label>
                <input name="reci_bgrp" value="<?php echo $row['reci_bgrp'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Số lượng máu nhận</label>
                <input name="reci_bqnty" value="<?php echo $row['reci_bqnty'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Giới tính</label>
                <!-- <div class="form-control"> -->
                  <input <?php if ($row['reci_sex'] == "Nam") {
                                echo "checked";
                            } ?> type="radio" name="reci_sex" value="Nam">
                  <label>Nam</label>
                  <input <?php if ($row['reci_sex'] == "Nữ") {
                                echo "checked";
                            } ?> type="radio" name="reci_sex" value="Nữ">
                  <label>Nữ</label>
                  <input <?php if ($row['reci_sex'] == "Khác") {
                                echo "checked";
                            } ?> type="radio" name="reci_sex" value="Khác">
                  <label>Khác</label>
                <!-- </div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Ngày đăng ký nhận máu</label>
                <input name="reci_reg_date" value="<?php echo $row['reci_reg_date'] ?>" type="date" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Số điện thoại</label>
                <input name="reci_phno" value="<?php echo $row['reci_phno'] ?>" type="text" class="form-control" id="exampleInput">
            </div>


            <button type="submit" name="btn_update" class="btn btn-primary">Sửa thông tin</button>

        </form>
        <?php
        if (isset($_POST['btn_update'])) {
            $reci_name = $_POST['reci_name'];
            $reci_sex = $_POST['reci_sex'];
            $reci_age = $_POST['reci_age'];
            $reci_bgrp = $_POST['reci_bgrp'];
            $reci_bqnty = $_POST['reci_bqnty'];
            $reci_reg_date = $_POST['reci_reg_date'];

            $reci_phno = $_POST['reci_phno'];
            $update = mysqli_query($conn, "update recipient set reci_name = '$reci_name', reci_sex='$reci_sex', 
             reci_age='$reci_age',reci_bgrp = '$reci_bgrp',reci_bqnty = '$reci_bqnty', reci_reg_date = '$reci_reg_date',
             reci_phno = '$reci_phno' where reci_id = '$reci_id'");
            if ($update == TRUE) {
                header('location:index.php');
            } else {    
                header('location:error.php');
            }
        }

        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>