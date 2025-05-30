<?php include("header.php"); ?>
<?php include("../secure/condb.php"); ?>

<?php
// Get the news_id from the URL
$reward_id = $_GET['reward_id'];
?>


<?php include("left-menu.php") ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>หน้าแรก (ผู้ดูแลระบบ)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">หน้าแรก (ผู้ดูแลระบบ)</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background:#001f3f linear-gradient(180deg,#26415c,#001f3f) repeat-x!important ;">
                        <h3 class="card-title" style="color: #ffffff;">เพิ่มรูปภาพเพิ่มเติมสำหรับผลงาน</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="upload_image_reward.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="image">เลือกรูปภาพ:</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="description">คำอธิบายรูปภาพ:</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <input type="hidden" name="reward_id" value="<?php echo $reward_id; ?>">
                            <button type="submit" class="btn btn-primary">อัปโหลดรูปภาพ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?php include("footer.php"); ?>

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
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
