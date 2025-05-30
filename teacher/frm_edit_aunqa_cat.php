<!-- Header. -->
<?php include("header.php"); ?>
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $aunqa_category_id  = $_GET["aunqa_category_id"];
    $sql = "SELECT * FROM aunqa_category WHERE aunqa_category_id  = '$aunqa_category_id' ";
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
                    <h1>แก้ไขข้อมูลประเภท AUNQA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_aunqa_cat.php">จัดการประเภทข้อมูล AUNQA</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูล</li>
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
                    <h3 class="card-title">แก้ไขข้อมูล AUNQA</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_aunqa_cat.php" enctype="multipart/form-data">
                <input type="text" id="id" name="id" value="<?php echo $row["aunqa_category_id"]; ?>" hidden>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_name"><span class="text-danger">*</span> ชื่อประเภท AUNQA</label>
                            <input type="varchar" class="form-control" id="category_name" name="category_name"
                            value="<?php echo $row["category_name"]; ?>"  placeholder="(กรุณาระบุปี พ.ศ. เช่น 2567 ให้ใส่ '2567')" require>
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