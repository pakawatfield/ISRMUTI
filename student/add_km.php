<?php
include("condb.php");

$km_name = $_POST["km_name"];
$km_cover_image = $_POST["km_cover_image"];
$km_detail = $_POST["km_detail"];
$youtube_link = $_POST["youtube_link"];


// File upload logic for PDF
$target_dir_pdf = "../pdf/";
$target_file_pdf = $target_dir_pdf . basename($_FILES["km_pdf"]["name"]);
move_uploaded_file($_FILES["km_pdf"]["tmp_name"], $target_file_pdf);

$sql = "INSERT INTO km
            (km_name, 
            km_detail,
            km_pdf,
            youtube_link)
        VALUES('$km_name',
                '$km_detail',
                '$target_file_pdf',
                '$youtube_link'
                )";
                            
$result = mysqli_query($condb, $sql);

if($result) {
    header("Location: manage_km.php");
} else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>
