<?php 
session_start();
include 'koneksi.php';
if (empty($_SESSION['nama'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='../login.php'</script>";
}
if (!isset($_SESSION['log'])) {
    header('location: ../login.php');
    exit;
}
                if(!empty($_GET['nilai'])){
                    $sql = "select * from nilai where nama='$_SESSION[nama]'";
                    $hasil = mysqli_query ($conn,$sql);
                    $jumlah = mysqli_num_rows($hasil);
	                if ($jumlah == 0) {    
                            $nilai = $_GET['nilai'];
                            $sql1 = "INSERT INTO nilai (nama, nilai) VALUES ('$_SESSION[nama]', '$_GET[nilai]')";
                            if(mysqli_query($conn, $sql1)){
                                echo "Records added successfully.";
                            } else{
                                echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
                            }
                    }
                    else{
                        $sql2 = "UPDATE nilai SET nilai=$_GET[nilai] WHERE nama='$_SESSION[nama]'";
                        if(mysqli_query($conn, $sql2)){
                            echo "Records update successfully.";
                        } else{
                            echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
                        }
                    }
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

  <div class="div-button-header-2-2 d-inline d-lg-flex align-items-center mx-lg-0 mx-auto justify-content-center start">
        <button onclick="location.href = 'kuis.php';" name="mulai" class="btn d-inline-flex btn-try-header-2-2"> Mulai Kuis </button>
        <form action="" method="post"> 
            <button name="papan" class="btn d-inline-flex btn-try-header-2-2"> Papan Skor </button>
        </form>
        <!-- <p>Nilai Anda: </p>
        <p id="results0">0</p> -->
        <br></br><br></br>
        <br></br><br></br>
    </div>

</div>

<?php
    if(isset($_POST['papan'])){
        echo '<div class="card-header bg-success text-white">';
	        echo '3 Peringkat Kuis Terbaik';
	    echo '</div>';
          $sql = "SELECT * FROM nilai order by nilai desc limit 3" ;
                 
          if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-striped'>";
                    echo "<tr>";
                        echo "<th>Peringkat</th>";
                        echo "<th>Nama</th>";
                        echo "<th>Skor</th>";
                    echo "</tr>";
                    $no = 0;
                while($row = mysqli_fetch_array($result)){
                    $no+=1;
                    echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['nilai'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        }
    }
    ?>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - Muhammad Satrio Farhan, Muhamat Taufik, Osa Nurul Aditiya, Muhammad Rizky Rian Afandi, Shohibul Kahfi</p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="js/js.js"></script>
</body>
</html>
