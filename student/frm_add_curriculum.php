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
                    <h1>เพิ่มข้อมูลหลักสูตร</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_curriculum.php">จัดการข้อมูลหลักสูตร</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลหลักสูตร</li>
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
                    <h3 class="card-title">เพิ่มข้อมูลหลักสูตร</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="add_curriculum.php" enctype="multipart/form-data">
                <!-- <input type="text" name="curriculum_id" value="curriculum_id"> -->
                    

                    <div class="card-body">
                        <div class="form-group">
                            <label for="curriculum_name	"><span class="text-danger">*</span> ชื่อหลักสูตร</label>
                            <input type="varchar" class="form-control" id="curriculum_name" name="curriculum_name"
                            placeholder="กรุณาใส่ชื่อหลักสูตร" require>
                        </div>
                        <div class="form-group">
                            <label for="curriculum_img"><span class="text-danger">*</span> รูปภาพ </label>
                            <div class="img">
                            </div>
                            <input type="file" class="form-control" id="curriculum_img" name="curriculum_img"
                             placeholder="รูปภาพหลักสูตร" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="curriculum_detail"><span class="text-danger">*</span> รายละเอียดหลักสูตร </label>
                            <textarea class="form-control" id="curriculum_detail" name="curriculum_detail"
                            placeholder="กรุณารายละเอียด"> </textarea>
                        </div>
                        <div class="from-group">
                            <label for="curlavel_id"><span class="text-danger">*</span> ระดับของหลักสูตร</label>
                            <select class="from-control form-control custom-select" id="curlavel_id" name="curlavel_id"
                                required>
                                <option value="">กรุณาเลือก</option>
                                <option value="1">หลักสูตรประกาศนียบัตรวิชาชีพชั้นสูง</option>
                                <option value="2">หลักสูตรปริญญาตรี</option>
                            </select>
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