<?php
include("condb.php");

$reward_id = $_POST["id"];
$reward_name = $_POST["reward_name"];
$reward_detail = $_POST["reward_detail"];
$reward_date = $_POST["reward_date"];
$reward_time = $_POST["reward_time"];
$reward_img = $_FILES["reward_img"]["name"];

// เปลี่ยนจาก $_POST["tittlereward_id"] เป็น $_POST["tittlereward_name"]
$tittlereward_name = $_POST["tittlereward_name"];

// ค้นหา tittlereward_id จาก tittlereward_name
$sql_tittlereward_id = "SELECT tittlereward_id FROM tittlereward WHERE tittlereward_name = '$tittlereward_name'";
$result_tittlereward_id = mysqli_query($condb, $sql_tittlereward_id);
$row_tittlereward_id = mysqli_fetch_assoc($result_tittlereward_id);
$tittlereward_id = $row_tittlereward_id['tittlereward_id'];

// ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
if(isset($_FILES["reward_img"])) {
    // เปลี่ยนชื่อไฟล์รูปภาพให้ไม่ซ้ำกัน
    $upload_dir = "../image/reward/";
    $upload_file = $upload_dir . basename($_FILES["reward_img"]["name"]);
    $imageFileType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
    $new_img_name = uniqid() . '.' . $imageFileType;
    $target_file = $upload_dir . $new_img_name;

    // อัปโหลดไฟล์รูปภาพ
    if(move_uploaded_file($_FILES["reward_img"]["tmp_name"], $target_file)) {
        $reward_img = $new_img_name;
    } else {
        echo "ไม่สามารถอัปโหลดรูปภาพได้...";
        exit();
    }
}

$sql = "UPDATE 
            reward
            SET
                reward_name = '$reward_name',
                reward_detail = '$reward_detail',
                reward_date = '$reward_date',
                reward_time = '$reward_time',
                reward_img = '$reward_img',
                tittlereward_id = '$tittlereward_id'
            WHERE reward_id =  '$reward_id'
            ";

$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_reward.php");
} else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>

