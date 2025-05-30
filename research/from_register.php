<!-- Header. -->
<?php include("header.php"); ?>
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>สมัครสมาชิก</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">สมัครสมาชิก</li>
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
                <div class="card-header " style="background:#EA1179 repeat-x!important ;">
                    <h3 class="card-title">กรุณาสมัครสมาชิก หากท่านยังไม่มีบัญชีของคุณ</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <div class="card-body" style="background-image: url('image/thai.png'); width: 100%; height: 100%;">
                        <div class="form-group">
                            <label for="personal_name"><span class="text-danger">*</span> ชื่อ - นามสกุล</label>
                            <input type="varchar" class="form-control" id="personal_name" name="personal_name"
                                placeholder="(หากเป็นอาจารย์กรุณากรอกตำแหน่งทางวิชาการด้วย)" require>
                        </div>
                        <div class="form-group">
                            <label for="personal_username"><span class="text-danger">*</span> ชื่อผู้ใช้งาน</label>
                            <input type="varchar" class="form-control" id="personal_username" name="personal_username"
                                placeholder="(ชื่อผู้ใช้งาน Internet ของมหาวิทยาลัย เช่น ชญานนท์ ภาคฐิน ชื่อผู้ใช้คือ Chayanon.Ph)"
                                require>
                        </div>
                        <div class="form-group">
                            <label for="personal_password"><span class="text-danger">*</span> รหัสผ่าน </label>
                            <input type="password" class="form-control" id="personal_password" name="personal_password"
                                placeholder="(กำหนดรหัสผ่านอย่างน้อย 8 ตัวอักษร)">
                        </div>
                        <div class="form-group">
                            <label for="personal_email"><span class="text-danger">*</span> E-mail </label>
                            <input type="varchar" class="form-control" id="personal_email" name="personal_email"
                                placeholder="(กำหนดกรอกอีเมลผู้ใช้งาน)">
                        </div>
                        <div class="form-group">
                            <label for="personal_imgcard"><span class="text-danger">*</span> รูปภาพเซลฟี่</label>
                            <small id="personal_imgcard_help"
                                class="form-text text-muted">*กรุณาอัปโหลดภาพเพื่อยืนยันตัวตน (ไฟล์ jpg และ png)</small>
                            <img src="../image/card/card1.jpg" alt="รูปตัวอย่างบัตร"
                                style="display: block; max-width: 220px;"><br>
                            <input type="file" class="form-control" id="personal_imgcard" name="personal_imgcard"
                                placeholder="รูปภาพอาจารย์" accept="file" required>

                        </div>

                        <div class="from-group">
                            <label for="lavel_id"><span class="text-danger">*</span> ประเภทผู้ใช้งาน</label>
                            <select class="from-control form-control custom-select" id="lavel_id" name="lavel_id"
                                required>
                                <option value="">กรุณาเลือก</option>
                                <option value="3">นักศึกษา</option>
                                <option value="4">บุคคลทั่วไป</option>
                                <option value="5">ครู/อาจารย์</option>
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

<!-- Footer -->
<?php include("footer.php"); ?>
<!-- SweetAlert JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function () {
        $('form').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function (response) {
                    if (response === 'registration_success') {
                        // Registration successful, display success message
                        Swal.fire({
                            title: 'บันทึกข้อมูลสำเร็จ',
                            text: 'รอเจ้าหน้าที่อนุมัติระบบของท่าน ภายใน 5-7 วัน',
                            type: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(function () {
                            window.location.href = 'frm_login.php'; // Redirect to login page
                        });
                    } else if (response === 'username_exists') {
                        // Username already exists, display error message
                        Swal.fire({
                            title: 'ชื่อบัญชีมีในระบบแล้ว',
                            text: 'กรุณาเข้าสู่ระบบ',
                            type: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(function () {
                            window.location.href = 'frm_login.php'; // Redirect to login page
                        });
                    } else {
                        // Registration failed, display error message
                        Swal.fire({
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถบันทึกข้อมูลได้ กรุณาลองใหม่อีกครั้ง',
                            type: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function (data) {
                    Swal.fire({
                        title: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                        type: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    });
</script>

