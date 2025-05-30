<?php

include("condb.php");

$aunqa_category_id = $_POST["id"];
$category_name = $_POST["category_name"];


$sql = "UPDATE 
            aunqa_category
            SET
            category_name = '$category_name'
            WHERE aunqa_category_id =  '$aunqa_category_id'
            ";
$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_aunqa_cat.php");
}else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>