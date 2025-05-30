<?php include("header.php"); ?>
<?php include("secure/condb.php"); ?>

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
        font-family: 'Prompt', sans-serif;
        background: #f5f5f5;
        background-position: right bottom;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .course-gallery-wrap {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .course-gallery-wrap img {
        width: 100%;
        /* หรือใช้ % หรือ rem กำหนดตามความต้องการ */
        margin-bottom: 1.5rem;
        border: 10px solid white;
        box-shadow: 0px 4px 4px #0008;
    }
    </style>
</head>

<body>
    <br><br><br>
    <?php
    $ids = $_GET['id'];
    $sql = "SELECT * FROM reward
            LEFT JOIN additional_images_reward ON reward.reward_id = additional_images_reward.reward_id 
            WHERE reward.reward_id = $ids"; // ใช้ LEFT JOIN เพื่อให้รวมข้อมูลจากตาราง additional_images
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_array($result);
    ?>

    <section class="wrapper bg-soft-pink"
        style="background-image: url('image/faculty.jpg'); background-size: cover; background-position: center;">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h4 class="display-1 mb-3 text-white">ข่าวสารและทั้งหมด</h4>
                    <!-- <p class="lead px-xxl-10 text-white"><?php echo $row["reward_name"]; ?></p> -->
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    ิ<br>
    <br>
    <br>
    <br>
    <section id="deanquote">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card">
                            <!-- <figure class="card-img-top"><img src="image/reward/<?php echo $row["reward_img"]; ?>" alt="image/news/<?php echo $row["news_img"]; ?>"></figure> -->
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">

                                            <h2 class="h1 mb-4"><?php echo $row["reward_name"]; ?></h2>
                                            <figure class="card-img-top"><img
                                                    src="image/reward/<?php echo $row["reward_img"]; ?>"
                                                    alt="image/reward/<?php echo $row["reward_img"]; ?>"></figure>
                                            <p><?php echo $row["reward_detail"]; ?></p>
                                            <p>วันที่ลงผลงาน <?php echo $row["reward_date"]; ?></p>

                                            <!-- แสดงรูปภาพเพิ่มเติมที่เกี่ยวข้องกับข่าวนี้ -->
                                            <?php
                                                $query = "SELECT image_file FROM additional_images_reward WHERE reward_id = $ids";
                                                $result = mysqli_query($condb, $query);
                                            ?>

                                            <div class="course-gallery-wrap">
                                                <div class="row">
                                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <div class="col-md-6">
                                                        <!-- เปลี่ยนจาก col-md-4 เป็น col-md-6 -->
                                                        <img
                                                            src="image/reward/detail/<?php echo $row["image_file"]; ?>">
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                        </div>
                                        <ul class="list-unstyled tag-list mb-0">
                                            <li><a href="index.php"
                                                    class="btn btn-soft-ash btn-sm rounded-pill mb-0">หน้าแรก</a></li>
                                            <li><a href="news.php"
                                                    class="btn btn-soft-ash btn-sm rounded-pill mb-0">ข่าวสาร</a>
                                            </li>
                                            <li><a href="#"
                                                    class="btn btn-soft-ash btn-sm rounded-pill mb-0">สาขาระบบสารสนเทศ</a>
                                            </li>
                                        </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<?php include("footer.php"); ?>

</html>