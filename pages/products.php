<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Sản phẩm
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <!-- Nguyên đoạn này -->
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://images.unsplash.com/photo-1514907283155-ea5f4094c70c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="../assets/img/logo-ck.png" class=" h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Quản lý Forish</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" style="height: 100vh; !important" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Tổng quan</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tổng quan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/billing.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Hoá đơn</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/products_wait.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-copy text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Đơn hàng</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/custommer.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-tie text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Khách hàng</span>
          </a>
        </li>

        <?php
          if($_SESSION["role"] == 'admin')
            {
              echo "<li class=\"nav-item mt-3\">\n"; 
              echo " <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Quản lý nhân viên</h6>\n"; 
              echo "</li>\n"; echo "<li class=\"nav-item\">\n"; 
              echo " <a class=\"nav-link \" href=\"../pages/staff.php\">\n"; 
              echo " <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">\n"; 
              echo " <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>\n"; 
              echo " </div>\n"; 
              echo " <span class=\"nav-link-text ms-1\">Danh sách nhân viên</span>\n"; 
              echo " </a>\n"; 
              echo "</li>\n"; 
              echo "<li class=\"nav-item\">\n"; 
              echo " <a class=\"nav-link \" href=\"../pages/staff_add.php\">\n"; 
              echo " <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">\n"; 
              echo " <i class=\"fas fa-user-plus text-primary text-sm opacity-10\"></i>\n"; 
              echo " </div>\n"; echo " <span class=\"nav-link-text ms-1\">Thêm nhân viên</span>\n"; 
              echo " </a>\n"; 
              echo "</li>";
              echo '<li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Quản lý đối tác</h6>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="../pages/pdsource.php">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-building text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Nguồn hàng</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="../pages/transporter.php">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-truck text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Đơn vị vận chuyển</span>
                    </a>
                    </li>';
            }
        ?>


        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Quản lý sản phẩm</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/trans_bill.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-truck-loading text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Đơn vận chuyển</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/products.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-fish text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sản phẩm</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="../pages/products_add_form.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-cart-plus text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Nhập sản phẩm</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/rating.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-star-half-alt text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Đánh giá</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Quản lý tài khoản</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/profile.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-tag text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Thông tin tài khoản</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Sản phẩm</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Sản phẩm</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <!-- <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..."> -->
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center mb-4 me-4">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <img src="../assets/img/staff_img/<?php echo $_SESSION["avt"]; ?>" class="rounded-circle avatar avatar-xl" alt='user'>
              </div>
            </li>
            <li class="nav-item d-flex align-items-center mt-sm-1 ms-3">
             <nav class=" mt-sm-1" aria-label="breadcrumb">   
                <h7 class="text-white text mb-0">Xin chào,</h7>
                <h6 class="font-weight-bolder text-white mt-n1"><?php echo $_SESSION["name"]; ?></h6>      
                <a href="log_out.php" class="btn btn-outline-light text-white font-weight-bold px-2 mt-n1 py-1">
                  <span class="d-sm-inline d-none me-sm-1">Đăng xuất</span>
                  <i class="fas fa-sign-out-alt "></i>
                </a>
              </nav>
            </li> 
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="row">
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shop_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      ?> 
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="row px-2">
              <form action="#" method="get">
                <div class="px-3 col-12 pb-2 d-flex align-items-center">
                  <div class="col-1 mt-2 font-weight-bold d-flex align-items-center">
                    Lọc danh sách: 
                  </div>
                  <div class="px-2 mt-n3 col-2 font-weight-bold">
                    <br>
                    <select class="form-control form-control-md" name="source" id="source">
                      <option value="" selected disabled hidden>- Nguồn hàng -</option>
                      <?php
                        $sql = "SELECT * FROM nguon_hang";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          $result = $conn->query($sql);
                          $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                          foreach ($result_all as $row) {
                            echo "<option value=" .$row["NH_ID"]. ">".$row["NH_TENNGUON"]. "</option>";
                          }                          
                        } else {
                          echo "<option value=''>Không có dữ liệu</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="px-2 mt-2 col-1 font-weight-bold">
                    <button type="submit" class="btn btn-primary text-white font-weight-bold text-md ms-0 mt-3">
                      Lọc
                    </button>
                  </div>
                  <div class="px-2 mt-n3 col-2"></div>
                  <div class="px-2 mt-n3 col-1 font-weight-bold"></div>
                  <div class="col-5 mt-2 d-flex align-items-center justify-content-end">
                    <div class="input-group w-75 me-3">
                      <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                      <input type="text" name="timkiem" class="form-control" placeholder="Nhập tên sản phẩm cần tìm..">
                    </div>
                    <button type="submit" class="btn btn-primary text-white font-weight-bold text-md ms-0 mt-3">
                      Tìm
                    </button>
                  </div>
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <a href="products_add_form.php" class="btn btn-link text-white mt-n3">+ Thêm sản phẩm</a>
      </div>
        <!-- Nguyên đống này la mot danh muc -->
        <?php
          $sql = "SELECT * FROM loai_sp";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $result = $conn->query($sql);
            $result_all = $result -> fetch_all(MYSQLI_ASSOC);
            foreach ($result_all as $rowlsp) {
              $lspid = $rowlsp["LSP_ID"];
              $sql = "SELECT * FROM san_pham where LSP_ID = {$lspid}";
                if(isset($_GET["timkiem"])){
                  $search = $_GET["timkiem"];
                  if ($search != null) {
                    $sql = "SELECT * FROM san_pham where LSP_ID = {$lspid} and SP_TEN LIKE '%".$search."%'";
                  }
                }
              ?>
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header pb-2">
                      <?php
                        echo  "<h6>".$rowlsp["LSP_TEN"]."</h6>";
                      ?>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                        <!-- table 5 cot -->
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sản phẩm</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Đơn vị tính</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày nhập</th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- 1 hang -->
                            <?php
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                $result = $conn->query($sql);
                                $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                foreach ($result_all as $row) {

                                  $soluong = $row["SP_SOLUONG"];
                                  $lsp = $rowlsp["LSP_TEN"];
                                  $mlsp = $rowlsp["LSP_ID"];

                                  $sql_nhap = "select * from chitiet_nhap where sp_id = {$row["SP_ID"]}";
                                  $rs = $conn->query($sql_nhap);
                                  $row1 = mysqli_fetch_assoc($rs);
                                  $nhid = $row1["NH_ID"];
                                  $ngaynhap = $row1["NH_NGAYNHAP"];

                                  $sql_nguon = "select NH_TENNGUON, NH_ID from nguon_hang where NH_ID = $nhid";
                                  $rs2 = $conn->query($sql_nguon);
                                  $row3 = mysqli_fetch_assoc($rs2);
                                  $tennh = $row3["NH_TENNGUON"];
                                  $manh = $row3["NH_ID"];

                                  ?>
                                  <tr class="height-100">
                                    <td class="w-30" >
                                      <div class="d-flex px-2 py-1">
                                          <!-- hinh anh san pham -->
                                        <div>
                                          <?php
                                            if($row["SP_HINHANH"]==null){
                                              $file = "default.jpg";
                                            } else {
                                              $file = $row["SP_HINHANH"];
                                            } 
                                            $avatar_url = "../assets/img/product_img/" . $file;
                                            echo "<img src='{$avatar_url}' class='avatar avatar-xl me-3' alt='user1'>";
                                          ?> 
                                          
                                        </div>
                                        <!-- ten san pham -->
                                        <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-md"><?php echo $row["SP_TEN"]; ?></h6>
                                          <p class='text-xs text-secondary mb-0'><?php echo $tennh; ?></p>
                                        </div>
                                      </div>
                                    </td>
                                    <!-- gia sp -->
                                    <td>
                                      <p class="text-s font-weight-bold mb-0"><?php echo number_format($row["SP_GIA"], 0, '.') ; ?> VNĐ</p>
                                    </td>
                                    <!-- soluong sp -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_SOLUONG"]; ?></p>
                                    </td>
                                    <!-- dvt -->
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0"><?php echo $row["SP_DVT"]; ?></p>
                                    </td>
                                    <!-- ngay them -->
                                    <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0"><?php echo $ngaynhap; ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                      <div class="mt-3 d-flex col-sm-12">
                                            
                                        <div class="me-n4 align-middle col-4">
                                          <form method="get" action="">
                                            <input type="hidden" name="pdid_add" value="<?php echo $row["SP_ID"]; ?>">
                                            <button onclick="showOverlay(), this.form.submit()" class="btn btn-link text-success text-secondary font-weight-bold text-sm">
                                              Nhập thêm
                                            </button>
                                          </form>
                                        </div>
                                        <div class="me-n4 align-middle col-4">
                                          <form method="post" action="edit_product.php">
                                              <input type="hidden" name="pdid" value="<?php echo $row["SP_ID"]; ?>">
                                              <input type="hidden" name="anhsp" value="<?php echo $file; ?>">
                                              <input type="hidden" name="lsp" value="<?php echo $lsp; ?>">
                                              <input type="hidden" name="mlsp" value="<?php echo $mlsp; ?>">
                                              <input type="hidden" name="tensp" value="<?php echo $row["SP_TEN"]; ?>">
                                              <input type="hidden" name="giasp" value="<?php echo $row["SP_GIA"]; ?>">
                                              <input type="hidden" name="motasp" value="<?php echo $row["SP_MOTA"]; ?>">
                                              <input type="hidden" name="nguonsp" value="<?php echo $tennh; ?>">
                                              <input type="hidden" name="manguonsp" value="<?php echo $manh; ?>">
                                              <input type="hidden" name="dvtsp" value="<?php echo $row["SP_DVT"]; ?>">
                                              <input type="hidden" name="slsp" value="<?php echo $row["SP_SOLUONG"] ?>">
                                              <button onclick="this.form.submit()" class="btn btn-link text-primary font-weight-bold text-sm">
                                                Sửa
                                              </button>
                                            </form>
                                        </div>
                                        <div class=" align-middle col-4">
                                          <form method="post" action="del_product.php">
                                              <input type="hidden" name="pdid" value="<?php echo $row["SP_ID"]; ?>">
                                              <button onclick="this.form.submit()" class="btn btn-link text-warning text-secondary font-weight-bold text-sm">
                                                Xoá
                                              </button>
                                            </form>
                                        </div>

                                      </div>
                                    </td>
                                  </tr>
                                  <?php
                                }
                              }
                            ?>
                            
                            <!-- het 1 hang -->
                          </tbody>
                        </table>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }                          
          } else {
            echo "<option value=''>Không có dữ liệu</option>";
          }
        ?>

      </div>
      <div class="overlay" id="overlay">
        <div class="my-box">
          <?php
            if(isset($_GET["pdid_add"])){
              $idsp = $_GET["pdid_add"];
              echo $idsp;
            }
          ?>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  <!-- </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <!-- <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a> -->
        <!-- Navbar Fixed -->
        <!-- <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!--   Core JS Files   -->
  <style>
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: none;
    }

    .my-box {
      width: 40%;
      height: 30%;
      background-color: #fff;
      border-radius: 10px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

  </style>
  <script>
    function showOverlay() {
      document.getElementById("overlay").style.display = "block";
    } 
    const overlay = document.getElementById("overlay");
    overlay.addEventListener("click", function(event) {
      if (event.target === overlay) {
        overlay.style.display = "none";
      }
    });

  </script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <?php 
    $conn->close();
  ?>
</body>

</html>