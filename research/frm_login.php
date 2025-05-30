<!-- Header. -->
<?php include("header.php"); ?>
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header" >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>เข้าสู่ระบบ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">เข้าสู่ระบบ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >

        <!-- Default box -->
        <div class="card">
            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header "
                    style="background-color: #EA1179; repeat-x!important ;">
                    <h3 class="card-title">เข้าสู่ระบบ</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="login.php" enctype="multipart/from-data">
                <div class="card-body" style="background-image: url('image/thai.png'); width: 100%; height: 100%;">
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
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-md btn-success"><i class="fas fa-sign-in-alt"></i>
                                เข้าสู่ระบบ</button>
                        </div>

                    </div>
            </div>
            <!-- /.card-body -->
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