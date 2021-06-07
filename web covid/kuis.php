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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

  <div class="container">  
            <form method="POST" name="Kuis">
                <div class="row">
                     <div class="col-sm-6">
                        <div class="panel panel-primary">
                            <div class="soal1">
                                 1) Berasal dari mana awal virus Covid-19?
                            </div>
                            <div class="jawaban1">     
                                <button type="button" onclick="cek11()" >A</button>Wuhan<br>
                                <button type="button" onclick="cek12()" >B</button>Indonesia<br>
                                <button type="button" onclick="cek13()" >C</button>Argentina<br>
                                <button type="button" onclick="cek14()" >D</button>Brazil<br>
                                Jawaban anda :<input type="text" name="angka1" size="1"><br><br>
                            </div>
                            <div class="soal2">
                                2) Cara apa yang tidak tepat untuk pencegahan Covid-19?
                            </div>
                            <div class="jawaban2"> 
                                <button type="button" onclick="cek21()" >A</button>Jaga jarak<br>
                                <button type="button" onclick="cek22()" >B</button>Mencuci tangan<br>
                                <button type="button" onclick="cek23()" >C</button>Berpakaian yang Rapih<br>
                                <button type="button" onclick="cek24()" >D</button>Menghidari kerumunan<br>
                                Jawaban anda :<input type="text" name="angka2" size="1"><br><br>
                            </div>
                            <div class="soal3">
                                3) Gejala apa yang tidak timbul saat kita terinfeksi Covid-19?
                            </div>
                            <div class="jawaban3">     
                                <button type="button" onclick="cek31()" >A</button>Batuk<br>
                                <button type="button" onclick="cek32()" >B</button>Demam<br>
                                <button type="button" onclick="cek33()" >C</button>Sesak napas<br>
                                <button type="button" onclick="cek34()" >D</button>Cacar kulit<br>
                                Jawaban anda :<input type="text" name="angka3" size="1"><br><br>
                            </div>
                        </div>
                    </div><br>
                    <div class="col-sm-6"> 
                        <div class="panel panel-danger">
                            <div class="soal4">
                                4) Cuci tangan yang paling baik dilakukan dengan menggunakan sabun pada?
                            </div>
                            <div class="jawaban4">  
                                    <button type="button" onclick="cek41()" >A</button>Air kolam<br>
                                    <button type="button" onclick="cek42()" >B</button>Air dalam wadah<br>
                                    <button type="button" onclick="cek43()" >C</button>Air minum<br>
                                    <button type="button" onclick="cek44()" >D</button>Air mengalir<br>
                                    Jawaban anda :<input type="text" name="angka4" size="1"><br><br>
                            </div>
                            <div class="soal5">
                                5) Cara bersin yang baik dan beretika yaitu?
                            </div>
                            <div class="jawaban5">   
                                <button type="button" onclick="cek51()" >A</button>Tidak menghiraukan keadaan<br>
                                <button type="button" onclick="cek52()" >B</button>Menutup dengan baju bagian luar<br>
                                <button type="button" onclick="cek53()" >C</button>Menutup dengan telapak tangan/tisu<br>
                                <button type="button" onclick="cek54()" >D</button>Bersin sembarangan<br>
                                Jawaban anda :<input type="text" name="angka5" size="1"><br><br>
                            </div>
                        
                            <div class="soal6">
                                6) Virus Covid-19 dibawa oleh hewan... dan menular kepada manusia.
                            </div>
                            <div class="jawaban6">    
                                <button type="button" onclick="cek61()" >A</button>Burung<br>
                                <button type="button" onclick="cek62()" >B</button>Kucing<br>
                                <button type="button" onclick="cek63()" >C</button>Bebek<br>
                                <button type="button" onclick="cek64()" >D</button>Kelalawar<br>
                                Jawaban anda :<input type="text" name="angka6" size="1"><br><br>
                            </div>
                        </div>
                    </div><br>
                    <div class="cek">
                        <button onclick="cekjawaban()" type="button" class="btn btn-dark">Cek jawaban</button>
                        <button onclick="location.href = 'depan_kuis.php';" type="button" class="btn btn-dark">back</button>
                    </div>
                </div>
            </form>
        </div>

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
<script src="js/soal.js"></script>
</body>
</html>
