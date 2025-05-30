
<?php
include("condb.php");

$SAR_summary_name = $_POST["SAR_summary_name"];
$SARCUR_ID = $_POST["SARCUR_ID"];

$target_dir_pdf = "../sar/pdf/";
$target_file_pdf = $target_dir_pdf . basename($_FILES["SAR_PDF_file"]["name"]);

move_uploaded_file($_FILES["SAR_PDF_file"]["tmp_name"], $target_file_pdf);

// เพิ่มเฉพาะชื่อไฟล์เท่านั้นลงในฐานข้อมูล
$pdf_file_name = basename($_FILES["SAR_PDF_file"]["name"]);

$sql = "INSERT INTO sar
            (SAR_summary_name, 
            SAR_PDF_file,
            SARCUR_ID)
        VALUES('$SAR_summary_name',
                '$pdf_file_name',
                '$SARCUR_ID'
                )";
                            
$result = mysqli_query($condb, $sql);

if($result) {
    header("Location: manage_sar.php");
} else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>
