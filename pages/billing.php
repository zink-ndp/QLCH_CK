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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	</script>
  <style>
    #myTable tbody tr:nth-child(odd) {
      background-color: #ffffff;
    }
    tr {
      height: 30px;
    }
  </style>
  <title>
    Hoá đơn
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
    <span class="mask bg-primary opacity-5"></span>
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
          <a class="nav-link active" href="../pages/billing.php">
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
          <a class="nav-link " href="../pages/products.php">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Hoá đơn</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Hoá đơn</h6>
        </nav>
        <!-- Đoạn này -->
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-md bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fas fa-money-bill-wave opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-1 text-center">
                  <?php
                    $sql = "select sum(HD_TONGTIEN) as tongtien from hoa_don where TT_ID = 3 and PTTT_ID = 1";
                    $result = $conn->query($sql);
                    $row = mysqli_fetch_assoc($result);
                    $tong_tm = number_format($row["tongtien"], 0, '.');
                  ?>
                  <h6 class="text-center mb-0">Tiền mặt</h6>                  
                  <hr class="horizontal dark my-2">
                  <h5 class="mb-0">+ <?php echo $tong_tm ?>đ</h5>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-md bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fas fa-landmark opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-1 text-center">
                <?php
                    $sql = "select sum(HD_TONGTIEN) as tongtien from hoa_don where TT_ID = 3 and PTTT_ID = 2";
                    $result = $conn->query($sql);
                    $row = mysqli_fetch_assoc($result);
                    $tong_ck = number_format($row["tongtien"], 0, '.');
                  ?>
                  <h6 class="text-center mb-0">Chuyển khoản ngân hàng</h6>                  
                  <hr class="horizontal dark my-2">
                  <h5 class="mb-0">+ <?php echo $tong_ck ?>đ</h5>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-md bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fab fa-cc-visa opacity-10"></i>
                  </div>
                </div>
                <div class="card-body pt-0 p-1 text-center">
                <?php
                    $sql = "select sum(HD_TONGTIEN) as tongtien from hoa_don where TT_ID = 3 and PTTT_ID = 3";
                    $result = $conn->query($sql);
                    $row = mysqli_fetch_assoc($result);
                    $tong_vm = number_format($row["tongtien"], 0, '.');
                  ?>
                  <h6 class="text-center mb-0">Visa/Mastercard</h6>                  
                  <hr class="horizontal dark my-2">
                  <h5 class="mb-0">+ <?php echo $tong_vm ?>đ</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4 ">
            <div class="col-lg-12">
              <div class="card h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Danh sách hoá đơn</h6>
                    </div>
                    <div class="col-6 text-end">
                      <?php
                        $sql = "select * from hoa_don where TT_ID = 3;";
                      ?>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3 pb-0">
                  <div class="table-responsive p-0">
                        <!-- table 5 cot -->
                        <table id="myTable" class="display" class="table align-items-center mb-0">
                          <thead>
                            <tr class="col-12">
                              <th class="col-1 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã hoá đơn</th>
                              <th class="col-2 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ngày hoàn thành</th>
                              <th class="col-1 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số lượng SP</th>
                              <th class="col-3 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PT Thanh toán</th>
                              <th class="col-3 text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tổng tiền</th>
                              <th class="col-2 text-secondary opacity-7"></th>
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

                                  ?>
                                  <tr>
                                    <td class="align-middle text-center" >
                                      <!-- ma hd -->
                                      <?php echo $row["HD_ID"] ?>
                                    </td>
                                    <td class="align-middle text-center">
                                      <!-- ngayhoanthanh -->
                                      <?php echo date('d/m/Y', strtotime($row["HD_NGAYDAT"])) ?>
                                    </td>
                                    <td class="align-middle text-center">
                                      <!-- soluong -->
                                      <?php
                                        $sql_sl = "select count(*) as soluong from chitiet_hd where HD_ID = ".$row["HD_ID"]."";
                                        $rssl = $conn->query($sql_sl);
                                        $rowsl = mysqli_fetch_assoc($rssl);
                                        echo $rowsl["soluong"]
                                      ?>
                                    </td>

                                    <!-- phuong thuc thanh toan -->
                                    <td class="align-middle text-xs text-center">
                                        <?php
                                          $idpttt = $row["PTTT_ID"];
                                          $sqlpt = "select PTTT_TEN from pt_thanhtoan where PTTT_ID = {$idpttt}";
                                          $rspt = $conn->query($sqlpt);
                                          $rowpt = mysqli_fetch_assoc($rspt);
                                          echo $rowpt["PTTT_TEN"];
                                        ?>
                                    </td>

                                    <td class="align-middle text-success text-center">
                                      <!-- tongtien -->
                                      <?php echo number_format($row["HD_TONGTIEN"], 0, '.') ?>đ
                                    </td>
                                    <td class="align-middle text-center">
                                      <button class="btn btn-link text-primary font-weight-bold text-sm mt-3">
                                        Xem chi tiết >
                                      </button>
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
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-7 d-flex align-items-center">
                  <h6 class="mb-0">Chi tiết hoá đơn</h6>
                </div>
                <div class="col-2 text-center me-n3">
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-print text-sm me-1"></i> In</button>
                </div>
                <div class="col-3 text-center">
                  <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-1"><i class="fas fa-file-pdf text-sm me-1"></i> Xuất PDF</button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <div class="row">
                <div class="col-12">
                  <!-- title -->
                  <div class="row text-center fs-4 font-weight-bold">
                    <div class="col-12">
                      HOÁ ĐƠN
                    </div>
                  </div>
                  <!-- ngay -->
                  <div class="row text-center fs-5 font-weight-bold"> 
                    <div class="col-12">
                      31/12/2023
                    </div>
                  </div>
                  <!-- thongtin khachhang -->
                  <div class="row mt-3">
                    <div class="col-md-12">
                      <h6>Thông tin khách hàng:</h6>
                      <!-- 1 hang -->
                      <div class="row px-2 mt-2">
                        <div class="col-4">
                          <h6>Mã khách hàng: </h6>
                        </div>
                        <div class="col-8">
                          <p>421</p>
                        </div>
                      </div>
                      <!-- 1 hang -->
                      <div class="row px-2 mt-n3">
                        <div class="col-4">
                          <h6>Tên khách hàng: </h6>
                        </div>
                        <div class="col-8">
                          <p>Nguyễn Văn A</p>
                        </div>
                      </div>
                      <!-- 1 hang -->
                      <div class="row px-2 mt-n3">
                        <div class="col-4">
                          <h6>SĐT: </h6>
                        </div>
                        <div class="col-8">
                          <p>0123456789</p>
                        </div>
                      </div>
                       <!-- 1 hang -->
                       <div class="row px-2 mt-n3">
                        <div class="col-4">
                          <h6>Địa chỉ: </h6>
                        </div>
                        <div class="col-8">
                          <p>A123, ABC, phường A, quận B, TP.C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- thongtin nhanvien -->
                  <div class="row mt-3">
                    <div class="col-md-12">
                      <h6>Thông tin nhân viên:</h6>
                      <!-- 1 hang -->
                      <div class="row px-2 mt-2">
                        <div class="col-4">
                          <h6>Mã nhân viên: </h6>
                        </div>
                        <div class="col-8">
                          <p>231</p>
                        </div>
                      </div>
                      <!-- 1 hang -->
                      <div class="row px-2 mt-n3">
                        <div class="col-4">
                          <h6>Tên nhân viên: </h6>
                        </div>
                        <div class="col-8">
                          <p>Nguyễn Thị B</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       
    </div>
  </main>
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
        <div>
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
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
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
</body>

</html>