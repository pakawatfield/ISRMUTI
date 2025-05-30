<!-- Header. -->
<?php include("header.php"); ?>
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>เพิ่มข้อมูลการจัดการความรู้ (KM)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_km.php">จัดการข้อมูลการจัดการความรู้ (KM)</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลการจัดการความรู้ (KM)</li>
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
                    <h3 class="card-title">เพิ่มข้อมูลการจัดการความรู้ (KM)</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="add_km.php" enctype="multipart/form-data">
                    <!-- <input type="text" name="km_id" value="km_id"> -->


                    <div class="card-body">
                        <div class="form-group">
                            <label for="km_name"><span class="text-danger">*</span> ชื่อการจัดการความรู้</label>
                            <input type="varchar" class="form-control" id="km_name" name="km_name"
                                placeholder="กรุณาใส่การจัดการความรู้ (KM)" require>
                        </div>
                        <div class="form-group">
                            <label for="km_detail"><span class="text-danger">*</span> รายละเอียด</label>
                            <textarea class="form-control" id="km_detail" name="km_detail"
                                placeholder="กรุณารายละเอียด"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="km_pdf"><span class="text-danger">*</span> ไฟล์รายงานการจัดการความรู้รูปแบบ PDF</label>
                            <input type="file" class="form-control" id="km_pdf" name="km_pdf" accept="pdf/*"
                                title="Upload PDF" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="youtube_link"><span class="text-danger">*</span> Link Youtube</label>
                            <input type="varchar" class="form-control" id="youtube_link" name="youtube_link"
                                placeholder="กรุณาใส่ชื่อ Link Youtube" require>
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
    $('#km_detail').summernote()


})
</script>
