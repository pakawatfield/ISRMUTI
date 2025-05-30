<!-- Header. -->
<?php include("header.php"); ?>

<!-- Connect DB. -->
<?php include("../secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->

<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- Left Menu. -->
<?php include("left-menu.php") ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>หน้าแรก (นักศึกษา)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
                        <li class="breadcrumb-item active">หน้าแรก (นักศึกษา)</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Start Container fluid. -->
        <div class="container-fluid">

            <!-- Start table row. -->
            <div class="row">

                <!-- Start col-12. -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">

                        <div class="card-header"
                            style="background:#001f3f linear-gradient(180deg,#26415c,#001f3f) repeat-x!important ;">

                            <h3 class="card-title" style="color: #ffffff;">จัดการข้อมูลหลักสูตร</h3>

                        </div>

                        <div class="card-body">

                            <a class="btn btn-md btn-success" href="frm_add_abstract.php"><i
                                    class="fa fa-plus-square"></i>
                                เพิ่มข้อมูล</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <!-- <th>ไอดี</th> -->
                                        <th>ชื่องานวิจัย</th>
                                        <th>ผู้แต่งคนที่ 1</th>
                                        <th>ผู้แต่งคนที่ 2</th>
                                        <th>ผู้แต่งคนที่ 3</th>
                                        <th>บทคัดย่อ</th>
                                        <th>คำสำคัญ</th>
                                        <th>ประเภทงานวิจัย</th>
                                        <th>ปีการศึกษา</th>
                                        <th>ไฟล์รวม</th>
                                        <th>ไฟล์บทคัดย่อ</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php 
                                        $sql = "SELECT * FROM research";
                                        $result = mysqli_query($condb, $sql);
                                        $count = 1;
                                        while($rows = mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <td><small><?php echo $count++; ?></small></td>
                                        <!-- <td><?php echo $rows["abstract_id"]; ?></td> -->
                                        <td><small><?php echo $rows["abstract_tittle"]; ?></small></td>
                                        <td><small><?php echo $rows["author1"]; ?></small></td>
                                        <td><small><?php echo $rows["author2"]; ?></small></td>
                                        <td><small><?php echo $rows["author3"]; ?></small></td>
                                        <td><small><?php echo $rows["abstract"]; ?></small></td>
                                        <td><small><?php echo $rows["keyword"]; ?></small></td>
                                        <td><small><?php echo $rows["types"]; ?></small></td>
                                        <td>
                                            <small><?php echo date('Y', strtotime($rows["publication_date"])) + 543; ?></small>
                                        </td>

                                        <td>

                                            <a href="../pdf/<?php echo $rows["abstract_pdf"]; ?>" target="_blank">
                                                <a href="../pdf/<?php echo $rows["abstract_pdf"]; ?>">
                                                    <img src="../image/pdf.png" style="width: 40px;" alt="">
                                                    <class="file" style="width: 40px;">

                                                </a>
                                        </td>
                                        <td>
                                            <a href="../pdf/<?php echo $rows["abstract_short"]; ?>" target="_blank">
                                                <a href="../pdfshort/<?php echo $rows["abstract_short"]; ?>">
                                                    <img src="../image/pdf.png" style="width: 40px;" alt="">
                                                    <class="file" style="width: 40px;">

                                                </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-warning"
                                                href="frm_edit_abstract.php?abstract_id=<?php echo $rows["abstract_id"]; ?>"><i
                                                    class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-danger"
                                                href="delete_abstract.php?abstract_id=<?php echo $rows["abstract_id"]; ?>"
                                                onclick="return confirm('คุณแน่ใจต้องการลบข้อมูลงานวิจัยนี้ ?')"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>



                                </tbody>

                                <!-- <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot> -->

                            </table>

                        </div>
                        <!-- End of card-body. -->

                        <div class="card-footer">
                            Footer
                        </div>

                    </div>

                </div>
                <!-- End of col-12. -->

            </div>
            <!-- End of table row. -->

        </div>
        <!-- End of Container fluid. -->



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>

<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
$(document).ready(function() {

    // alert("Hi");

    //Convert data to datatable.
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


});
</script>