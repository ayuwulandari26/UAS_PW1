<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fixed.css">

  <title>Profil Pegawai</title>

  <style>
    .container {
      margin-top: 100px;
      font-size: 18px;
    }

  </style>

</head>
<body>
    <!-- Awal Home -->
    <div id="home">
    
      <!-- Awal Navigasi -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="img/senja.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> 
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"> <!-- meaning margin-left auto -->
            <li class="nav-item">
            <a class="nav-link" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link"  href="index.php#books">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil_perusahaan.php">Profile</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link"  href="pegawai.php">Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href=login.php>Login</a>
          </li>
          </ul> 
        </div>
      </nav>
      <!-- Akhir Navigasi -->
    </div>
    <!-- Akhir Home -->

    <!-- Awal Table Pegawai -->
    <div class="container">
        <h1 style="margin-bottom: 20px;">PROFIL PEGAWAI</h1>
        <table class="table table-striped">
          <thead>
            <tr class="text-center">
              <th scope="col">No.</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama</th>
              <th scope="col">Umur</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><img src="img/foto1.png" width="120px" height="170px"></td>
              <td>Winny Mahdi Renata</td>
              <td>20</td>
              <td>winmahdi@gmail.com</td>
              <td>Jl. Alam Segar 3 No. 8, Pondok Indah Jakarta Selatan</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><img src="img/foto2.jpg" width="120px" height="170px"></td>
              <td>Astrid Rahdian Amanda </td>
              <td>23</td>
              <td>astriddian@gmail.com</td>
              <td>Jl. Ahmad Dahlan/ Jl. Bacang I No.2 Jakarta Selatan </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><img src="img/foto3.png" width="120px" height="170px"></td>
              <td>Kaila Sherly Sifabella</td>
              <td>18</td>
              <td>sifabella@gmail.com</td>
              <td>Jl. KH. Agus Salim No. 29A Jakarta Pusat.</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><img src="img/foto4.jpeg" width="120px" height="170px"></td>
              <td>Adelio Alvaro</td>
              <td>25</td>
              <td>dioalvaro@gmail.com</td>
              <td>Jl. Hos Cokroaminoto, No. 84, Menteng Jakarta Pusat</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><img src="img/foto5.jpg" width="120px" height="170px"></td>
              <td>Haldis Haley</td>
              <td>24</td>
              <td>lianhaley@gmail.com</td>
              <td>Jl. Metro Pondok Indah Kav. IV, Kebayoran Lama, Jakarta Selatan<td></td>
            </tr>
          </tbody>
        </table>
    </div>
    <!-- Akhir Table Pegawai -->





    <!-- awal footer section-->
    <div id="contact" class="offset">
      <footer>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <img class="logo" src="img/senja.jpg">
            <p>"Pembaca nyaman, Kami pun senang."</p>
            <strong>Contact Info</strong>
            <p>(888) 888-8888 <br> email@senja.com</p>

            <a class="ikon" href="https://web.facebook.com/profile.php?id=100007666605125" target="_blank"><img src="img/facebook.svg" style="width: 30px"></a>
            <a class="ikon" href="https://twitter.com/ramyeoonnn" target="_blank"><img src="img/twitter.svg" style="width: 30px"></a>
            <a class="ikon" href="https://www.instagram.com/puanarash/" target="_blank"><img src="img/instagram.svg" style="width: 30px"></a>
          </div>

          <hr class="socket">
          &copy; Senja Books.
        </div> <!-- end of row -->
      </footer>
    </div> <!-- Akhir footer section-->

    

    <!-- Script Source Files -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>