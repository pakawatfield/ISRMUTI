<!-- Header. -->
<?php include("header.php"); ?>
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $SAR_ID = $_GET["SAR_ID"];
    $sql = "SELECT * FROM sar WHERE SAR_ID = '$SAR_ID' ";
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
                    <h1>เพิ่มข้อมูล SAR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_sar.php">จัดการข้อมูล SAR</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูล</li>
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
                    <h3 class="card-title">เพิ่มข้อมูล</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_sar.php" enctype="multipart/form-data">
                    <input type="text" id="id" name="id" value="<?php echo $row["SAR_ID"]; ?>" hidden>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="SAR_summary_name"><span class="text-danger">*</span> ชื่อ SAR</label>
                            <input type="varchar" class="form-control" id="SAR_summary_name" name="SAR_summary_name"
                                value="<?php echo $row["SAR_summary_name"]; ?>" placeholder="(กรุณากรอกชื่อ SAR)"
                                require>
                        </div>
                        <div class="form-group">
                            <label for="SAR_PDF_file"><span class="text-danger">*</span> ไฟล์รายงาน SAR</label>
                            <input type="file" class="form-control" id="SAR_PDF_file" name="SAR_PDF_file" accept="pdf/*"
                                title="Upload PDF" value="<?php echo $row["SAR_PDF_file"]; ?>"
                                placeholder="Enter your name" required>
                        </div>
                        <div class="from-group">
                            <label for="SARCUR_ID"><span class="text-danger">*</span> เลือกปี พ.ศ.</label>
                            <select class="from-control form-control custom-select" id="SARCUR_ID" name="SARCUR_ID"
                                value="<?php echo $row["SARCUR_ID"]; ?>" required>
                                <option value="">กรุณาเลือก</option>
                                <option value="8">2567</option>
                                <option value="9">2566</option>
                                <option value="10">2565</option>
                                <option value="11">2564</option>
                                <option value="12">2563</option>
                                <option value="13">2562</option>
                                <option value="14">2561</option>
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