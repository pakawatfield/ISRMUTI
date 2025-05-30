<?php
include("condb.php");

$id = $_POST["id"];
$report_name = $_POST["report_name"];
$aunqa_category_id = $_POST["aunqa_category_id"];
$pdf_file_name = basename($_FILES["pdf_file"]["name"]); // รับชื่อไฟล์เท่านั้น

// เซ็ตเส้นทางไฟล์
$target_dir_pdf = "../aunqa/pdf/";
$target_file_pdf = $target_dir_pdf . $pdf_file_name;

// ย้ายไฟล์ไปยังเส้นทางปลายทาง
move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file_pdf);

$sql = "UPDATE 
            aunqa
            SET
            report_name = '$report_name',
            pdf_file = '$pdf_file_name',
            aunqa_category_id = '$aunqa_category_id'
            WHERE id = '$id'
            ";

$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_aunqa.php");
    
} else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>
