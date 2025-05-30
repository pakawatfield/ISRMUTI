<?php
include("condb.php");

$SAR_id = $_POST["id"];
$SAR_summary_name = $_POST["SAR_summary_name"];
$SARCUR_ID = $_POST["SARCUR_ID"];

// File upload logic for PDF
$target_dir_pdf = "../sar/pdf/";
$target_file_pdf = $target_dir_pdf . basename($_FILES["SAR_PDF_file"]["name"]);
move_uploaded_file($_FILES["SAR_PDF_file"]["tmp_name"], $target_file_pdf);

$sql = "UPDATE 
            sar
            SET
            SAR_summary_name = '$SAR_summary_name',
            SAR_PDF_file = '$target_file_pdf',
            SARCUR_ID = '$SARCUR_ID'
            WHERE SAR_id =  '$SAR_id'
            ";
$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_sar.php");
    
}else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>