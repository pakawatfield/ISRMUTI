<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สาขาวิชาระบบสารสนเทศ</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="test/style.css">
    <link rel="stylesheet" href="test/plugins.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../build/dist/css/adminlte.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<style>
body {
    font-family: 'Prompt', sans-serif;
    background-image: 'url='
}
/* Default styles */
body {
    font-family: 'Prompt', sans-serif;
    background-image: 'url=';
}
/* Media query for tablets and larger devices */
@media (min-width: 768px) {
    /* Adjustments for larger screens */
}
/* Media query for desktops and larger devices */
@media (min-width: 992px) {
    /* Adjustments for desktop screens */
}
/* Media query for extra large devices */
@media (min-width: 1200px) {
    /* Adjustments for extra large screens */
}
</style>
<nav class="navbar navbar-expand-lg center-nav transparent navbar-light navbar-clone fixed navbar-stick">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="index.php">
                <img src="image/logofu.png" srcset="image/logofu.png" alt="" width="50%" height="50%"
                    style="width: 90%; height: 90%;">
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown">เกี่ยวกับสาขา</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="about.php">ประวัติสาขา</a></li>
                            <li><a class="dropdown-item" href="curriculum_cours.php">หลักสูตรของเรา</a></li>
                            <li><a class="dropdown-item"
                                    href="https://lookerstudio.google.com/u/0/reporting/a28c39bf-e8a2-49c3-88f3-56d808ae4d8c/page/p_pcquwonsed?s=nO23rNiOimg">สถิติ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown">ข่าวสารและบริการวิชาการ</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="news.php">ข่าวสาร</a></li>
                            <li><a class="dropdown-item" href="academicservices.php">บริการวิชาการ</a></li>
                            <li class="dropdown dropdown-submenu dropend">
                                <a class="dropdown-item" data-bs-toggle="dropdown">
                                    ผลงานนักศึกษา
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="reward.php">ผลงานนักศึกษา</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                            href="reward_subject.php">ผลงานนักศึกษาในกระบวนวิชา</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown">การประกันคุณภาพฯ</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="aunqa.php">AUN-QA</a>
                            </li>
                            <li><a class="dropdown-item" href="sar.php">SAR</a></li>
                            <li><a class="dropdown-item" href="km.php">การจัดการความรู้ (KM)</a></li>
                            <li><a class="dropdown-item" href="report.php">รายงานผลการดำเนินงาน</a></li>
                        </ul>
                    </li>
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="teacher.php" data-bs-toggle="dropdown">บุคลากร</a>
                        <!-- <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="../../blog.html">Blog without
                                    Sidebar</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="../../blog2.html">Blog with
                                    Sidebar</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="../../blog3.html">Blog with Left
                                    Sidebar</a></li>
                            <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle"
                                    href="#" data-bs-toggle="dropdown">Blog Posts</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="../../blog-post.html">Post
                                            without Sidebar</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="../../blog-post2.html">Post
                                            with Sidebar</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="../../blog-post3.html">Post
                                            with Left Sidebar</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li class="nav-item dropdown dropdown-mega">
                        <a class="nav-link " href="research/index.php"
                            data-bs-toggle="dropdown">งานวิจัยระดับปริญญาตรี</a>
                        <!--/.dropdown-menu -->
                </ul>
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                    <div>
                        <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                        <br> 00 (123) 456 78 90 <br>
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                </div>
                <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item d-none d-md-block">
                    <a href="adminis/index.php" class="btn btn-sm btn-gradient gradient-1 rounded-pill">เข้าสู่ระบบ</a>
                </li>
                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
</head>

</html>
