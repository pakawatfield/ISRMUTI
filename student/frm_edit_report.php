<!-- Header. -->
<?php include("header.php"); ?>
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $report_id = $_GET["report_id"];
    $sql = "SELECT * FROM reports WHERE report_id = '$report_id' ";
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
                    <h1>เพิ่มข้อมูลงานวิจัย</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_report.php">จัดการข้อมูลรายงานผลการดำเนินงาน</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลผลการดำเนินงาน</li>
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
                    <h3 class="card-title">เพิ่มข้อมูลรายงานผลการดำเนินงาน</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_report.php" enctype="multipart/form-data">
                <input type="text" id="id" name="id" value="<?php echo $row["report_id"]; ?>" hidden>


                    <div class="card-body">
                        <div class="form-group">
                            <label for="report_name"><span class="text-danger">*</span> ชื่อรายงานผลการดำเนินงาน</label>
                            <input type="varchar" class="form-control" id="report_name" name="report_name"
                            value="<?php echo $row["report_name"];?> " placeholder="กรุณาใส่ชื่อรายงานผลการดำเนินงาน" required>
                        </div>
                        <div class="form-group">
                            <label for="cover_image"><span class="text-danger">*</span> รูปภาพปกรายงานผลการดำเนินงาน</label>
                            <div class="img">
                                <img src="../image/reports/<?php echo $row["cover_image"];?>" class="img"
                                    style="width: 300px;">
                            </div>
                            <br>
                            <input type="file" class="form-control" id="cover_image" name="cover_image"
                                placeholder="รูปภาพอาจารย์" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="pdf_file"><span class="text-danger">*</span> ไฟล์รายงานผลการดำเนินงาน</label>
                            <input type="file" class="form-control" id="pdf_file" name="pdf_file" accept="pdf/*"
                                title="Upload PDF"  value="<?php echo $row["pdf_file"];?> " placeholder="Enter your name" required>
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
    $('#abstract').summernote()


})
</script>