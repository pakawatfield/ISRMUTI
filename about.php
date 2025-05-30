<?php include("header.php");?>

<?php include("secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->

<?php
$sql = "SELECT * FROM tbl_history";
$result = mysqli_query($condb, $sql);
$rows = mysqli_fetch_assoc($result);
?>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">


    <style>
    body {
        font-family: 'Prompt', sans-serif;
        background-image: 'url='
    }

    /* #content {
        width: 100%;
     padding: 3% 5% 5% 5%;
        clear: none;
        float: left;
        height: auto;
    } */

    only screen and (min-width: 768px) .panel-contentheader {
        padding: 3% 3% 0% 3%;
    }

    .panel-contentheader {
        width: 100%;
        height: auto;
        padding: 4%;
        margin: 0;
        background-color: rgba(255, 255, 255, 1.00);
    }

    .panel-contentdes {
        position: relative;
        font-variant: normal;
        width: 100%;
        height: auto;
        clear: none;
        padding: 4%;
        background-color: rgba(255, 255, 255, 1.00);

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
                    <h4 class="display-1 mb-3 text-white">เกี่ยวกับสาขา</h4>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="content" class="container-fluid p-5">
            <!-- <div class="container-fluid p-5"> -->

            <div class="panel-contentdes">
                <font color="#000000">
                    <p><?php echo $rows["history_detail"]; ?></p>
                    <p style="text-align:start">&nbsp;</p>
                </font>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>





</body>

</html>
<?php include("footer.php");?>