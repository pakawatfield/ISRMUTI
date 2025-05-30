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
                    <h1>เพิ่มข้อมูลข่าวสาร</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_news.php">จัดการข้อมูลข่าวสาร</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลข่าวสาร</li>
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
                    <h3 class="card-title">เพิ่มข้อมูลข่าวสาร</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="add_news.php" enctype="multipart/form-data">
                <!-- <input type="text" name="news_id" value="news_id"> -->
                    

                    <div class="card-body">
                        <div class="form-group">
                            <label for="news_name"><span class="text-danger">*</span> ชื่อข่าว</label>
                            <input type="varchar" class="form-control" id="news_name" name="news_name"
                            placeholder="กรุณาใส่ชื่อข่าว" require>
                        </div>
                        <div class="form-group">
                            <label for="news_img"><span class="text-danger">*</span> รูปภาพภาพข่าว</label>
                            <div class="img">
                            </div>
                            <input type="file" class="form-control" id="news_img" name="news_img"
                             placeholder="" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="news_detail"><span class="text-danger">*</span> รายละเอียดข่าว</label>
                            <textarea class="form-control" id="news_detail" name="news_detail"
                            placeholder="กรุณารายละเอียด"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="news_date"><span class="text-danger">*</span> วันที่ลงข่าว</label>
                            <input type="date" class="form-control" id="news_date" name="news_date"
                            placeholder="กรุณาใส่ชื่อข่าว" require>
                        </div>
                        <div class="form-group">
                            <label for="news_time"><span class="text-danger">*</span> เวลาที่ลงข่าว</label>
                            <input type="time" class="form-control" id="news_time" name="news_time"
                            placeholder="กรุณาใส่ชื่อข่าว" require>
                        </div>
                        <div class="form-group">
                            <label for="personal_data"><span class="text-danger">*</span> ผู้ข้อมูล/ภาพประกอบ</label>
                            <input type="varchar" class="form-control" id="personal_data" name="personal_data"
                            placeholder="กรุณาใส่ชื่อคนลง" require>
                        </div>
                        <div class="form-group">
                            <label for="personal_post"><span class="text-danger">*</span> ผู้เรียบเรียงข่าว</label>
                            <input type="varchar" class="form-control" id="personal_post" name="personal_post"
                            placeholder="กรุณาใส่ชื่อคนลง" require>
                        </div>
                        <div class="from-group">
                            <label for="titlenews_id"><span class="text-danger">*</span> Categories</label>
                            <select class="from-control form-control custom-select" id="titlenews_id" name="titlenews_id"
                                required>
                                <option value="">กรุณาเลือก</option>
                                <option value="1">ข่าวกิจกรรม</option>
                                <option value="2">ข่าวประชาสัมพันธ์</option>
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
    $('#news_detail').summernote()

    
})
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function(){
    // เมื่อฟอร์มถูกส่ง
    $('form').submit(function(event){
        // หยุดการกระทำปกติของฟอร์ม
        event.preventDefault();
        // แสดง Sweet Alert
        Swal.fire({
            title: 'บันทึกข้อมูลสำเร็จ!',
            text: 'ข้อมูลของคุณได้ถูกบันทึกเรียบร้อยแล้ว',
            icon: 'success',
            confirmButtonText: 'ตกลง'
        }).then((result) => {
            // หลังจากที่ผู้ใช้กดปุ่มตกลง
            if (result.isConfirmed) {
                // ส่งข้อมูลฟอร์มไปยังหน้าที่ต้องการ
                $('form').unbind('submit').submit();
            }
        });
    });
});

</script>
