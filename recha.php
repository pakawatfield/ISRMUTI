<?php include("header.php");?>

<?php include("secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->

<?php 
$sql = "SELECT * FROM abstract";
$result = mysqli_query($condb, $sql);
?>
<style>
body {
    font-family: 'Prompt', sans-serif;
    background: #f5f5f5;
    background-position: right bottom;
    background-repeat: no-repeat;
    background-attachment: fixed;


    .shape-triangle {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        border-style: solid;
        border-width: 0 0 calc(150px + 5vw) 100vw;
        border-color: transparent transparent #fff transparent;
    }

    .list-header-cover {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), linear-gradient(91.57deg, #72242B 5.33%, #B94855 93.83%);
        width: 100%;
        margin-top: -126px;
        color: #fff;
        padding-top: 130px;
        padding-left: 12vw;
        padding-right: 12vw;
        letter-spacing: 3px;
        position: relative;
    }
}
</style>


<body>
    <br><br><br><br><br><br><br>
    <section class="text-white">
        <div class="list-header-cover text-theme font-type-bold">
            <div class="txt-70-56">
                <h1>งานวิจัยระดับปริญญาตรี</h1>
            </div>
            <div class="txt-50-36" style="margin-bottom: 20px">
                <div>Undergraduate research</div>
            </div>
            <div style="height: 160px"></div>
            <div class="shape-triangle"></div>
        </div>
    </section>

    <section class="wrapper image-wrapper bg-image bg-full bg-overlay text-white" data-image-src="image/testt.jpg.jpg">
    </section>

    <section id="deanquote">
        <div class="container py-8 py-md-12">
            <!-- First Row -->
            <div class="row gy-6">
                <?php 
                $sql = "SELECT * FROM abstract";
                $result = mysqli_query($condb, $sql);
                while($rows = mysqli_fetch_array($result)){
            ?>
                <div class="col-md-6 col-lg-4">
                    <a href="detail_page.php?id=<?php echo $rows["abstract_id"]; ?>" class="card shadow-lg lift h-100">
                        <div class="card-body p-5 d-flex flex-row">
                            <div>
                                <span class="avatar bg-green text-white w-11 h-11 fs-20 me-4">IS</span>
                            </div>
                            <div>
                                <span
                                    class="badge bg-pale-aqua text-aqua rounded py-1 mb-2">งานวิจัยระดับปริญญาตรี</span>
                                <h4 class="mb-1"><?php echo $rows["abstract_tittle"]; ?></h4>
                                <p class="mb-0 text-body"><?php echo $rows["author"]; ?></p>
                                <?php setlocale(LC_TIME, 'th_TH.utf8'); ?>
                            </div>
                        </div>
                    </a>
                </div>
                <!--/column -->
                <?php 
                }
            ?>
            </div>
            <!-- Second Row -->
            <div class="row gy-6">
                <!-- Add your second row content here -->
            </div>
        </div>
    </section>





</body>

</html>
<?php include("footer.php");?>





<section class="wrapper bg-light">
    <div class="container-card">
        <div class="bg-prlx bg2" data-speed="4" data-type="background" style="background-position: 50% 0px;"></div>
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5"
            data-image-src="image/bg14.png" style="background-image: url('image/bg14.png');">
            <div class="card-body py-14 px-0">
                <div class="container">
                    <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                        <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="900"
                            data-disabled="true">
                            <h1 class="display-2 mb-4 me-xl-5 me-xxl-0" data-cue="slideInDown" data-group="page-title"
                                data-delay="900" data-show="true"
                                style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                สาขาวิชา<span class="text-gradient gradient-1">ระบบสารสารสนเทศ</span> </h1>
                            <p class="lead fs-23 lh-sm mb-7 pe-xxl-15" data-cue="slideInDown" data-group="page-title"
                                data-delay="900" data-show="true"
                                style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
                                Information System , RMUTI
                            </p>
                            <div data-cue="slideInDown" data-group="page-title" data-delay="900" data-show="true"
                                style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;">
                                <a href="https://oapr.rmuti.ac.th/main/admission/"
                                    class="btn btn-lg btn-gradient gradient-1 rounded">สมัครเข้าศึกษาต่อ
                                    DEK67</a>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <img class="img-fluid mb-n18" src="image/1b1b.png" srcset="image/1b1b.png "
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
</section>