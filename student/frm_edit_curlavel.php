<!-- Header. -->
<?php include("header.php"); ?>
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $curlavel_id = $_GET["curlavel_id"];
    $sql = "SELECT * FROM curlavel WHERE curlavel_id = '$curlavel_id' ";
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
                    <h1>เพิ่มข้อมูลประเภทหลักสูตร</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_curlavel.php">จัดการข้อมูลประเภทหลักสูตร</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลประเภทหลักสูตร</li>
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
                    <h3 class="card-title">แก้ไขข้อมูลหลักสูตร</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_curlavel.php" enctype="multipart/form-data">
                    <input type="text" id="id" name="id" value="<?php echo $row["curlavel_id"]; ?>" hidden>


                    <div class="card-body">
                        <div class="form-group">
                            <label for="curlavel_name"><span class="text-danger">*</span> ชื่อประเภทหลักสูตร</label>
                            <input type="varchar" class="form-control" id="curlavel_name" name="curlavel_name"
                                value="<?php echo $row["curlavel_name"]; ?>"
                                placeholder="กรุณาใส่ชื่อชื่อประเภทหลักสูตร" require>
                        </div>
                        <div class="form-group">
                            <label for="curlavel_img"><span class="text-danger">*</span> รูปภาพ </label>
                            <div class="img">
                                <img src="../image/curlavel/<?php echo $row["curlavel_img"];?>" class="img"
                                    style="width: 150px;">
                            </div>
                            <br>
                            <input type="file" class="form-control" id="curlavel_img" name="curlavel_img"
                                placeholder="รูปภาพหลักสูตร" accept="image/*" required>
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
    $('#curriculum_detail').summernote()


})
</script>