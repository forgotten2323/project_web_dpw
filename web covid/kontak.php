<html>
<head>
<title>EDU-COVID</title>
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="one_quarter first">
      <h1 class="logoname clear"><a href="index.html"><span>EDU-COVID</span></a></h1>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div></div>
        </li>
        <li class="one_third">
          <div></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="tel:119"><i class="fas fa-phone"></i> </a><span><strong>Covid-19 Hotline :</strong></span> 119 </div>
        </li>
      </ul>
    </div>
  </header>
</div>
<div class="wrapper row1">
  <div class="hoc1 clear">
    <nav id="mainav">
     <ul class="clear">
        <li class="navbar"><a class="b" href="index.php">Home</a></li>
  <li class="navbar"><a class="b" href="#cara">Cara Pencegahan</a></li>
        <li class="navbar"><a class="b" href="index.php">Statistic</a></li>
        <li class="navbar"><a class="b" href="depan_kuis.php">Kuis</a></li>
        <li class="navbar"><a class="b" href="kontak.php">Kontak</a></li>
        <li class="navbar"><a class="b" href="logout.php" onclick="return confirm('Logout?')">Logout</a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="input_main">
                       <div class="container">
                          <form action="" method="POST">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Jumlah Korban Penyebaran" name="jumlah">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Alamat" name="alamat">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Kecamatan" name="kecamatan">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Kelurahan" name="kelurahan">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Provinsi" name="provinsi">
                            </div>
                            <div class="form-group">
                                  <textarea class="massage-bt" placeholder="Pesan" rows="5" id="comment" name="pesan"></textarea>
                            </div>
                            <div class="send_btn">
                        <button  type="submit" class="main_bt" name="kirim">Kirim</button>
                       </div> 
                          </form>
                          <?php
                          include 'koneksi.php';
                          if(isset($_POST['kirim'])){
                            if (!is_numeric($_POST['jumlah'])) {
                              echo "<script>alert('Jumlah Harus Angka !!!');</script>";
                            }else{
                            $insert = mysqli_query($conn, "INSERT INTO tb_datacovid VALUES(NULL,'".$_POST['jumlah']."','".ucwords($_POST['alamat'])."','".ucwords($_POST['kecamatan'])."','".ucwords($_POST['kelurahan'])."','".ucwords($_POST['provinsi'])."','".$_POST['pesan']."')");
                            if ($insert) {
                              echo"<script>alert('Data Berhasil Terkirim');document.location.href='index.php'</script>";
                            } else {
                              echo "<script>alert('Terjadi Kesalahan Saat Mengirim Data, Coba Lagi ...');</script>";
                            }
                          }}
                          ?>
                       </div> 
                                         
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <p class="lorem_text">Selamat datang di Gugus Tugas Covid19. Silahkan isi form di samping untuk memasukan data penyebaran Covid19.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - Muhammad Satrio Farhan, Muhamat Taufik, Osa Nurul Aditiya, Muhammad Rizky Rian Afandi, Shohibul Kahfi</p>
  </div>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
</body>
</html>