<?php

include("condb.php");


$category_name = $_POST["category_name"];


$sql = "INSERT INTO aunqa_category
            (category_name)VALUES('$category_name'
                            )";

$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_aunqa_cat.php");

}else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}

?>