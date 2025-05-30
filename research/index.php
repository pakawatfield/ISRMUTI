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
                    <h1>หน้าแรก (งานวิจัยระดับปริญญาตรี)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
                        <li class="breadcrumb-item active">หน้าแรก (งานวิจัยระดับปริญญาตรี)</li>
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
                            <h3 class="card-title" style="color: #ffffff;">
                                ฐานข้อมูลงานวิจัยระบบปริญญาตรีสาขาระบบสารสนเทศ</h3>
                        </div>
                        <div class="card-body">
                            <?php 
                        // กำหนดคำสั่ง SQL สำหรับการดึงข้อมูลและเรียงลำดับตามวันที่ลงข้อมูล พศ มากสุดไปน้อยสุด
                        $sql = "SELECT * FROM research ORDER BY publication_date ASC";

                        // ใช้คำสั่ง SQL ที่กำหนดในตัวแปร $sql ด้วย mysqli_query()
                        $result = mysqli_query($condb, $sql);

                        // ตรวจสอบว่ามีผลลัพธ์จากการเรียกคำสั่ง SQL หรือไม่
                        if ($result) {
                        ?>
                            <!-- แสดงตารางข้อมูล -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center text-white bg-#211951"
                                            style="background-color: #EA1179;">ชื่อบทความ</th>
                                        <th class="text-center text-white bg-#211951"
                                            style="background-color: #EA1179;">ชื่อ-สกุลนักวิจัย</th>
                                        <th class="text-center text-white bg-#211951"
                                            style="background-color: #EA1179;">วันที่ลงข้อมูล (พศ)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                // ลูปผ่านข้อมูลและแสดงผลลัพธ์ในตาราง
                                $count = 1;
                                while ($rows = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><a
                                                href="detail.php?id=<?php echo $rows["abstract_id"]; ?>"><?php echo $rows["abstract_tittle"]; ?></a>
                                        </td>
                                        <td><?php echo $rows["author1"]; ?> และคณะ</td>
                                        <td>
                                            <?php
                                        // Get the publication date from $rows["publication_date"]
                                        $publication_date = $rows["publication_date"];

                                        // Create a DateTime object from the publication date using a specified format
                                        $date_obj = DateTime::createFromFormat('Y-m-d', $publication_date);

                                        // Extract the year from the DateTime object
                                        $year = $date_obj->format('Y');

                                        // Convert the year to Buddhist Era (B.E.) format
                                        $buddhist_year = $year + 543;

                                        // Display the year in Thai Buddhist Era format
                                        echo $buddhist_year;
                                        ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $count++;
                                    }
                                ?>
                                </tbody>
                            </table>
                            <?php
                            } else {
                                // แสดงข้อความข้อผิดพลาดเมื่อเกิดข้อผิดพลาดในการดึงข้อมูล
                                echo "เกิดข้อผิดพลาดในการดึงข้อมูล: " . mysqli_error($condb);
                            }
                        ?>

                            </tbody>
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