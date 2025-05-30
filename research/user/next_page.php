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
                    <h1>หน้าแรก (ผู้ดูแลระบบ)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
                        <li class="breadcrumb-item active">หน้าแรก (ผู้ดูแลระบบ)</li>
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
                        <div class="card-header" style="background-color: #006664;; repeat-x!important ;">
                            <h3 class="card-title" style="color: #ffffff;">จัดการข้อมูลหลักสูตร</h3>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-warning"
                                onclick="goToRechacheckPage()">ย้อนกลับไปเลือกงานวิจัยใหม่</button>

                            <script>
                            function goToRechacheckPage() {
                                window.location.href = 'rechacheck.php';
                            }
                            </script>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <!-- <th>ไอดี</th> -->
                                        <th>ชื่องานวิจัย</th>
                                        <th>ผู้แต่ง</th>
                                        <th>บทคัดย่อ</th>
                                        <th>วันที่ตีพิมพ์</th>
                                        <th>ดาวน์โหลด</th> <!-- เพิ่มหัวข้อคอลัมน์ -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // ดึงค่า id จาก URL
                                    $ids = $_GET['id'];
                                    // แยกค่า id ด้วยเครื่องหมายคอมมา
                                    $id_array = explode(',', $ids);
                                    // สร้างสตริงสำหรับใช้เป็น parameterized query
                                    $placeholders = implode(',', array_fill(0, count($id_array), '?'));

                                    // ทำการ query ข้อมูลโดยใช้ parameterized query และคำสั่ง SQL IN
                                    $sql = "SELECT * FROM research WHERE abstract_id IN ($placeholders)";
                                    $stmt = $condb->prepare($sql);

                                    // ผูกค่า parameter
                                    $stmt->bind_param(str_repeat('i', count($id_array)), ...$id_array);

                                    // execute query
                                    $stmt->execute();

                                    // ดึงข้อมูล
                                    $result = $stmt->get_result();

                                    while($rows = $result->fetch_array()){
                                ?>
                                    <tr>
                                        <!-- <td>
                                            <input type="checkbox" name="selected_research[]"
                                                value="<?php echo $rows["abstract_id"]; ?>">
                                        </td> -->
                                        <!-- <td><?php echo $rows["abstract_id"]; ?></td> -->
                                        <td><?php echo $rows["abstract_tittle"]; ?></td>
                                        <td><?php echo $rows["author1"]; ?></td>
                                        <td><?php echo $rows["abstract"]; ?></td>
                                        <td><?php echo $rows["publication_date"]; ?></td>
                                        <td>
                                            <a href="../../pdf/<?php echo $rows["abstract_pdf"]; ?>"
                                                onclick="startDownloadCountdown()"
                                                class="btn btn-sm btn-danger">ดาวน์โหลด</a>
                                        </td>

                                    </tr>
                                    <?php } ?>
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
</div>
<!-- Footer. -->
<?php include("footer.php"); ?>

<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>