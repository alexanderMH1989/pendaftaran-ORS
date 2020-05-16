<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pendaftaran Pelatihan Online Research Skills</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
    
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">ORS</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html" class="nav-link">Beranda</a></li>
                <li><a href="data_pendaftar_pagi.php" class="nav-link">Penelusuran Informasi</a></li>
                <li><a href="data_pendaftar_siang.php" class="nav-link">Turnitin</a></li>
                <li class="has-children">
                  <a href="#" class="nav-link">RMT</a>
                  <ul class="dropdown">
                    <li><a href="#" class="nav-link">Zotero</a></li>
                    <li><a href="data_pendaftar_mendeley.php" class="nav-link">Mendeley</a></li>
                  </ul>
                </li>
                
                  
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>
      
    </header>


    <main id="main">
      <div class="hero-section inner-page">
        <div class="wave">
          
          <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                      <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                  </g>
              </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <h1 data-aos="fade-up" data-aos-delay="">Pelatihan Turnitin</h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">Pelatihan Sesi Siang (13.30-15.30 WIB)</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>



      <div class="site-section">

      <div class="container">
         <form action="data_pendaftar_siang.php" enctype="multipart/form-data" method="post" >
            <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">Tanggal</label>
                      
                      <div class="col-md-6 form-group">
                          <select class="form-control" name="tanggal" >
                            <option disabled="" selected="">-- Pilih Tanggal --</option>
                            <?php
                            include 'koneksi.php';
                            $sql="SELECT distinct tanggal from data_siang ORDER By tanggal ASC";

                            $hasil=mysqli_query($koneksi,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                           ?>
                            
                            
                            <option value="<?php echo $data['tanggal'];?>"><?php echo $data['tanggal'];?></option>
                            <?php
                            }
                            ?>
                            
                          </select>
                        </div>
                        <div class="col-md-6 form-group">
                       <button type="submit" name="cari" class="btn btn-primary btn-sm"> 
                                            <i class="fa fa-dot-circle-o"></i> Cari
                                        </button>
                    </div>
                    </div>

                    
         </form>
         <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <tbody>
                        <tr>
                          <th> No.</th>
                          <th> NIM</th>
                          <th> Nama</th>
                          <th> Jurusan</th>
                          <th> Semester</th>
                          <th> Jenis Kelamin</th>
                          <th> Tanggal</th> 
                        </tr>
                      
                        <tr>
                            <?php 
                            include 'koneksi.php';
                            if(isset($_POST['cari'])){
                              $cari = $_POST['tanggal'];
                              $data = mysqli_query($koneksi,"SELECT nim, nama, jurusan, semester, gender, tanggal FROM data_siang WHERE tanggal like '%".$cari."%'"); 
                              $no = 1;
                            while($pendidikan = mysqli_fetch_array($data)){
                                echo "<td>".$no++."</td>";
                                echo "<td>".$pendidikan['nim']."</td>";
                                echo "<td>".$pendidikan['nama']."</td>";
                                echo "<td>".$pendidikan['jurusan']."</td>";
                                echo "<td>".$pendidikan['semester']."</td>";
                                echo "<td>".$pendidikan['gender']."</td>";
                                echo "<td>".$pendidikan['tanggal']."</td>";
                                echo "</tr>";
                              }
                            }else{

                            }
                            ?>      
                      </tbody>
                    </table>    
      </div>
    </div>


    </main>
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div >
            <h3>Perpustakaan Pusat UIN Maulana Malik Ibrahim Malang</h3>
            <p>Contact Person : Tata (081332036206)</p>
            
            <!-- <p class="social">
              <a href="#"><span class="icofont-twitter"></span></a>
              <a href="#"><span class="icofont-facebook"></span></a>
              <a href="#"><span class="icofont-dribbble"></span></a>
              <a href="#"><span class="icofont-behance"></span></a>
            </p> -->
          </div>
          
        </div>


      </div>
    </footer>
  </div> <!-- .site-wrap -->
  
  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/sticky/sticky.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  </body>
</html>
