<html>
    <head>
        
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Update Data</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/vortexlogo.png" rel="icon">
        <link href="assets/img/vortexlogo.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body align="center">
        <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
    <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/vortexlogo.png" alt="">
        <span class="d-none d-lg-block">TechShop</span>
    </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">2</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
            You have 2 new notifications
            </li>
            <li>
            <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
                <h4>Stock Update</h4>
                <p>ACR21Q +2 Stock</p>
                <p>30 min. ago</p>
            </div>
            </li>

            <li>
            <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
                <h4>Stock Update</h4>
                <p>AMD560 -1 Stock</p>
                <p>32 min. ago</p>
            </div>
            </li>

            <li>
            <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
            </li>

        </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/pchan.jpeg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Kelompok 1</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            <h6 style="color: #fff;">Andhika Faqih</h6>
            <span>Kelompok 1</span>
            </li>
            <li>
            <hr class="dropdown-divider">
            </li>

            <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
            </li>
            <li>
            <hr class="dropdown-divider">
            </li>

            <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-login.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
            </li>

        </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

    </ul>
    </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->


    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Tambah Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="forms-elements.php">
            <i class="bi bi-circle"></i><span>Tambah Customer</span>
            </a>
        </li>
        <li>
            <a href="forms-elements2.php">
            <i class="bi bi-circle"></i><span>Tambah Stok Barang</span>
            </a>
        </li>
        </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Tabel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="tables-general.php">
            <i class="bi bi-circle"></i><span>Tabel Penjualan</span>
            </a>
        </li>
        <li>
            <a href="tables-data.php">
            <i class="bi bi-circle"></i><span>Produk</span>
            </a>
        </li>
        </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
        </a>
    </li><!-- End Contact Page Nav -->

    </ul>

    </aside>

    <main id="main" class="main">
    <?php 
            include'koneksi.php';
            $namatoko =$_GET['namatoko'];
            $sql = "SELECT * FROM pembeli WHERE namatoko = '$namatoko'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);

    ?>

    <div class="pagetitle">
      <h1>Update Data Customer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tabel Penjualan</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Customer</h5>

              <!-- General Form Elements -->
              <form name="fupdate" action="update1.php" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Customer</label>
                  <div class="col-sm-10">
                    <input name="namatoko" size="10" value="<?php echo $row['namatoko']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kode Produk</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="barang"name="barang">
                        <option value="ACR21Q" <?php echo $row['barang'] == 'ACR21Q' ? 'selected' : ''; ?>>ACR21Q</option>
                        <option value="ACR514" <?php echo $row['barang'] == 'ACR514' ? 'selected' : ''; ?>>ACR514</option>
                        <option value="AMD560" <?php echo $row['barang'] == 'AMD560' ? 'selected' : ''; ?>>AMD560</option>
                        <option value="CV216G" <?php echo $row['barang'] == 'CV216G' ? 'selected' : ''; ?>>CV216G</option>
                        <option value="GB550D" <?php echo $row['barang'] == 'GB550D' ? 'selected' : ''; ?>>GB550D</option>
                        <option value="ITLS23" <?php echo $row['barang'] == 'ITLS23' ? 'selected' : ''; ?>>ITLS23</option>
                        <option value="LGT203" <?php echo $row['barang'] == 'LGT203' ? 'selected' : ''; ?>>LGT203</option>
                        <option value="MSIG63" <?php echo $row['barang'] == 'MSIG63' ? 'selected' : ''; ?>>MSIG63</option>
                        <option value="POCOX5" <?php echo $row['barang'] == 'POCOX5' ? 'selected' : ''; ?>>POCOX5</option>
                        <option value="SRX580" <?php echo $row['barang'] == 'SRX580' ? 'selected' : ''; ?>>SRX580</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Total Produk Dibeli</label>
                  <div class="col-sm-10">
                    <input type="number" name="total" size="75" value="<?php echo $row['total']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Dibeli</label>
                  <div class="col-sm-10">
                    <input type="date" name="tanggal" size="75" value="<?php echo $row['tanggal']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" value="Update" style="background-color:#b16b20;">Submit Form</button>
                    &nbsp; <a href="tables-general.php">kembali</a>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


    </body>
</html>