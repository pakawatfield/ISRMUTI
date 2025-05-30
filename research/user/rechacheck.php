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
                    <h1>หน้าแรก (ค้นหางานวิจัย)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
                        <li class="breadcrumb-item active">หน้าแรก (ค้นหางานวิจัย)</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <script>
    function calculateSelectedResearch() {
        var checkboxes = document.querySelectorAll('input[name="selected_research[]"]:checked');
        if (checkboxes.length === 1) {
            // หากเลือกงานวิจัยครบ 3 รายการให้เก็บไอดีของงานวิจัยที่เลือกไว้
            var selectedIds = Array.from(checkboxes).map(function(checkbox) {
                return checkbox.value;
            }).join(',');
            // ส่งไอดีของงานวิจัยไปยังหน้าถัดไป
            window.location.href = 'next_page.php?id=' + selectedIds;
        } else {
            // หากไม่เลือกครบ 3 รายการให้แสดงข้อความแจ้งเตือน
            alert("กรุณาเลือก 1 งานวิจัยเพื่อดำเนินการต่อ");
        }
    }
    </script>
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
                            style="background-color: #006664;; repeat-x!important ;">

                            <h3 class="card-title" style="color: #ffffff;">จัดการข้อมูลหลักสูตร</h3>

                        </div>

                        <div class="card-body">
                            <button class="btn btn-warning center-left"
                                onclick="calculateSelectedResearch()">เลือกงานวิจัย</button>
                            <div class="row">
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">เลือก</th>
                                        <!-- <th class="text-center">#</th> -->
                                        <th class="text-center" >ชื่องานวิจัย</th>
                                        <th class="text-center">ผู้แต่ง</th>
                                        <th class="text-center" >บทคัดย่อ</th>
                                        <th class="text-center">ปีที่ลง</th>
                                        <th class="text-center">ไฟล์บทคัดย่อ</th>
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
                                        <td>
                                            <input type="checkbox" name="selected_research[]"
                                                value="<?php echo $rows["abstract_id"]; ?>">
                                        </td>
                                        <!-- <td><?php echo $count++; ?></td> -->
                                        <td><?php echo $rows["abstract_tittle"]; ?></td>
                                        <td><?php echo $rows["author1"]; ?></td>
                                        <td><?php echo $rows["abstract"]; ?></td>
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
                                            <a href="../pdf/<?php echo $rows["abstract_pdf"]; ?>" target="_blank">
                                                <img src="../../image/pdf.png" style="width: 50px;" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>


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

        <!-- Pagination -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>

<!-- DataTables  & Plugins -->
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<!-- <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script> -->
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
$(document).ready(function() {

    // alert("Hi");

    //Convert data to datatable.
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


});
</script>


