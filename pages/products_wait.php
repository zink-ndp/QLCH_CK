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
<!DOCTYPE php>
<php lang="en">

<?php
  session_start();
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

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo-ck.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>
    Trang quản lý Forish
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
<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top:20px;
}

.content {
    max-height:0px; 
    overflow:hidden; 
    transition:max-height .5s ease-in-out; 
}
</style>
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
          <a class="nav-link active" href="../pages/products_wait.php">
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
            }
        ?>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Quản lý sản phẩm</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/storage.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-warehouse text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kho hàng</span>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="dashboard.php">Trang</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Đơn hàng</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Đơn hàng</h6>
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
                <h6 class="font-weight-bolder text-white text fs-7 mt-n1"><?php echo $_SESSION["name"]; ?></h6>      
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
    
    



    <button class="btn btn-outline-light text-white collapsible">Mở rộng</button>
    <div class="content">
        <div id="myDIV">
            ây là nội dung của bảng
        </div>
    </div>

    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            } 
        });
    }
    </script>


    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <form action="#" method="get">
                <div class="card-header pb-2 d-flex align-items-center">
                    <div class="col-3">
                    <h6 class="">Danh sách đơn hàng</h6>
                    </div>
                    <!-- <div class="col-6"></div> -->
                    <div class="col-9 d-flex align-items-center  justify-content-end">
                    <!-- <div class="input-group w-30 me-3">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" name="timkiem" class="form-control" placeholder="Nhập tên khách hàng cần tìm..">
                    </div>
                    <button type="submit" class="btn btn-primary text-white font-weight-bold text-md ms-0 mt-3">
                        Tìm
                    </button> -->
                </div>
            </div>
            </form>

            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                <!-- table 5 cot -->
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Khách hàng</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">địa chỉ</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SĐT</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày đăng ký</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Liên hệ</th>
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
                            $tkkhid = $row["TK_ID"];

                            $sql1 = "SELECT * FROM tai_khoan WHERE TK_ID = {$tkkhid}";
                            $result1 = $conn->query($sql1);
                            if ($result1->num_rows > 0) {
                            $result1 = $conn->query($sql1);
                            $result_all1 = $result1 -> fetch_all(MYSQLI_ASSOC);
                            foreach ($result_all1 as $row1) {
                            ?>
                            <tr class="height-100">
                                <td>
                                <div class="d-flex px-1 py-1">
                                    <!-- hinh anh khach hang -->
                                    <div>
                                    <?php
                                        $avatar_url = "../assets/img/cus_img/" . $row1["TK_AVATAR"];
                                        echo "<img src='{$avatar_url}' class='avatar avatar-xl me-3' alt='cus'>";
                                    ?> 
                                    </div>
                                    <!-- ten kh -->
                                    <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><?php echo $row["KH_HOTEN"]; ?></h6>
                                    <p class='text-xs text-secondary mb-0'>Ngày sinh: <?php echo $row["KH_NGAYSINH"]; ?></p>
                                    </div>
                                </div>
                                </td>
                                <td>
                                <p class="text-sm font-weight-bold mb-0"><?php echo $row["KH_DIACHI"]; ?></p>
                                </td>
                                <!-- SDT-->
                                <td>
                                <p class="text-sm font-weight-bold mb-0"><?php echo $row["KH_SDT"]; ?></p>
                                </td>
                                <!-- email-->
                                <td>
                                <p class="text-sm font-weight-bold mb-0"><?php echo $row["KH_EMAIL"]; ?></p>
                                </td>
                                <!-- ngay them -->
                                <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $row["KH_NGAYDK"]; ?></span>
                                </td>
                                <td class="align-middle">
                                <form method="post" action="edit_staff.php">
                                    <input type="hidden" name="nvid" value="<?php echo $row["KH_ID"]; ?>">
                                    <button onclick="this.form.submit()" class="mt-3 btn btn-link text-primary font-weight-bold text-sm">
                                    Gửi email
                                    </button>
                                </form>
                                </td>
                            </tr>
                            <?php
                            }
                            }
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



  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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

</php>