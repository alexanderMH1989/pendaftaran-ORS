<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
include 'proses_daftar_mendeley.php';
?>
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
  <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>

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
                  <h1 data-aos="fade-up" data-aos-delay="">Form Pendaftaran</h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">Pelatihan Online Research Skills</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>


      <div class="site-section">
      <div class="container">
        <nav class="nav2">
          <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Berhasil!";
            } else {
                echo "Mohon maaf kuota pada tanggal tersebut sudah penuh !!! <br> 
                Silahkan pilih tanggal yang lain.";
            }
        ?>
    </p>
        <?php endif; ?>
        </nav>

            <div class="row">
              <div class="col-md-10 mb-5 mb-md-0" >
                <form action="form_daftar_mendeley.php" enctype="multipart/form-data" method="post" >
              
                  <div class="row">
                    
                    <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">NIM *</label>
                      <input type="text" class="form-control" name="nim" id="subject" required="required" />
                    
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">Nama *</label>
                      <input type="text" class="form-control" name="nama" id="subject" required="required" />
                     
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">Jurusan *</label>
                      
                      <div class="col-md-12 col-sm-12 ">
                          <select class="form-control" name="jurusan" >
                            <option disabled="" selected="">-- Pilih Jurusan --</option>
                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                            <option value="Pendidikan Ilmu Pengetahuan Sosial">Pendidikan Ilmu Pengetahuan Sosial</option>
                            <option value="Pendidikan Guru Madrasah Ibtidaiyah">Pendidikan Guru Madrasah Ibtidaiyah</option>
                            <option value="Pendidikan Bahasa Arab">Pendidikan Bahasa Arab</option>
                            <option value="Pendidikan Islam Anak Usia Dini">Pendidikan Islam Anak Usia Dini</option>
                            <option value="Manajemen Pendidikan Islam">Manajemen Pendidikan Islam</option>
                            <option value="Tadris Bahasa Inggris">Tadris Bahasa Inggris</option>
                            <option value="Tadris Matematika">Tadris Matematika</option>
                            <option value="Al-Ahwal Al-Syakhshiyyah">Al-Ahwal Al-Syakhshiyyah</option>
                            <option value="Hukum Bisnis Syari`ah">Hukum Bisnis Syari'ah</option>
                            <option value="Hukum Tata Negara">Hukum Tata Negara</option>
                            <option value="Ilmu Al-Qur`an Dan Tafsir">Ilmu Al-Qur'an Dan Tafsir</option>
                            <option value="Bahasa Dan Sastra Arab">Bahasa Dan Sastra Arab</option>
                            <option value="Sastra Inggris">Sastra Inggris</option>
                            <option value="Psikologi">Psikologi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Perbankan Syari`ah">Perbankan Syari'ah</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                            <option value="Perpustakaan Dan Sains Informasi">Perpustakaan Dan Sains Informasi</option>
                            <option value="Pendidikan Dokter">Pendidikan Dokter</option>
                            <option value="Profesi Dokter">Profesi Dokter</option>
                            <option value="Farmasi">Farmasi</option>                        
                          </select>
                        </div>
                    </div>

                    <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">Semester *</label>
                      <input type="number" class="form-control" name="semester" id="subject" required="required" />                      
                    </div>

                    <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">Jenis Kelamin *</label>
                      <div class="col-md-6 col-sm-6 ">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Laki-laki" > Laki-laki 
                            </label>

                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="Perempuan" > Perempuan
                            </label>
                          </div>
                        </div>

                    
                    </div>
                    <div class="col-md-12 form-group">     
                      <label for="name" class="warna_huruf">Tanggal Pelatihan *</label> <small class="huruf_merah">Pilih Tanggal di Hari Kamis Saja</small>
                      <input type="date" min="2020-02-27" step="7" class="form-control" onfocus="(this.type='date')" name="tanggal" id="tanggal"  required="required" value="<?php echo $tanggal; ?>"/>
                    </div>

                    <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">Email *</label>
                      <input type="text" class="form-control" name="email" id="subject" required="required" />
                      
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="name" class="warna_huruf">No. WhatsApp *</label>
                      <input type="text" class="form-control" name="no_wa" id="subject" required="required" />
                     
                    </div>
                    <div class="col-md-6 form-group">
                       <button type="submit" name="tambah" class="btn btn-primary btn-sm"> 
                          <i class="fa fa-dot-circle-o"></i> Submit
                       </button>
                    </div>
                    
                  </div>
    
                </form>
              </div>
          
            </div>
      </div>
    </div>


    </main>
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div >
            <h3>Perpustakaan Pusat UIN Maulana Malik Ibrahim Malang</h3>
            <p>Contact Person : Tata (081332036206)</p>
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
