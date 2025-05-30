<?php

include("condb.php");


$academic_id = $_GET["academic_id"];
// echo $id;die;

$sql = "DELETE FROM academic WHERE academic_id = '$academic_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_academic.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>