<!-- Header. -->
<?php include("header.php"); ?>
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $academic_id = $_GET["academic_id"];
    $sql = "SELECT * FROM academic WHERE academic_id = '$academic_id' ";
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
                    <h1>เพิ่มข้อมูลบริการวิชาการ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_academic.php">จัดการข้อมูลบริการวิชาการ</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลบริการวิชาการ</li>
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
                    <h3 class="card-title">แก้ไขบริการวิชาการ</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_academic.php" enctype="multipart/form-data">
                <input type="text" id="id" name="id" value="<?php echo $row["academic_id"]; ?>" hidden>
                    

                    <div class="card-body">
                        <div class="form-group">
                            <label for="academic_name"><span class="text-danger">*</span> ชื่อบริการวิชาการ</label>
                            <input type="varchar" class="form-control" id="academic_name" name="academic_name"
                            value="<?php echo $row["academic_name"]; ?>" placeholder="กรุณาใส่ชื่อบริการวิชาการ" require>
                        </div>
                        <div class="form-group">
                            <label for="academic_img"><span class="text-danger">*</span> รูปภาพ </label>
                            <div class="img">
                                <img src="../image/academic/<?php echo $row["academic_img"];?>" class="img"
                                    style="width: 150px;">
                            </div>
                            <br>
                            <input type="file" class="form-control" id="academic_img" name="academic_img"
                                placeholder="รูปภาพหลักสูตร" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="academic_detail"><span class="text-danger">*</span> รายละเอียดบริการวิชาการ</label>
                            <textarea class="form-control" id="academic_detail" name="academic_detail"
                            placeholder="กรุณารายละเอียด"><?php echo $row["academic_detail"]; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="academic_date"><span class="text-danger">*</span> วันที่ลงข่าว</label>
                            <input type="date" class="form-control" id="academic_date" name="academic_date"
                            value="<?php echo $row["academic_date"]; ?>" placeholder="กรุณาใส่ชื่อข่าว" require>
                        </div>
                        <div class="form-group">
                            <label for="academic_time"><span class="text-danger">*</span> เวลาที่ลงข่าว</label>
                            <input type="time" class="form-control" id="academic_time" name="academic_time"
                            value="<?php echo $row["academic_time"]; ?>" placeholder="กรุณาใส่ชื่อข่าว" require>
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
    $('#academic_detail').summernote()

    
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