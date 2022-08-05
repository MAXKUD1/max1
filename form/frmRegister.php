<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next One</title>
</head>
<body>
<?php
include("header.php");
?>
<main>
<div class="container-fluid">

        <div class="card">
            <div class="card-header">
            ฟอร์มสมัครสมาชิก
        </div>
        <div class="card-body">
                <form name="form1" action="insert.php" method="post">
                    <div class="row">
                        <div class="col-md-2">
                        <label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
                        <select name="txt_firstname" id="txt_firstname" class="form-control">
                            <option value="">คำนำหน้าชื่อ</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                        </div>
                        <div class="col-md-5">
                        <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="txt_name" id="txt_name" placeholder="กรุณาระบุชื่อ">
                        </div>
                        <div class="col-md-5">
                        <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="txt_lastname" id="txt_lastname" placeholder="กรุณาระบุนามสกุล">
                        </div>
                    </div> <!-- row1 -->
                    <div class="row"> <!-- row2 -->
                        <div class="col-md-2">
                        <label for="exampleFormControlInput1" class="form-label">เพศ</label>
                        <div>
                        <input type="radio" class="form-check-input" name="txt_sex" id="txt_sex"> ชาย
                        <input type="radio" class="form-check-input" name="txt_sex" id="txt_sex"> หญิง
                        </div>
                        </div>
                        <div class="col-md-3">
                        <label for="exampleFormControlInput1" class="form-label">ว/ด/ป/ เกิด</label>
                        <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                        placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
                        </div>
                        <div class="col-md-7">
                        <label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
                        <textarea class="form-control" name="txt_address" id="txt_address" placeholder="กรุณาระบุที่อยู่"></textarea>
                        </div>
                    </div> <!-- row2 -->
                    <div class="row"> <!-- row3 -->
                        <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" name="txt_number" id="txt_number" placeholder="เบอร์โทร">
                        </div>
                        <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
                        <input type="text" class="form-control" name="txt_address" id="txt_address" placeholder="อีเมล์">
                        </div>
                    </div> <!-- row3 -->
                    <br /> 
                    <div class="row"> <!-- row3 -->
                    <div class="col-md-12 text-center"> 
                    <button type="submit" class="btn btn-outline-success">บันทึก</button>
                    <button type="reset" class="btn btn-outline-danger">ยกเลิก</button>
                    </div>
                    </form>
            </div>
        </div>

    </div>
</main>
<?php
include("footer.php");
?>
</body>
</html>