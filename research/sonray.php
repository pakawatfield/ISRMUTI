<!-- Header. -->
<?php include("header.php"); ?>
<!-- Left Menu. -->
<?php include("left-menu.php"); ?>
<!-- Content Wrapper. Contains page content -->
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>หน้าแรก</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">ผู้พัฒนาระบบ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <!-- <div class="callout callout-warning"
            style="background:#001f3f linear-gradient(180deg,#26415c,#001f3f) repeat-x!important ;">
            <p style="color: #ffffff;">ผู้พัฒนาระบบ</p>
        </div> -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header"  style="background:#001f3f linear-gradient(180deg,#26415c,#001f3f) repeat-x!important ;">
                                <h4 class="card-title">ผู้พัฒนาระบบ</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1"
                                            data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                            <img src="image/io.png"
                                                class="img-fluid mb-2" alt="white sample" />
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/000000.png?text=2"
                                            data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                                            <img src="image/io.png"
                                                class="img-fluid mb-2" alt="black sample" />
                                        </a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3"
                                            data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                                            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3"
                                                class="img-fluid mb-2" alt="red sample" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        
        <!-- /.card -->
       
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Footer. -->
<?php include("footer.php"); ?>

<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>