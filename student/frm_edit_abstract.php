<!-- Header. -->
<?php include("header.php"); ?>
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $abstract_id = $_GET["abstract_id"];
    $sql = "SELECT * FROM research WHERE abstract_id = '$abstract_id' ";
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
                    <h1>แก้ไขข้อมูลงานวิจัย</h1>
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
                    <h3 class="card-title">แก้ไขข้อมูลวิจัย</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_abstract.php" enctype="multipart/form-data">
                    <input type="text" id="id" name="id" value="<?php echo $row["abstract_id"]; ?>" hidden>


                    <div class="card-body">
                        <div class="form-group">
                            <label for="abstract_tittle"><span class="text-danger">*</span> ชื่องานวิจัย</label>
                            <input type="varchar" class="form-control" id="abstract_tittle" name="abstract_tittle"
                                value="<?php echo $row["abstract_tittle"];?> " placeholder="กรุณาใส่ชื่องานวิจัย"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="author1"><span class="text-danger">*</span> ชื่อผู้แต่งคนที่ 1</label>
                            <input type="varchar" class="form-control" id="author1" name="author1"
                                value="<?php echo $row["author1"];?> " placeholder="กรุณาใส่ชื่อผู้แต่งงานวิจัย"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="author2"><span class="text-danger">*</span> ชื่อผู้แต่งคนที่ 2</label>
                            <input type="varchar" class="form-control" id="author2" name="author2"
                                value="<?php echo $row["author2"];?> " placeholder="กรุณาใส่ชื่อผู้แต่งงานวิจัย"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="author3"><span class="text-danger">*</span> ชื่อผู้แต่งคนที่ 3</label>
                            <input type="varchar" class="form-control" id="author3" name="author3"
                                value="<?php echo $row["author3"];?> " placeholder="กรุณาใส่ชื่อผู้แต่งงานวิจัย"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="abstract"><span class="text-danger">*</span> บทคัดย่อ </label>
                            <textarea class="form-control" id="abstract" name="abstract"
                                placeholder="กรุณารายละเอียด"><?php echo $row["abstract"];?> " </textarea>
                        </div>
                        <div class="form-group">
                            <label for="keyword"><span class="text-danger">*</span> คำสำคัญ</label>
                            <input type="varchar" class="form-control" id="keyword" name="keyword"
                                value="<?php echo $row["keyword"];?> " placeholder="กรุณากรอกคำสำคัญของงานวิจัยของท่าน"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="types"><span class="text-danger">*</span> ประเภทงานวิจัย</label>
                            <input type="varchar" class="form-control" id="types" name="types"
                                value="<?php echo $row["types"];?> " placeholder="กรุณากรอกประเภทงานวิจัย" required>
                        </div>
                        <div class="form-group">
                            <label for="publication_date"><span class="text-danger">*</span> วันที่ตีพิมพ์</label>
                            <input type="date" class="form-control" id="publication_date" name="publication_date"
                                value="<?php echo $row["publication_date"];?>" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="abstract_short"><span class="text-danger">*</span> ไฟล์บทคัดย่อ</label>
                            <input type="file" class="form-control" id="abstract_short" name="abstract_short"
                                accept="pdf/*" value="<?php echo $row["abstract_short"];?>" title="Upload PDF" required>
                        </div>
                        <div class="form-group">
                            <label for="abstract_pdf"><span class="text-danger">*</span> ไฟล์งานเล่ม 5 บท </label>
                            <input type="file" class="form-control" id="abstract_pdf" name="abstract_pdf" accept="pdf/*"
                                value="<?php echo $row["abstract_pdf"];?>" title="Upload PDF" required>
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