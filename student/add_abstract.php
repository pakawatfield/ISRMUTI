<?php

include("condb.php");

// โฟลเดอร์ที่ต้องการจะเก็บไฟล์
$target_directory = "../pdf/";
$target_directory_short = "../pdfshort/"; // แก้ไขโฟลเดอร์ที่ต้องการเก็บไฟล์สั้น

// รับข้อมูลของไฟล์ที่อัพโหลด
$abstract_pdf = $_FILES['abstract_pdf']['name'];
$abstract_short = $_FILES['abstract_short']['name'];

// ย้ายไฟล์ไปยังโฟลเดอร์ที่ต้องการ
if (move_uploaded_file($_FILES['abstract_pdf']['tmp_name'], $target_directory . $abstract_pdf) &&
    move_uploaded_file($_FILES['abstract_short']['tmp_name'], $target_directory_short . $abstract_short)) { // แก้ไขตำแหน่งที่เก็บไฟล์สั้น
    // ทำงานหลังจากอัพโหลดไฟล์สำเร็จ
    // รับข้อมูลจากฟอร์ม
    $abstract_tittle = $_POST["abstract_tittle"];
    $author1 = $_POST["author1"];
    $author2 = $_POST["author2"];
    $author3 = $_POST["author3"];
    $abstract = $_POST["abstract"];
    $keyword = $_POST["keyword"];
    $types = $_POST["types"];
    $publication_date = $_POST["publication_date"];

    // อัพโหลดข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO research
            (abstract_tittle, 
            author1,
            author2,
            author3,
            abstract,
            keyword,
            types,
            publication_date,
            abstract_pdf,
            abstract_short)
            VALUES('$abstract_tittle',
                   '$author1',
                   '$author2',
                   '$author3',
                   '$abstract',
                   '$keyword',
                   '$types',
                   '$publication_date',
                   '$abstract_pdf',
                   '$abstract_short')";
                            
    $result = mysqli_query($condb, $sql);

    if ($result) {
        // หากบันทึกข้อมูลสำเร็จ
        header("Location: manage_abstract.php");
    } else {
        // หากมีปัญหาในการบันทึกข้อมูล
        echo "ไม่สามารถบันทึกข้อมูลได้...";
    }
} else {
    // หากมีปัญหาในการอัพโหลดไฟล์
    echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์...";
}

?>
