<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    include 'koneksi.php';
    session_start();
    if($_SESSION['status']!="login"){
        header("location:index.html?pesan=belum_login");
    }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Apotek Landungsari Farma</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-medkit"></i> <span>Apotek</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="home.php"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Obat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_obat.php">Form Obat</a></li>
                      <li><a href="data_obat.php">Data Obat</a></li>
                
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-edit"></i> Pembelian <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_pembelian.php">Form Pembelian</a></li>
                      <li><a href="data_pembelian.php">Data Penjualan</a></li>
                    </ul>
                  </li>
                  
                  <!-- <li><a href="#"><i class="fa fa-table"></i> Data Obat </a>
                  </li> -->
                  
                  <li><a><i class="fa fa-suitcase"></i> Penjualan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_penjualan.php">Form Penjualan</a></li>
                      <li><a href="data_penjualan.php">Data Penjualan</a></li>
                
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-line-chart"></i> Prediksi </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      Selamat Datang,
                    <?php echo $_SESSION['nama']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Apotek Landungsari Farma</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Penjualan </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="proses_tambah_penjualan.php" method="post" enctype="multipart/form-data">

<?php

// koneksi ke mysql
include 'koneksi.php';
//mysqli_select_db('data_obat');

// membaca kode barang terbesar

$query = mysqli_query($koneksi,"SELECT id_penjualan FROM data_penjualan ORDER BY id_penjualan DESC");

$data  = mysqli_fetch_array($query);
$kode = $data['id_penjualan'];
$urut = substr($kode,6,3);

$tambah = (int) $urut+1;
$bulan=date("m");
$tahun=date("y");


if(strlen($tambah)==1){
  $id = "PJ".$bulan.$tahun."00".$tambah;
}else if (strlen($tambah)==2){
  $id = "PJ".$bulan.$tahun."0".$tambah;
}else{
   $id = "PJ".$bulan.$tahun.$tambah;
}
?>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kode Penjualan 
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="first-name" class="form-control " name="id_penjualan" value="<?php echo $id?>" readonly>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tanggal Penjualan 
                        </label>
                        <div class="col-md-6 col-sm-6 xdisplay_inputx form-group row has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="" aria-describedby="inputSuccess2Status2" name="tanggal">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                            
                          </div>
                      </div>
                      
                      
                      <!-- <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kode Obat 
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="last-name" name="last-name" class="form-control">
                        </div>
                      </div> -->

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Obat 
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" name="nama_obat" onchange="changeValue(this.value)">
                            <option disabled="" selected="">-- Pilih Obat --</option>
                            <?php

                                $jsArray = "var prdName = new Array();\n";
                                $result = mysqli_query($koneksi,"SELECT * FROM data_obat ORDER BY nama_obat");
                                while($data = mysqli_fetch_assoc($result))
                                {
                                  echo '<option value="'.$data['nama_obat'].'">'.$data['nama_obat'].'</option> ';
                                  $jsArray .= "prdName['" . $data['nama_obat'] . "'] = {harga_obat:'" . addslashes($data['harga_obat']) . "'};\n";
                                } 
                              ?>
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name" >Harga Satuan 
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="harga_obat" name="harga_obat" class="form-control" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jumlah 
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="jumlah" name="jumlah" class="form-control" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Total Harga 
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="total_harga" name="total" class="form-control">

                        </div>
                        <!-- <button class="btn btn-success" type="submit" name="hitung">Hitung</button> -->
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
						              <button class="btn btn-primary" name="tambah" type="submit">Tambah</button>
                          <button type="reset"  class="btn btn-danger">Reset</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <script type="text/javascript">
    function mulaiHitung(){
      Interval = setInterval("hitung()",1);
    }
    function hitung(){
      harga_obat  = parseInt(document.getElementById("harga_obat").value);
      jumlah      = parseInt(document.getElementById("jumlah").value);
      total_harga = harga_obat * jumlah;
      document.getElementById("total_harga").value = total_harga;
    }
    function berhentiHitung(){
      clearInterval(Interval);
    }
</script>

    <script type="text/javascript">    
      <?php 
          echo $jsArray; ?>  
          function changeValue(x){  
          document.getElementById('harga_obat').value = prdName[x].harga_obat;   
        };  
    </script> 
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
