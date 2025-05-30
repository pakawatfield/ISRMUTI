<!-- Header. -->
<?php include("header.php"); ?>
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $personal_id = $_GET["personal_id"];
    $sql = "SELECT * FROM personal WHERE personal_id = '$personal_id' ";
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_array($result);

 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>แก้ไขข้อมูลบุคลากร</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_users.php">จัดการข้อมูลบุคลากร</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลบุคลากร </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header "
                    style="background:#001f3f linear-gradient(180deg,#26415c,#001f3f) repeat-x!important ;">
                    <h3 class="card-title">แก้ไขข้อมูลบุคลากร <?php echo $row["personal_name"];?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_personal.php" enctype="multipart/from-data">
                    <input type="text" id="id" name="id" value="<?php echo $row["personal_id"]; ?>" hidden>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="personal_name"><span class="text-danger">*</span> ชื่ออาจารย์</label>
                            <input type="varchar" class="form-control" id="personal_name" name="personal_name"
                                value="<?php echo $row["personal_name"];?> " placeholder="กรุณาใส่ชื่อจริง" require>
                        </div>
                        <div class="form-group">
                            <label for="personal_name"><span class="text-danger">*</span> ตำแหน่ง</label>
                            <input type="varchar" class="form-control" id="personal_position" name="personal_position"
                                value="<?php echo $row["personal_position"];?>" placeholder="กรุณาใส่ตำแหน่ง" require>
                        </div>
                        <div class="form-group">
                            <label for="personal_img"><span class="text-danger">*</span> รูปภาพ </label>
                            <div class="img">
                                <img src="../image/teacher/<?php echo $row["personal_img"];?>" class="img"
                                    style="width: 150px;">
                            </div>
                            <br>
                            <input type="file" class="form-control" id="personal_img" name="personal_img"
                                placeholder="รูปภาพอาจารย์" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="bachelor_degree"><span class="text-danger">*</span> ปริญญาตรี</label>
                            <input type="varchar" class="form-control" id="bachelor_degree" name="bachelor_degree"
                                value="<?php echo $row["bachelor_degree"];?>" placeholder="กรุณาระดับการศึกษาปริญญาตรี" require>
                        </div>
                        <div class="form-group">
                            <label for="master_degree"><span class="text-danger">*</span> ปริญญาโท</label>
                            <input type="varchar" class="form-control" id="master_degree" name="master_degree"
                                value="<?php echo $row["master_degree"];?>" placeholder="กรุณาระดับการศึกษาปริญญาโท" require>
                        </div>
                        <div class="form-group">
                            <label for="doctorate_degree"><span class="text-danger">*</span> ปริญญาเอก</label>
                            <input type="varchar" class="form-control" id="doctorate_degree" name="doctorate_degree"
                                value="<?php echo $row["doctorate_degree"];?>" placeholder="กรุณาระดับการศึกษาปริญญาเอก" require>
                        </div>
                        <div class="form-group">
                            <label for="personal_performace"><span class="text-danger">*</span> ผลงาน </label>
                            <textarea class="form-control" id="personal_performace" name="personal_performace"
                                placeholder="ผลงาน"><?php echo $row["personal_performace"];?> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_email"><span class="text-danger">*</span> อีเมลล์</label>
                            <input type="varchar" class="form-control" id="personal_email" name="personal_email"
                                value="<?php echo $row["personal_email"];?>" placeholder="กรุณาใส่ตำแหน่ง" require>
                        </div>
                        <div class="form-group">
                            <label for="personal_tel"><span class="text-danger">*</span> เบอร์ติดต่อ</label>
                            <input type="varchar" class="form-control" id="personal_tel" name="personal_tel"
                                value="<?php echo $row["personal_tel"];?>" placeholder="กรุณาใส่ตำแหน่ง" require>
                        </div>


                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-md btn-success" style="background: #0b7d79!important"><i
                                class="fa fa-save"></i> บันทึกข้อมูล</button>
                    </div>
                </form>
                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>

<script>
$(function() {
    // Summernote
    $('#personal_performace').summernote()


})
</script>