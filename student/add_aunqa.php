
<?php
include("condb.php");

$report_name = $_POST["report_name"];
$aunqa_category_id = $_POST["aunqa_category_id"];

$target_dir_pdf = "../aunqa/pdf/";
$target_file_pdf = $target_dir_pdf . basename($_FILES["pdf_file"]["name"]);

move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file_pdf);

// เพิ่มเฉพาะชื่อไฟล์เท่านั้นลงในฐานข้อมูล
$pdf_file_name = basename($_FILES["pdf_file"]["name"]);

$sql = "INSERT INTO aunqa
            (report_name, 
            pdf_file,
            aunqa_category_id)
        VALUES('$report_name',
                '$pdf_file_name',
                '$aunqa_category_id'
                )";
                            
$result = mysqli_query($condb, $sql);

if($result) {
    header("Location: manage_aunqa.php");
} else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>