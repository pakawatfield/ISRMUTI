<!-- Header. -->
<?php include("header.php"); ?>

<!-- Connect DB. -->
<?php include("../../secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->

<!-- DataTables -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- Left Menu. -->
<?php include("left-menu.php") ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>หน้าแรก </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
                        <li class="breadcrumb-item active">หน้าแรก</li>
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

                    <div class="card-header" style="background-color: #EA1179; repeat-x!important ;">

                            <h3 class="card-title" style="color: #ffffff;">งานวิจัยระดับปริญญาตรีทั้งหมด</h3>

                        </div>



                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center text-white style" style="background-color: #EA1179;;">#
                                        </th>
                                        <!-- <th class="text-center text-white bg-#006664">ไอดี</th> -->
                                        <th class="text-center text-white bg-#211951;"
                                            style="background-color: #EA1179;;">ชื่อบทความ</th>
                                        <th class="text-center text-white bg-#211951;"
                                            style="background-color: #EA1179;;">ชื่อ-สกุลนักวิจัย</th>
                                        <th class="text-center text-white bg-#211951;"
                                            style="background-color: #EA1179;;">วันที่ลงข้อมูล</th>
                                        <th class="text-center text-white bg-#211951;" style="background-color:#EA1179;;"
                                            width="12%">ไฟล์งาน</th>



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
                                        <td><?php echo $count++; ?></td>
                                        <!-- <td><?php echo $rows["abstract_id"]; ?></td> -->
                                        <td><?php echo $rows["abstract_tittle"]; ?></td>
                                        <td><?php echo $rows["author1"]; ?> และคณะ</td>

                                        <td>
                                            <?php
                                                // Get the publication date from $rows["publication_date"]
                                                $publication_date = $rows["publication_date"];
        
                                                // Extract the year from the publication date
                                                $year = date('Y', strtotime($publication_date));
        
                                                // Convert the year to Buddhist Era (B.E.) format
                                                $buddhist_year = $year + 543;

                                                // Display the year in Thai Buddhist Era format
                                                echo $buddhist_year;
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn text-white" style="background-color: #222221;"
                                                href="detail.php?id=<?php echo $rows["abstract_id"]; ?>"
                                                title="ดูรายละเอียด" style="font-family: 'mitr', sans-serif;">
                                                <i class="fa fa-edit" style="color: white;"></i> ดูรายละเอียด
                                            </a>
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
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- <script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->

<script>
$(document).ready(function() {

    // alert("Hi");

    //Convert data to datatable.
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


});
</script>