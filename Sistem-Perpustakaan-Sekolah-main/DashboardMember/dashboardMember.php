<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../sign/member/sign_in.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/botstrapconfig/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <title>Member Dashboard</title>
</head>
<style>
  body {
    background-color: #F9F7F7;
  }

  .d-block {
    background-size: cover;
    background-repeat: no-repeat;
  }

  .navbar {
    background-color: #F26B0F;
  }

  .carousel-contain {
    background-color: #FCC737;
    height: 700px;
  }

  .bordered {
    border: 1px solid blue;
    height: 650px;
  }

  @media screen and(max-width: 600px) {
    .d-flex flex-wrap gap-2 cardImg a img {
      width: 200px;
    }
  }
</style>

<body>

  <nav class="navbar fixed-top  shadow-sm ">
    <div class="container-fluid p-3">
      <a class="navbar-brand" href="#">
        <img src="../assets/logoNav.png" alt="logo" width="120px">
      </a>

      <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../assets/memberLogo.png" alt="memberLogo" width="40px">
        </button>
        <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2">
          <li>
            <a class="dropdown-item text-center" href="#">
              <img src="../assets/memberLogo.png" alt="adminLogo" width="30px">
            </a>
          </li>
          <li>
            <a class="dropdown-item text-center text-secondary" href="#"> <span class="text-capitalize"><?php echo $_SESSION['member']['nama']; ?></span></a>
            <a class="dropdown-item text-center mb-2" href="#">Siswa</a>
          </li>
          <li>
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="mt-5 p-4">
    <?php
    // Mendapatkan tanggal dan waktu saat ini
    $date = date('Y-m-d H:i:s'); // Format tanggal dan waktu default (tahun-bulan-tanggal jam:menit:detik)
    // Mendapatkan hari dalam format teks (e.g., Senin, Selasa, ...)
    $day = date('l');
    // Mendapatkan tanggal dalam format 1 hingga 31
    $dayOfMonth = date('d');
    // Mendapatkan bulan dalam format teks (e.g., Januari, Februari, ...)
    $month = date('F');
    // Mendapatkan tahun dalam format 4 digit (e.g., 2023)
    $year = date('Y');
    ?>

    <div class="mb-4 p-3 ">
      <div class="mt-2 ">
      <marquee class="mb-2 mt-2" behavior="" direction="">  <h3 class="">Layanan Perpustakaan yang tersedia</h3></marquee>
      </div>
    
    <div class="alert alert-success " role="alert">Selamat datang member - <span class="text-capitalize fw-bold"><?php echo $_SESSION['member']['nama']; ?> </span> di Dashboard CuyPerpus</div>




    <!-- arousel  start-->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="/imgDB/654e3d8b359df.jpg" class="bd-placeholder-img" width="100%" height="400px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        
        <div class="container">
          <div class="carousel-caption text-start">
            <!-- <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/imgDB/654e402a8ad79.jpg" class="bd-placeholder-img" width="100%" height="400px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="/imgDB/654e4417e323e.jpeg" class="bd-placeholder-img" width="100%" height="400px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption text-end">
            <!-- <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <!-- arousel end -->

   

    <div class="d-flex flex-wrap justify-content-center gap-2  mt-5">
      <div class="cardImg">
        <a href="buku/daftarBuku.php">
          <img src="../assets/dashboardCardMember/daftarBuku.png" alt="daftar buku" style="max-width: 100%;" width="400px">
        </a>
      </div>
      <div class="cardImg">
        <a href="formPeminjaman/TransaksiPeminjaman.php">
          <img src="../assets/dashboardCardMember/peminjaman.png" alt="daftar buku" style="max-width: 100%;" width="400px">
        </a>
      </div>

      <div class="cardImg">
        <a href="formPeminjaman/TransaksiPengembalian.php">
          <img src="../assets/dashboardCardMember/pengembalian.png" alt="daftar buku" style="max-width: 100%;" width="400px">
        </a>
      </div>
      <div class="cardImg">
        <a href="formPeminjaman/TransaksiDenda.php">
          <img src="../assets/dashboardCardMember/denda.png" alt="daftar buku" style="max-width: 100%;" width="400px">
        </a>
      </div>
    </div>
  </div>
  </div>
  </div>

  <footer class="shadow-lg bg-subtle p-3" style=" background-color: #F26B0F;">
    <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-white"> Akib</span> </p>

    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>