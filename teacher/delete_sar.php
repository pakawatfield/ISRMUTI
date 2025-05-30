<?php

include("condb.php");


$SAR_ID = $_GET["SAR_ID"];


$sql = "DELETE FROM sar WHERE SAR_ID = '$SAR_ID'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_sar.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>