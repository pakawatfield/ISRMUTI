<?php include("header.php");?>

<?php include("secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->

<head>
    <style>
    body {
        font-family: 'Prompt', sans-serif;
        background: #f5f5f5;
        background-position: right bottom;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .font-prompt {
        font-family: 'Prompt';
    }

    .fontfoot {
        font-size: 12px;
    }

    .pb10 {
        padding-bottom: 10px !important;
    }

    .pt20 {
        padding-top: 20px !important;
    }

    .pb80 {
        padding-bottom: 80px !important;
    }

    .pt80 {
        padding-top: 80px !important;
    }

    .pb80 {
        padding-bottom: 80px !important;
    }

    .pt80 {
        padding-top: 80px !important;
    }

    .testimonial .img-fluid {
        width: 300px !important;
        display: block;
        margin: 0 auto;
        border-radius: 50%;
        -webkit-border-radius: 50%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    img {
        vertical-align: middle;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    user agent stylesheet img {
        overflow-clip-margin: content-box;
        overflow: clip;
    }

    .bg-activity {
        background-color: #05153f;
        border-color: #05153f;
        opacity: 0.9;
    }
    </style>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

<body>

    <section class="wrapper">
        <?php
    $sql = "SELECT * FROM tbl_banner";
    $result = mysqli_query($condb, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="container-card">
            <div class="bg-prlx bg2" data-speed="4" data-type="background" style="background-position: 100% 0px;"></div>
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-dark-500 mt-2 mb-5"
                data-image-src="image/banner/<?php echo $row['image']; ?>"
                style="background-image: url('image/banner/<?php echo $row['image']; ?>');">
                <div class="card-body py-14 px-0">
                    <div class="container">
                        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="900"
                                data-disabled="true">
                                <h1 class="display-2 mb-4 me-xl-5 me-xxl-0 text-white" data-cue="slideInDown"
                                    data-group="page-title" data-delay="900" data-show="true"
                                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                    สาขาวิชา<span class="text-gradient gradient-1">ระบบสารสารสนเทศ</span> </h1>
                                <p class="lead fs-23 lh-sm mb-7 pe-xxl-15 text-white" data-cue="slideInDown"
                                    data-group="page-title" data-delay="900" data-show="true"
                                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
                                    Information System , RMUTI
                                </p>
                                <div data-cue="slideInDown" data-group="page-title" data-delay="900" data-show="true"
                                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;">
                                    <a href="https://oapr.rmuti.ac.th/main/direct2567/"
                                        class="btn btn-lg btn-gradient gradient-1 rounded">สมัครเข้าศึกษาต่อ
                                        DEK67</a>
                                </div>
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <img class="img-fluid mb-n18" src="image/bannor3.png" srcset="image/bannor3.png "
                                    data-cue="fadeIn" data-delay="300" alt="" data-show="true"
                                    style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                            </div>
                            <!--/column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container-card -->
        <?php
        } // end of while loop
    } // end of if condition
    ?>
    </section>

    <section id="content">
        <div class="bg-activity pt80 pb80">
            <div class="container">

                <div>
                    <?php 
        $sql = "SELECT * FROM teachers";
        $result = mysqli_query($condb, $sql);
        $count = 1;
        while($row = mysqli_fetch_array($result)){
    ?>
                    <div class="item">
                        <div class="testimonial testimonial-dark">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="row dean_q">
                                        <div class="col-lg-3 col-md-3 pt20 pb20">
                                            <img src="image/tab/<?=$row["image_name"] ?>" alt=""
                                                class="img-fluid circle">
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <p class="lead font-prompt text-quote text-white" style="margin-top: 2rem;">
                                                <?=$row["description"]; ?>
                                            </p>
                                            <h5 class="font-prompt" style="padding-bottom:40px; color:white;">
                                                <?=$row["teacher_name"]; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-3 ">
                                    <div class="row">
                                        <div class="col-lg-12  align-items-center">
                                            <div class="row align-items-center" style="padding-top:10px; ">
                                                <div class="col-lg-6 col-md-6 col-sm-12" style="padding:1px;">
                                                    <iframe width="345" height="215"
                                                        src="https://www.youtube.com/embed/rrVIriai1Sc?si=Ci4lHgocPrgyfboO"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                    <div class="font-prompt text-white font400" align="center"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <br>
    <!-- <section id="deanquote">
        <div class="bg-activity1 pt60 pb60">
            <div class="container py-8 py-md-10">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
                        <h2 class="display-4 mb-3 text-center text-pink">หลักสูตรของเรา</h2>
                        <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">สาขาวิชาระบบสารสนเทศมีด้วยกัน
                            2
                            หลักสูตร</p>
                    </div>
                </div>
                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                        <?php
                        $sql = "SELECT * FROM curlavel ";
                        $result = mysqli_query($condb, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="project item col-md-6 col-xl-4 product">
                            <figure class="lift rounded mb-6">
                                <a href="curlavel.php?curlavel_id=<?php echo $row['curlavel_id']; ?>">
                                    <img src="image/curlavel/<?=$row["curlavel_img"]; ?>"
                                        alt="<?=$row["curlavel_name"]; ?>" />
                                </a>
                            </figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <div class="post-category text-line mb-3 text-pink"><?=$row["curlavel_name"]; ?>
                                    </div>
                                    <h2 class="post-title h3"><?=$row["curlavel_name"]; ?></h2>
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
        </div>
    </section> -->


    <section id="deanquote">
        <div class="bg-activity1 pt60 pb60">
            <div class="container py-8 py-md-10">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
                        <h2 class="display-4 mb-3 text-center text-pink">หลักสูตรของเรา</h2>
                        <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">
                            สาขาวิชาระบบสารสนเทศมีด้วยกัน
                            2 หลักสูตร</p>
                    </div>
                </div>
                <div class="row gx-md-8 gx-xl-10 justify-content-center">
                    <?php
                $sql = "SELECT * FROM curlavel ";
                $result = mysqli_query($condb, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-6 mb-4">
                        <figure class="lift rounded mb-6">
                            <a href="curlavel.php?curlavel_id=<?php echo $row['curlavel_id']; ?>">
                                <img src="image/curlavel/<?=$row["curlavel_img"]; ?>"
                                    alt="<?=$row["curlavel_name"]; ?>" />
                            </a>
                        </figure>
                        <!--/.card -->
                    </div>
                    <!-- /column -->
                    <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>



    <section id="deanquote">
        <div class="bg-activity1 pt60 pb60">
            <div class="container py-8 py-md-10">
                <div class="row align-items-center mb-10">
                    <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                        <h2 class="display-4 mb-0">ข่าวสารและบทความ</h2>
                    </div>
                    <!--/column -->
                    <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                        <a href="news.php" class="btn btn-soft-fuchsia rounded-pill">อ่านข่าวเพิ่มเติม</a>
                    </div>
                    <!--/column -->
                </div>
                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                        <?php
                $sql = "SELECT a.*, b.titlenews_name 
                        FROM news AS a 
                        LEFT JOIN titlenews AS b 
                        ON a.titlenews_id = b.titlenews_id 
                        ORDER BY a.news_date DESC 
                        LIMIT 3";
                $result = mysqli_query($condb, $sql);
                
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="project item col-md-6 col-xl-4 product">
                            <figure class="lift rounded mb-6">
                                <a href="news_detail.php?id=<?php echo $row['news_id']; ?>">
                                    <img src="image/news/<?php echo $row["news_img"]; ?>"
                                        alt="<?php echo $row["titlenews_name"]; ?>" />
                                </a>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line" style="color: pink;">
                                    <a href="#"><?php echo $row["titlenews_name"]; ?></a>
                                </div>
                                <!-- /.post-category -->
                                <h5 class="post-title h6 mt-1 mb-3">
                                    <a class="link-dark" href="news_detail.php?id=<?php echo $row["news_id"]; ?>">
                                        <?php echo $row["news_name"]; ?>
                                    </a>
                                </h5>
                            </div>

                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta mb-0">
                                    <li class="post-date">
                                        <i class="fa-regular fa-clock"></i>
                                        <span><?php echo $row["news_date"]; ?></span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
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
        </div>
    </section>

    <!-- Scroll top -->

</body>

</html>
<a id="button" class="show"></a>
<?php include("footer.php");?>