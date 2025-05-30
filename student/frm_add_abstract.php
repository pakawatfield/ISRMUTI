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
                    <h1>เพิ่มข้อมูลงานวิจัย</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_abstract.php">จัดการข้อมูลงานวิจัย</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลวิจัย</li>
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
                    <h3 class="card-title">เพิ่มข้อมูลวิจัย</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="add_abstract.php" enctype="multipart/form-data">
                    <!-- <input type="text" name="abstract_id" value="abstract_id"> -->


                    <div class="card-body">
                        <div class="form-group">
                            <label for="abstract_tittle"><span class="text-danger">*</span> ชื่องานวิจัย</label>
                            <input type="varchar" class="form-control" id="abstract_tittle" name="abstract_tittle"
                                placeholder="กรุณาใส่ชื่องานวิจัย" required>
                        </div>
                        <div class="form-group">
                            <label for="author1"><span class="text-danger">*</span> ชื่อผู้แต่งคนที่ 1</label>
                            <input type="varchar" class="form-control" id="author1" name="author1"
                                placeholder="กรุณาใส่ชื่อผู้แต่งงานวิจัยคนที่ 1" required>
                        </div>
                        <div class="form-group">
                            <label for="author2"><span class="text-danger">*</span> ชื่อผู้แต่งคนที่ 2</label>
                            <input type="varchar" class="form-control" id="author2" name="author2"
                                placeholder="กรุณาใส่ชื่อผู้แต่งงานวิจัยคนที่ 2" required>
                        </div>
                        <div class="form-group">
                            <label for="author3"><span class="text-danger">*</span> ชื่อผู้แต่งคนที่ 3</label>
                            <input type="varchar" class="form-control" id="author3" name="author3"
                                placeholder="กรุณาใส่ชื่อผู้แต่งงานวิจัยคนที่ 3" required>
                        </div>
                        <div class="form-group">
                            <label for="abstract"><span class="text-danger">*</span> บทคัดย่อ </label>
                            <textarea class="form-control" id="abstract" name="abstract"
                                placeholder="กรุณารายละเอียด"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="keyword"><span class="text-danger">*</span> คำสำคัญ</label>
                            <input type="varchar" class="form-control" id="keyword" name="keyword"
                            placeholder="กรุณากรอกคำสำคัญของงานวิจัยของท่าน" required>
                        </div>
                        <div class="form-group">
                            <label for="types"><span class="text-danger">*</span> ประเภทงานวิจัย</label>
                            <input type="varchar" class="form-control" id="types" name="types"
                            placeholder="กรุณากรอกประเภทงานวิจัย" required>
                        </div>
                        <div class="form-group">
                            <label for="publication_date"><span class="text-danger">*</span> วันที่ตีพิมพ์</label>
                            <input type="date" class="form-control" id="publication_date" name="publication_date"
                                placeholder="" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="abstract_short"><span class="text-danger">*</span> ไฟล์บทคัดย่อ</label>
                            <input type="file" class="form-control" id="abstract_short" name="abstract_short" accept="pdf/*"
                                title="Upload PDF" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="abstract_pdf"><span class="text-danger">*</span> ไฟล์งานเล่ม 5 บท หรือไฟล์บทความทางวิชาการรูปแบบ PDF</label>
                            <input type="file" class="form-control" id="abstract_pdf" name="abstract_pdf" accept="pdf/*"
                                title="Upload PDF" placeholder="Enter your name" required>
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