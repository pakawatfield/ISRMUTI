<!-- Header. -->
<?php include("header.php"); ?>

<!-- Connect DB. -->
<?php include("../secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->


<!-- Left Menu. -->
<?php include("left-menu.php") ?>


<style>
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}

.hd-tool {
    background-color: #40AF64;
    color: #FFF;
}

path[Attributes Style] {
    fill: currentcolor;
    d: path("M 224 136 V 0 H 24 C 10.7 0 0 10.7 0 24 v 464 c 0 13.3 10.7 24 24 24 h 336 c 13.3 0 24 -10.7 24 -24 V 160 H 248 c -13.2 0 -24 -10.8 -24 -24 Z m 160 -14.1 v 6.1 H 256 V 0 h 6.1 c 6.4 0 12.5 2.5 17 7 l 97.9 98 c 4.5 4.5 7 10.6 7 16.9 Z");
}

svg:not(:root).svg-inline--fa {
    overflow: visible;
}

<style>.svg-inline--fa.fa-w-12 {
    width: .75em;
}

svg:not(:root) {
    overflow: hidden;
}

<style>.svg-inline--fa {
    display: inline-block;
    font-size: inherit;
    height: 1em;
    overflow: visible;
    vertical-align: -.125em;
}

.centered {
    text-align: center;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>งานวิจัยระดับปริญญาตรี</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
                        <!-- <li class="breadcrumb-item active">ลงข้อมูล <?php echo $row["publication_date"]; ?></li> -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="invoice p-5">
            <!-- title row -->
            <?php
        $ids = $_GET['id'];
        $sql = "SELECT * FROM research WHERE abstract_id = $ids";
        $result = mysqli_query($condb, $sql);
        $row = mysqli_fetch_array($result);
        ?>
            <div class="row">
                <div class="row span4">
                    <div class="col-3">
                        <p><b>ชื่อเรื่อง</b></p>
                    </div>
                    <div class="col-9">
                        <p><?php echo $row["abstract_tittle"]; ?></p>
                    </div>
                    <div class="col-3">
                        <p><b>ปีการศึกษา</b></p>
                    </div>
                    <div class="col-9">
                        <p><?php echo date("Y", strtotime($row["publication_date"])) + 543; ?></p>
                    </div>
                    <div class="col-3">
                        <p><b>ผู้แต่ง</b></p>
                    </div>
                    <div class="col-9">
                        <p><?php echo $row["author1"]; ?></p>
                        <p><?php echo $row["author2"]; ?></p>
                        <p><?php echo $row["author3"]; ?></p>
                    </div>
                    <div class="col-3">
                        <p><b>ประเภทเอกสาร</b></p>
                    </div>
                    <div class="col-9">
                        <p>งานวิจัยระดับปริญญาตรี</p>
                    </div>
                    <div class="col-3">
                        <p><b>บทคัดย่อ</b></p>
                    </div>
                    <div class="col-9">
                        <p><?php echo $row["abstract"]; ?></p>
                    </div>
                    <div class="col-3">
                        <p><b>คำสำคัญ</b></p>
                    </div>
                    <div class="col-9">
                        <p><?php echo $row["keyword"]; ?></p>
                    </div>
                    <div class="col-3">
                        <p><b>ประเภทงานวิจัย</b></p>
                    </div>
                    <div class="col-9">
                        <p><?php echo $row["types"]; ?></p>
                    </div>
                    <div class="col-3">
                        <p><b>ไฟล์บทคัดย่อ</b></p>
                    </div>
                    <div class="col-9">
                        <p> <a title="เผยแพร่ทันที" target="_blank"
                                href="../pdfshort/<?php echo $row["abstract_short"]; ?>">
                                ไฟล์บทคัดย่อ
                            </a></p>
                    </div>
                    <div class="col-3">
                        <p><b>ไฟล์บทเล่ม 5 บท</b></p>
                    </div>
                    <div class="col-9">
                        <p> <a href="frm_login.php">
                                <button type="button" class="btn btn-danger" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> เข้าสู่ระบบ / สมัครสมาชิก
                                </button>
                            </a>
                        </p>
                    </div>

                </div>

            </div>

            <!-- this row will not appear when printing -->

        </div>
    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>