<?php
// เรียกใช้ไฟล์เชื่อมต่อกับฐานข้อมูล
include("condb.php");

// รับค่าจากฟอร์ม
$reward_name = $_POST["reward_name"];
$reward_detail = $_POST["reward_detail"];
$reward_date = $_POST["reward_date"];
$reward_time = $_POST["reward_time"];
$tittlereward_id = $_POST["tittlereward_id"];

// ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
if(isset($_FILES['reward_img'])) {
    // กำหนดตัวแปรเก็บข้อมูลเกี่ยวกับไฟล์รูปภาพ
    $reward_img = $_FILES['reward_img']['name'];
    $target_directory = "../image/reward/";
    $target_file = $target_directory . basename($reward_img);
    
    // ย้ายไฟล์รูปภาพไปยังโฟลเดอร์เป้าหมาย
    if(move_uploaded_file($_FILES['reward_img']['tmp_name'], $target_file)) {
        // สร้างคำสั่ง SQL เพื่อเพิ่มข้อมูลใหม่ลงในตาราง reward
        $sql = "INSERT INTO reward (reward_name, reward_img, reward_detail, reward_date, reward_time, tittlereward_id) 
                VALUES ('$reward_name', '$reward_img', '$reward_detail', '$reward_date', '$reward_time', '$tittlereward_id')";
                
        // ทำการ query คำสั่ง SQL
        $result = mysqli_query($condb, $sql);
        
        if($result) {
            // หาก query สำเร็จให้ redirect ไปยังหน้า manage_reward.php
            header("Location: manage_reward.php");
            exit(); // จบการทำงานของสคริปต์
        } else {
            echo "ไม่สามารถบันทึกข้อมูลได้...";
        }
    } else {
        echo "ไม่สามารถอัปโหลดรูปภาพได้...";
    }
} else {
    echo "ไม่พบข้อมูลรูปภาพ...";
}
?>
