<?php include("header.php"); ?>
<?php include("../secure/condb.php"); ?>

<?php
if (isset($_GET['reward_id'])) {
    $reward_id = $_GET['reward_id'];
    $additional_images_reward_sql = "SELECT * FROM additional_images_reward WHERE reward_id = $reward_id";
    $additional_images_reward_result = mysqli_query($condb, $additional_images_reward_sql);
} else {
    header("Location: error.php");
    exit();
}
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
                        <div class="card-header"
                            style="background:#001f3f linear-gradient(180deg,#26415c,#001f3f) repeat-x!important ;">
                            <h3 class="card-title" style="color: #ffffff;">รูปภาพของข่าว</h3>
                        </div>
                        <div class="card-body">
                            <div class="additional-images">
                                <?php
                            if (mysqli_num_rows($additional_images_reward_result) > 0) {
                                $count = 0;
                                while ($row = mysqli_fetch_assoc($additional_images_reward_result)) {
                                    if ($count % 3 == 0) echo '<div class="row">';
                                    echo '<div class="col-md-4">';
                                    echo '<div class="image">';
                                    echo '<img src="../image/reward/detail/' . $row['image_file'] . '" alt="Additional Image" style="max-width: 350px; max-height: 200px;">';
                                    echo '<p>' . $row['description'] . '</p>';
                                    echo '<a href="delete_image_reward.php?id=' . $row['id'] . '" class="btn btn-danger">ลบ</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    if ($count % 3 == 2 || $count == mysqli_num_rows($additional_images_reward_result) - 1) echo '</div>';
                                    $count++;
                                }
                            } else {
                                echo '<p>No additional images found.</p>';
                            }
                            ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="add_image_reward.php?reward_id=<?php echo $reward_id; ?>"
                                class="btn btn-primary">เพิ่มรูปภาพ</a>
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