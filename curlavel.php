<?php 
include("header.php");
include("secure/condb.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming you have an external stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background: #f5f5f5;
            background-position: right bottom;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <br>
    <section class="wrapper bg-soft-pink"
        style="background-image: url('image/faculty.jpg'); background-size: cover; background-position: center;">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h4 class="display-1 mb-3 text-white">หลักสูตรของเรา</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="deanquote">
        <div class="bg-activity1 pt60 pb60">
            <div class="container py-8 py-md-10">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
                        <h2 class="display-4 mb-3 text-center text-pink">หลักสูตรของเรา</h2>
                        <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">
                            หลักสูตรที่มีในสาขาวิชาระบบสารสนเทศของเรา</p>
                    </div>
                </div>
                <div class="row gx-md-8 gx-xl-10 justify-content-center">
                    <?php
                    // Assuming $curlavel_id contains the ID sent from the previous section
                    $curlavel_id = $_GET['curlavel_id'];
                    // Modified SQL query to select curriculum based on $curlavel_id
                    $sql = "SELECT a.*, b.curlavel_name 
                            FROM curriculum AS a 
                            LEFT JOIN curlavel AS b 
                            ON a.curlavel_id = b.curlavel_id
                            WHERE b.curlavel_id = $curlavel_id";
                    $result = mysqli_query($condb, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-6 mb-4">
                        <figure class="lift rounded mb-6">
                            <a href="curriculum.php?id=<?php echo $row['curriculum_id']; ?>">
                                <img src="image/curriculum/<?= $row["curriculum_img"]; ?>"
                                    alt="<?= $row["curlavel_name"]; ?>" />
                            </a>
                        </figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-3 text-pink"><?=$row["curlavel_name"]; ?>
                                </div>
                                <h2 class="post-title h3"><?=$row["curriculum_name"]; ?></h2>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
</body>

</html> 
