<!-- Header -->
<?php include("header.php"); ?>
<!-- Summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<!-- Left Menu -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php
    $reward_id = $_GET["reward_id"];
    $sql = "SELECT a.*, b.tittlereward_name FROM reward AS a LEFT JOIN tittlereward AS b ON a.tittlereward_id = b.tittlereward_id WHERE a.reward_id = '$reward_id'";
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
                    <h1>เพิ่มข้อมูลผลงานนักศึกษา</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="manage_reward.php">จัดการข้อมูลผลงานนักศึกษา</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลผลงานนักศึกษา</li>
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
                <div class="card-header"
                    style="background:#001f3f linear-gradient(180deg,#26415c,#001f3f) repeat-x!important;">
                    <h3 class="card-title">เพิ่มข้อมูลผลงานนักศึกษา</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="edit_reward.php" enctype="multipart/form-data">
                    <input type="text" id="id" name="id" value="<?php echo $row["reward_id"]; ?>" hidden>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="reward_name"><span class="text-danger">*</span> ชื่อผลงานนักศึกษา</label>
                            <input type="text" class="form-control" id="reward_name" name="reward_name"
                                placeholder="กรุณาใส่ชื่อผลงานนักศึกษา" value="<?php echo $row["reward_name"];?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="reward_img"><span class="text-danger">*</span> รูปภาพ</label>
                            <div class="img">
                                <img src="../image/reward/<?php echo $row["reward_img"];?>" class="img"
                                    style="width: 150px;">
                            </div>
                            <br>
                            <input type="file" class="form-control" id="reward_img" name="reward_img"
                                placeholder="รูปภาพอาจารย์" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="reward_detail"><span class="text-danger">*</span> รายละเอียดผลงาน</label>
                            <textarea class="form-control" id="reward_detail" name="reward_detail"
                                placeholder="กรุณารายละเอียด" required><?php echo $row["reward_detail"];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="reward_date"><span class="text-danger">*</span> วันที่ลงผลงาน</label>
                            <input type="date" class="form-control" id="reward_date" name="reward_date"
                                placeholder="กรุณาใส่ชื่อข่าว" value="<?php echo $row["reward_date"];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="reward_time"><span class="text-danger">*</span> เวลาที่ลงผลงาน</label>
                            <input type="time" class="form-control" id="reward_time" name="reward_time"
                                placeholder="กรุณาใส่ชื่อข่าว" value="<?php echo $row["reward_time"];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tittlereward_name"><span class="text-danger">*</span> ประเภทผลงาน</label>
                            <select class="form-control custom-select" id="tittlereward_name" name="tittlereward_name"
                                required>
                                <option value="<?php echo $row["tittlereward_name"];?>" selected>
                                    <?php echo $row["tittlereward_name"];?></option>
                                <option value="">กรุณาเลือก</option>
                                <option value="ผลงานนักศึกษา">ผลงานนักศึกษา</option>
                                <option value="ผลงานนักศึกษาในกระบวนวิชา">ผลงานนักศึกษาในกระบวนวิชา</option>
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
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer -->
<?php include("footer.php"); ?>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>

<script>
$(function() {
    // Summernote
    $('#reward_detail').summernote();
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