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

                            <h3 class="card-title" style="color: #ffffff;">จัดการข้อมูลข่าวสาร</h3>

                        </div>

                        <div class="card-body">

                            <a class="btn btn-md btn-success" href="frm_add_news.php"><i class="fa fa-plus-square"></i>
                                เพิ่มข้อมูล</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <!-- <th>ไอดี</th> -->
                                        <th>ชื่อข่าว</th>
                                        <th>ภาพข่าว</th>
                                        <th>รายละเอียดข่าว</th>
                                        <th>วันที่อัพเดต</th>
                                        <th>เวลาเพิ่มข้อมูลข่าวสาร</th>
                                        <th>ประเภทข่าวสาร</th>
                                        <th>รูปภาพเพิ่มเติม</th>
                                        <th>ข้อมูล/ภาพประกอบ</th>
                                        <th>เรียบเรียงข่าว</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php 
                                        $sql = "SELECT a.*, b.titlenews_name FROM news AS a LEFT JOIN titlenews AS b ON a.titlenews_id = b.titlenews_id";
                                        $result = mysqli_query($condb, $sql);
                                        $count = 1;
                                        while($rows = mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <!-- <td><?php echo $rows["news_id"]; ?></td> -->
                                        <td><small><?php echo $rows["news_name"]; ?></small></td>
                                        <td></small>
                                            <a href="../image/news/<?php echo $rows["news_img"]; ?>" target="_black">
                                                <img src="<?php echo '../image/news/' . $rows["news_img"]; ?>"
                                                    class="img" style="width: 150px;">


                                            </a></small>
                                        </td>
                                        <td><small><?php echo $rows["news_detail"]; ?></small></td>
                                        <td><small><?php echo date('d/m/Y', strtotime($rows["news_date"])); ?></small>
                                        </td>
                                        <td><small><?php echo $rows["news_time"]; ?></small></td>
                                        <td class="text-bold"></small><?php 
                                            $status = $rows['titlenews_id'];

                                            if ($status == '1') {
                                                echo '<span style="color: green;">ข่าวกิจกรรม</span>';
                                            } elseif ($status == '2') {
                                                echo '<span style="color: blue;">ข่าวประชาสัมพันธ์</span>';
                                            }
                                            ?>
                                            </small>
                                        </td>
                                        </td>
                                        <td>
                                            <a class="btn btn-xs btn-warning"
                                                href="additional_images.php?news_id=<?php echo $rows["news_id"]; ?>"><i
                                                    class="fa fa-edit"></i>รูปภาพเพิ่มเติม</a>
                                        </td>

                                        <td><small><?php echo $rows["personal_data"]; ?></small></td>
                                        <td><small><?php echo $rows["personal_post"]; ?></small></td>

                                        <td><small>
                                                <a class="btn btn-xs btn-warning"
                                                    href="frm_edit_news.php?news_id=<?php echo $rows["news_id"]; ?>"><i
                                                        class="fa fa-edit"></i></a>
                                                <a class="btn btn-xs btn-danger"
                                                    href="delete_news.php?news_id=<?php echo $rows["news_id"]; ?>"
                                                    onclick="return confirm('คุณแน่ใจต้องการลบข้อมูลข่าวนี้?')"><i
                                                        class="fa fa-trash"></i></a>
                                            </small>
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