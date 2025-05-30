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
                    <h1>หน้าแรก (อาจารย์)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
                        <li class="breadcrumb-item active">หน้าแรก (อาจารย์)</li>
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

                            <h3 class="card-title" style="color: #ffffff;">จัดการข้อมูลประเภทหลักสูตร</h3>

                        </div>

                        <div class="card-body">

                            <a class="btn btn-md btn-success" href="frm_add_curlavel.php"><i
                                    class="fa fa-plus-square"></i>
                                เพิ่มข้อมูล</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>  
                                        <!-- <th>#</th> -->
                                        <!-- <th>ไอดี</th> -->
                                        <th>ชื่อหลักสูตร</th>
                                        <th>รูปภาพหลักสูตร</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php 
                                        $sql = "SELECT * FROM curlavel ";
                                        $result = mysqli_query($condb, $sql);
                                        $count = 1;
                                        while($rows = mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <!-- <td><small><?php echo $count++; ?></small></td> -->
                                        <!-- <td><?php echo $rows["curlavel_id"]; ?></td> -->
                                        <td><?php echo $rows["curlavel_name"]; ?></td>
                                        <td>
                                            <a href="../image/curlavel/<?php echo $rows["curlavel_img"]; ?>" target="_black">
                                            <img src="../image/curlavel/<?php echo $rows["curlavel_img"]; ?>" class="img" style="width: 150px;">

                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-warning"
                                                href="frm_edit_curlavel.php?curlavel_id=<?php echo $rows["curlavel_id"]; ?>"><i
                                                    class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-danger"
                                                href="delete_curlavel.php?curlavel_id=<?php echo $rows["curlavel_id"]; ?>"
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