<!-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../view/css/style.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <h1 class="alert alert-danger">QUẢN TRỊ WEBSITE</h1>
     <div class="menu-top">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">
            <img
              src="../view/images/admin.jpg"
              alt=""
              width="40px;"
              class="rounded-pill"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mynavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link" href="javascript:void(0)"
                  >Trang chủ</a
                >
              </li>
              <li class="nav-item">
                <a href="index.php?act=adddm" class="nav-link" href="javascript:void(0)"
                  >Danh mục</a
                >
              </li>

              <li class="nav-item">
                <a href="index.php?act=adddm_tt" class="nav-link" href="javascript:void(0)"
                  >Danh mục tin tức</a
                >
              </li>
              <li class="nav-item">
                <a href="index.php?act=addsp" class="nav-link" href="javascript:void(0)"
                  >Sản phẩm</a
                >
              </li>
              <li class="nav-item">
                <a href="index.php?act=dskh" class="nav-link" href="javascript:void(0)"
                  >Khách hàng</a
                >
              </li>
              <li class="nav-item">
                <a href="index.php?act=dsbl" class="nav-link" href="javascript:void(0)"
                  >Bình luận</a
                >
              </li>
              <li class="nav-item">
                <a href="index.php?act=dsdh" class="nav-link" href="javascript:void(0)"
                  >Đơn hàng</a
                >
              </li>
              <li class="nav-item">
                <a href="index.php?act=thongke" class="nav-link" href="javascript:void(0)"
                  >Thống kê</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header> -->
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    
    <link rel="stylesheet" href="../view/css/style.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.tiny.cloud/1/whakblojpzki7rtp4fo9bebfzcomvzte1bzokapk7bg2m6cf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#noidung',
        plugins: 'preview image',
      });
    </script>
  </head>
  <body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item menu-open">
            
            
            <ul class="nav nav-treeview">
                           <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <p>Trang chủ</p>
                </a>
              </li>
            </ul>
          </li>  
            </ul>
          </li>
          <li class="nav-item">
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listsp_d" class="nav-link">                  
                  <p>Duyệt bài đăng</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="index.php?act=dskh" class="nav-link">                  
                  <p>Quản lí người dùng</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?act=listsp" class="nav-link">
                  <p>Quản lí bài đăng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=listdm" class="nav-link">                 
                  <p>Quản lí danh mục bài đăng</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="index.php?act=listtt" class="nav-link">                  
                  <p>Quản lí tin tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?act=listtt_d" class="nav-link">                  
                  <p>Duyệt tin tức</p>
                </a>
              </li>



              <li class="nav-item">
                <a href="index.php?act=listdm_tt" class="nav-link">                 
                  <p>Quản lí danh mục tin tức</p>
                </a>
              </li>

              

              <li class="nav-item">
                <a href="index.php?act=dsnv" class="nav-link">                 
                  <p>Quản lí nhân viên</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?act=listlh" class="nav-link">                  
                  <p>Quản lí Tin nhắn</p>
                </a>
              </li>
            </ul> 
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- jQuery -->