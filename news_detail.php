<?php include("header.php"); ?>
<?php include("secure/condb.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวสาร</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming you have an external stylesheet -->
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
    $sql = "SELECT * FROM news 
            LEFT JOIN additional_images ON news.news_id = additional_images.news_id 
            WHERE news.news_id = $ids"; // ใช้ LEFT JOIN เพื่อให้รวมข้อมูลจากตาราง additional_images
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_array($result);
    ?>

    <section class="wrapper bg-soft-pink"
        style="background-image: url('image/faculty.jpg'); background-size: cover; background-position: center;">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h4 class="display-1 mb-3 text-white">ข่าวสาร</h4>
                    <!-- <p class="lead px-xxl-10 text-white"><?php echo $row["news_name"]; ?></p> -->
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="deanquote">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card">
                            <!-- <figure class="card-img-top"><img src="image/news/<?php echo $row["news_img"]; ?>" alt="image/news/<?php echo $row["news_img"]; ?>"></figure> -->
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">

                                            <h2 class="h1 mb-4"><?php echo $row["news_name"]; ?></h2>
                                            <figure class="card-img-top"><img
                                                    src="image/news/<?php echo $row["news_img"]; ?>"
                                                    alt="image/news/<?php echo $row["news_img"]; ?>"></figure>
                                            <br>
                                            <p><?php echo $row["news_detail"]; ?></p>
                                            <p>วันลงข่าว <?php echo $row["news_date"]; ?></p>
                                            <p><?php echo $row["personal_data"]; ?> ข้อมูล/ภาพ</p>
                                            <p><?php echo $row["personal_post"]; ?> เรียบเรียงข่าว</p>

                                            <!-- แสดงรูปภาพเพิ่มเติมที่เกี่ยวข้องกับข่าวนี้ -->
                                            <?php
                                                $query = "SELECT image_file FROM additional_images WHERE news_id = $ids";
                                                $result = mysqli_query($condb, $query);
                                            ?>

                                            <div class="course-gallery-wrap">
                                                <div class="row">
                                                    <?php while ($additional_row = mysqli_fetch_assoc($result)) { ?>
                                                    <div class="col-md-6">
                                                        <img
                                                            src="image/subnews/<?php echo $additional_row["image_file"]; ?>">
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
