<!-- Header. -->
<?php include("header.php"); ?>
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>

<?php include("condb.php"); ?>

<?php

    $SARCUR_ID = $_GET["SARCUR_ID"];
    $sql = "SELECT * FROM sar_curriculum WHERE SARCUR_ID = '$SARCUR_ID' ";
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
                        <li class="breadcrumb-item"><a href="manage_sarcur.php">จัดการประเภทข้อมูล SAR</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลประเภท SAR</li>
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
                <form method="post" action="edit_sarcur.php" enctype="multipart/form-data">
                <input type="text" id="id" name="id" value="<?php echo $row["SARCUR_ID"]; ?>" hidden>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="SARCUR_name"><span class="text-danger">*</span> ชื่อประเภท</label>
                            <input type="varchar" class="form-control" id="SARCUR_name" name="SARCUR_name"
                            value="<?php echo $row["SARCUR_name"]; ?>"  placeholder="(กรุณาระบุปี พ.ศ. เช่น 2567 ให้ใส่ '2567')" require>
                        </div>
                        <div class="form-group">
                            <label for="SARCUR_cover_image"><span class="text-danger">*</span> รูปภาพ</label>
                            <div class="img">
                                <img src="../image/sar/<?php echo $row["SARCUR_cover_image"];?>" class="img"
                                    style="width: 150px;">
                            </div>
                            <br>
                            <input type="file" class="form-control" id="SARCUR_cover_image" name="SARCUR_cover_image"
                                placeholder="รูปภาพอาจารย์" accept="image/*" required>
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