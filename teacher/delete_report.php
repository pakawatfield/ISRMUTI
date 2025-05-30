<?php

include("condb.php");


$report_id = $_GET["report_id"];

$sql = "DELETE FROM reports WHERE report_id = '$report_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_report.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>