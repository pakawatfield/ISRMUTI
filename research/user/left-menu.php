<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">

<style>
body {

    font-family: 'Sarabun', sans-serif;

}
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#AF2655;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="../../image/logotest2.png" alt="AdminLTE Logo" width="100%" height="100%" style="width: 100%; height: 100%;">
        <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../build/dist/img/o.png" class="img-circle elevation-2" alt="User Image" height="100%">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION["personal_name"]; ?></a>
                <a href="#" class="d-block"><?php echo $_SESSION["lavel_name"]; ?>
                </a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library --> 
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon 	fas fa-edit"></i>
                    <!-- <i class="nav-icon fa fa-users"></i> -->
                        <p>
                            สืบค้นงานวิจัย
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="rechacheck.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>เลือกงานวิจัย</p>
                            </a>
                        </li>
                    </ul>
                    <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                        <p>
                            จัดการข้อมูลงานวิจัย
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="frm_add_abstract.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>เพิ่มข้อมูลงานวิจัย</p>
                            </a>
                        </li>
                    </ul> -->
                    <!-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="manage_abstract.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>จัดการข้อมูลงานวิจัย</p>
                            </a>
                        </li>
                    </ul> -->
                <!-- <li class="nav-item">
                    <a href="personal.php" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            จัดการข้อมูลส่วนตัว
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>