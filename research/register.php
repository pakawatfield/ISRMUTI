<?php
include("../secure/condb.php");

$personal_name = $_POST["personal_name"];
$personal_username = $_POST["personal_username"];
$personal_email = $_POST["personal_email"];
$personal_password = $_POST["personal_password"];
$personal_imgcard = $_FILES["personal_imgcard"]["name"]; // Assuming the input name for the file is "personal_imgcard"
$level_id = $_POST["lavel_id"];

// File upload handling
$image_temp = $_FILES["personal_imgcard"]["tmp_name"];
$image_path = "../image/card/" . basename($personal_imgcard);

// Move the uploaded file to the desired location
if (move_uploaded_file($image_temp, $image_path)) {
    // Check if the username already exists in the database
    $check_query = "SELECT COUNT(*) AS count FROM personal WHERE personal_username = '$personal_username'";
    $check_result = mysqli_query($condb, $check_query);
    $check_data = mysqli_fetch_assoc($check_result);

    if ($check_data['count'] > 0) {
        // Username already exists, return response
        echo 'username_exists';
        exit(); // Make sure no further code execution occurs after the redirection
    } else {
        // Insert data into the database
        $sql = "INSERT INTO personal
                (personal_name, personal_username, personal_email, personal_password, personal_imgcard, lavel_id, is_approved)
                VALUES ('$personal_name', '$personal_username', '$personal_email', '$personal_password', '$personal_imgcard', '$level_id', 0)";
        
        $result = mysqli_query($condb, $sql);
        if ($result) {
            // Registration successful, return response
            echo 'registration_success';
        } else {
            // Registration failed, return response
            echo 'registration_failed';
        }
    }
} else {
    // File upload failed
    echo "ไม่สามารถอัพโหลดไฟล์รูปภาพได้...";
}
?>
