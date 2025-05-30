<?php

include("condb.php");


$id = $_GET["id"];
// echo $id;die;

$sql = "DELETE FROM aunqa WHERE id = '$id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_aunqa.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>