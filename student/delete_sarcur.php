<?php

include("condb.php");


$SARCUR_ID = $_GET["SARCUR_ID"];


$sql = "DELETE FROM sar_curriculum WHERE SARCUR_ID = '$SARCUR_ID'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_sarcur.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>