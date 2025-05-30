<?php

include("condb.php");

$report_id = $_POST["id"];
$report_name = $_POST["report_name"];
$cover_image = $_FILES["cover_image"]["name"];
$pdf_file = $_FILES["pdf_file"]["name"];

// Check if a valid image file is uploaded
if(isset($_FILES["cover_image"]) && $_FILES["cover_image"]["error"] == 0) {
    // Define allowed image types
    $allowed_image_types = array("image/jpeg", "image/png", "image/gif");
    
    // Check if the uploaded file type is allowed
    if (!in_array($_FILES["cover_image"]["type"], $allowed_image_types)) {
        echo "ประเภทของไฟล์รูปภาพไม่ถูกต้อง";
        exit();
    }
    
    // Check if the uploaded file size is within limit (5 MB)
    $max_image_size = 5 * 1024 * 1024; // 5 MB
    if ($_FILES["cover_image"]["size"] > $max_image_size) {
        echo "ขนาดของไฟล์รูปภาพเกินขนาดที่กำหนด";
        exit();
    }

    // Move the uploaded image to the destination folder
    $target_image_directory = "../image/reports/";
    $cover_image_name = basename($_FILES["cover_image"]["name"]);
    $cover_image_path = $target_image_directory . $cover_image_name;
    move_uploaded_file($_FILES["cover_image"]["tmp_name"], $cover_image_path);
} else {
    echo "ไม่สามารถอัปโหลดรูปภาพปก";
    exit();
}

// Check if a valid PDF file is uploaded
if(isset($_FILES["pdf_file"]) && $_FILES["pdf_file"]["error"] == 0) {
    // Define allowed PDF file types
    $allowed_pdf_types = array("application/pdf");
    
    // Check if the uploaded file type is allowed
    if (!in_array($_FILES["pdf_file"]["type"], $allowed_pdf_types)) {
        echo "ประเภทของไฟล์ PDF ไม่ถูกต้อง";
        exit();
    }
    
    // Move the uploaded PDF file to the destination folder
    $target_pdf_directory = "../image/reports/pdf/";
    $pdf_file_name = basename($_FILES["pdf_file"]["name"]);
    $pdf_file_path = $target_pdf_directory . $pdf_file_name;
    move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $pdf_file_path);
} else {
    echo "ไม่สามารถอัปโหลดไฟล์ PDF";
    exit();
}

$sql = "UPDATE 
            reports
            SET
            report_name = '$report_name',
            cover_image = '$cover_image',
            pdf_file = '$pdf_file'
            WHERE report_id = '$report_id'";

$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_report.php");
} else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}

?>
