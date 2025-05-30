<?php

include("condb.php");

$abstract_id = $_POST["id"];
$abstract_tittle = $_POST["abstract_tittle"];
$author1 = $_POST["author1"];
$author2 = $_POST["author2"];
$author3 = $_POST["author3"];
$abstract = $_POST["abstract"];
$keyword = $_POST["keyword"];
$types = $_POST["types"];
$publication_date = $_POST["publication_date"];

// Check if a PDF file is uploaded
if(isset($_FILES["abstract_pdf"]) && $_FILES["abstract_pdf"]["error"] == 0) {
    $target_directory = "../pdf/";
    $pdf_file_name = basename($_FILES["abstract_pdf"]["name"]);
    $target_pdf_path = $target_directory . $pdf_file_name;
    
    // Move the uploaded PDF file to the destination directory
    if(move_uploaded_file($_FILES["abstract_pdf"]["tmp_name"], $target_pdf_path)) {
        // Update the database with the PDF file name
        $abstract_pdf = $pdf_file_name;
    } else {
        echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์ PDF";
        exit();
    }
} else {
    echo "กรุณาเลือกไฟล์ PDF";
    exit();
}

// Check if a PDF short file is uploaded
if(isset($_FILES["abstract_short"]) && $_FILES["abstract_short"]["error"] == 0) {
    $target_directory_short = "../pdfshort/";
    $pdf_short_file_name = basename($_FILES["abstract_short"]["name"]);
    $target_pdf_short_path = $target_directory_short . $pdf_short_file_name;
    
    // Move the uploaded PDF short file to the destination directory
    if(move_uploaded_file($_FILES["abstract_short"]["tmp_name"], $target_pdf_short_path)) {
        // Update the database with the PDF short file name
        $abstract_pdf_short = $pdf_short_file_name;
    } else {
        echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์ PDF short";
        exit();
    }
} else {
    echo "กรุณาเลือกไฟล์ PDF short";
    exit();
}

$sql = "UPDATE 
            research
            SET
            abstract_tittle = '$abstract_tittle',
            author1 = '$author1',
            author2 = '$author2',
            author3 = '$author3',
            abstract = '$abstract',
            keyword = '$keyword',
            types = '$types',
            publication_date = '$publication_date',
            abstract_pdf = '$abstract_pdf',
            abstract_short = '$abstract_pdf_short'
            WHERE abstract_id =  '$abstract_id'
            ";
$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_abstract.php");
    
}else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}

?>
