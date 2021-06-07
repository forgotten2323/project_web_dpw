<?php 
session_start();
if (empty($_SESSION['nama'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='../login.php'</script>";
}
if (!isset($_SESSION['log'])) {
    header('location: ../login.php');
    exit;
}
?>
<html>
<head>
<title>EDU-COVID</title>
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
      	<li class="navbar"><a class="b" href="#statistic">Statistic</a></li>
      	<li class="navbar"><a class="b" href="depan_kuis.php">Kuis</a></li>
      	<li class="navbar"><a class="b" href="kontak.php">Kontak</a></li>
        <li class="navbar"><a class="b" href="logout.php" onclick="return confirm('Logout?')">Logout</a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/_114113646_gettyimages-1219401083.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">Pendaftaran Vaksinasi Masyarakat Lanjut Usia</h3>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="https://covid19.go.id/">Cek Info</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <article class="group">
      <div class="one_half first">
        <h4 class="heading underline font-x2">EDU-COVID</h4>
        <p>edu covid adalah sebuah website yang akan menampilkan informasi - informasi yang berkaitan dengan CORONA VIRUS , anda juga dapat melihat cara -cara melihat</p>
        </div>
      <div class="one_half"><a class="imgover" href="#"><img class="borderedbox inspace-10" src="images/stop-COVID-19.jpg" alt=""></a></div>
    </article>
    <div class="clear"></div>
  </main>
</div>
<sesion id="cara">
<div class="wrapper row3">
  <main class="hoc container clear"> 	
        <h6 class="heading underline font-x2">Cara Pencegahan Covid-19</h6>
	</sesion>
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEpidemiolog Indonesia di Griffith University Australia Dicky Budiman mengatakan, Indonesia seharusnya sudah tidak lagi menggaungkan 3M sebagai langkah mengantisipasi penyebaran Covid-19.</p>
        <p class="btmspace-30">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBerkaca pada adanya ledakan-ledakan setelah libur panjang, Dicky menyarankan agar Indonesia kini menambah strategi pencegahan dari 3M menjadi 5M yakni menjauhi kerumunan, dan mengurangi mobilitas.
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
"Mobilitas, interaksi penduduk yang tinggi, keramaian kerumunan ini terbukti dalam riset studi epidemiologi terakhir menjadi pemicu ledakan-ledakan kasus perburukan pandemi di satu negara atau wilayah," kata Dicky saat dikutip dari Kompas.com (4/1/2021). </p>

<sesion id="statistic">
<div class="wrapper row3">
  <main class="hoc container clear">  
        <h6 class="heading underline font-x2">Statistic</h6>
  </sesion>
        <p><center>Data Situasi Covid-19 di Indonesia</center></p>
        <li><center><a class="btn" href="https://covid19.go.id/berita/data-vaksinasi-covid-19-update-5-juni-2021">Cek Info</a></li></center>
        <center><img src="images/statistik.jpeg"></center>

        
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">Berita Terkini</h6>
    </div>
    <ul class="nospace group latest">
      <li class="one_third first">
        <article>
          <time datetime="2021-03-25T08"><i class="far fa-calendar-alt rgtspace-5"></i> 4<sup>th</sup> Juni 2021</time>
          <div class="excerpt">
            <h6 class="heading"><a href="https://covid19.go.id/masyarakat-umum/3-vaksin-covid-19-dalam-program-vaksinasi-nasional-saat-ini-semua-direkomendasikan-who">3 Vaksin COVID-19 Dalam Program Vaksinasi Nasional Saat Ini Semua Direkomendasikan WHO</a></h6>
            <p>Sejak pelaksanaan program vaksinasi nasional sebagai upaya penanganan COVID-19 pada 13 Januari 2021, Indonesia telah menggunakan 3 jenis vaksin, yakni produksi Sinovac (CoronaVac), AstraZeneca yang diproduksi SK Bio, dan Sinopharm.Ketiga jenis vaksin ini seluruhnya telah direkomendasikan WHO melalui daftar penggunaan darurat (EUL). Vaksin COVID-19 produksi Sinovac (CoronaVac) adalah yang terbaru mendapatkan validasi dari WHO tersebut pada 1 Juni lalu.[<a href="https://covid19.go.id/masyarakat-umum/3-vaksin-covid-19-dalam-program-vaksinasi-nasional-saat-ini-semua-direkomendasikan-who">&hellip;</a>]</p>
          </div>
        </article>
      </li>
      <li class="one_third">
         <article>
          <time datetime="2021-03-25T08"><i class="far fa-calendar-alt rgtspace-5"></i> 28<sup>th</sup> Mei 2021</time>
          <div class="excerpt">
            <h6 class="heading"><a href="https://covid19.go.id/berita/vaksinasi-dan-prokes-percepat-pemulihan-kesehatan-dan-ekonomi">Vaksinasi dan Prokes, Percepat Pemulihan Kesehatan dan Ekonomi</a></h6>
            <p>Jakarta, 28 Mei 2021 – Pemerintah telah menjalankan program vaksinasi nasional sejak Januari 2021. Upaya ini merupakan salah satu langkah memulihkan kesehatan masyarakat Indonesia. Pemulihan kesehatan juga berdampak bagi pemulihan ekonomi dan kembalinya produktivitas masyarakat seperti semula.“Protokol kesehatan (Prokes) adalah elemen yang sangat penting selama masih ada pandemi COVID-19. Prokes tetap jalan terus meskipun program vaksinasi sudah berjalan seperti saat ini,” ujar dr. Reisa Broto Asmoro[<a href="https://covid19.go.id/berita/vaksinasi-dan-prokes-percepat-pemulihan-kesehatan-dan-ekonomi">&hellip;</a>]</p>
          </div>
        </article>
      </li>
      <li class="one_third">
         <article>
          <time datetime="2021-03-25T08"><i class="far fa-calendar-alt rgtspace-5"></i> 3<sup>th</sup> Jun 2021</time>
          <div class="excerpt">
            <h6 class="heading"><a href="https://covid19.go.id/berita/monitoring-kepatuhan-protokol-kesehatan-tingkat-nasional-update-30-mei-2021">Monitoring Kepatuhan Protokol Kesehatan Tingkat Nasional (Update Per 30 Mei 2021)</a></h6>
            <p>Data monitoring perubahan perilaku didapatkan berdasarkan laporan real-time para personil TNI, POLRI, dan duta perubahan perilaku menggunakan aplikasi perubahan perilaku yang tersambung dengan sistem Bersatu Lawan Covid-19 (BLC): satu data Covid-19 Nasional.Data dikirimkan secara real-time pada lokasi titik-titik kerumunan yang mencakup pasar, tempat wisata, jalan umum, tempat olahraga publik/RPTRA, rumah atau wilayah pemukiman, restoran/kedai, kantor, mall, stasiun, bandara, terminal, sekolah, dan lainnya.[<a href="https://covid19.go.id/berita/monitoring-kepatuhan-protokol-kesehatan-tingkat-nasional-update-30-mei-2021">&hellip;</a>]</p>
          </div>
        </article>
      </li>
    </ul>
  </section>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - Muhammad Satrio Farhan, Muhamat Taufik, Osa Nurul Aditiya, Muhammad Rizky Rian Afandi, Shohibul Kahfi</p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>