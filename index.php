<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">

	<title>Senja</title>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
	<!-- awal Home -->
	<div id="home">
	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="index.php"><img src="img/senja.jpg"alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>	
			</button>


			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto"> <!-- meaning margin-left auto -->
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link"  href="#books">Books</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
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

		<!-- Start of Image Slider -->
		<div id="carouselExampleIndicators" class="carousel slide" data-interval="7000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0 " class="active"></li> 
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
			</ol>
			<!-- awal carousel inner -->
			<div class="carousel-inner" role="listbox">
				<!-- slide 1 -->
				<div class="carousel-item active" style="background-image: url(img/library.jpg);">
					<div class="carousel-caption text-center">
						<h1>Welcome to Senja</h1>
						<h3>Antara Kamu dan Senja</h3>
                        <h5>Senja, Hujan, dan Cerita Yang Telah Usai</h5>
						<a class="btn btn-outline-light btn-lg" href="#course">Get Started</a>
					</div>
				</div>

				<!-- slide 2 -->
				<div class="carousel-item" style="background-image: url(img/novel.jpeg);">
					<div class="carousel-caption text-center">
						<h1>Cerita Tentang Senja</h1>
                        <h3>Kita Hanya Butuh Jeda Bukan Luka</h3>
					</div>	
				</div>

			</div> <!-- akhir carousel inner -->

			<!-- prev dan next button -->
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div> <!-- akhir Image Slider -->
	</div>
	<!-- akhir Home -->

	
	<!-- awal about -->
	<section id="about" class="about">
		<div class="container">
			<div class="row content">
				<div class="col-lg-6">
					<h1>SENJA Books</h1>
					<h3>Tempat peminjaman dan membaca buku (Perpustakaan) secara online. Senja baru saja didirikan sejak tahun 2021. Membuat Pembaca nyaman adalah tugas kami.</h3>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<p>
					Di Senja  tersedia beberapa buku yang dapat dipinjam dan dibaca. Disini menyediakan series buku karangan dari Boy Candra, pengarang buku yang terkenal dengan karya-karya nya yang menakjubkan. Berikut beberapa judul buku yang tersedia :
				    </p>
					<ul>
						<li>Seperti Hujan Yang Jatuh Ke Bumi</li>
						<li>Catatan Pendek Untuk Cinta Yang Panjang</li>
						<li>Pada Senja Yang Membawamu Pergi</li>
						<li>Sebuah Usaha Melupakan</li>
						<li>Cinta Paling Rumit</li>
						<li>Origami Hati</li>
					</ul>
					<p class="font-italic">
						Silahkan membaca dengan nyaman di Senja Books..
					</p>
					
				</div>
			</div>
		</div>
	</section>


	<!-- awal Book section-->
	<div id="books" class="offset">
		<div class="col-12 text-center title">
				<h2>Books</h2>
				<div class="heading-underline"></div>
		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card">
					<img class="card-img-top" src="img/gambar1.jpg">
					<div class="card-body">
						<h4 class="text-center">Seperti Hujan Yang Jatuh Ke Bumi</h4>
						<p class="text-justify">"Aku pernah belajar merelakanmu berkali-kali. Melepasmu pergi dengan cinta yang lain. Membiarkan kesempatan memilikimu hilang untukku. Sebab kamu berhak bahagia; meski sesungguhnya aku tidak bahagia dengan keputusan itu. Ketidak-beranianku mengikatmu memberi ruang bagi orang asing mendekatimu."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/gambar2.jpg">
					<div class="card-body">
						<h4 class="text-center">Catatan Pendek Untuk Cinta Yang Panjang</h4>
						<p class="text-justify">"Pada akhirnya, kamu hanya perlu mensyukuri apa pun yang kamu miliki hari ini. Walaupun yang kamu tunggu tak pernah datang. Walaupun yang kamu perjuangkan tak pernah sadar dengan apa yang kamu lakukan."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/gambar3.jpg">
					<div class="card-body">
						<h4 class="text-center">Pada Senja Yang Membawamu Pergi</h4>
						<p class="text-justify">"Apakah kau ingat saat kita berjanji untuk saling membahagiakan? Katamu, setiap perasaan yang tumbuh adalah sebuah alasan. Alasan bahwa hati patut dipertahankan. Namun, cinta saja belum cukup menyatukan mimpi yang berbeda di antara kita. Dan, menepati janji ternyata tak semudah mengucapkannya."</p>
					</div>
				</div>
			</div>

		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/gambar5.jpg">
					<div class="card-body">
						<h4 class="text-center">Cinta Paling Rumit</h4>
						<p class="text-justify">"Dari sudut kota yang jauh, perasaan kepadamu tetaplah hal yang utuh, sebab kamu bagian dari rencana rencana besarku. Bagian penting dari hal-hal yang kumiliki dalam hidupku, Maka, bertahanlah di sana tanpa rasa curiga, tanamkan dalam dadamu apa yang aku perjuangkan sepenuh jiwa.Bersabarlah disana, biar kukembangkan lebih lebar lagi sayapku disini. Semoga tidak lama lagi semesta memisahkan kita. Agar segala yang membuatmu cemas dan ragu bisa tiada."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/gambar4.jpg">
					<div class="card-body">
						<h4 class="text-center">Sebuah Usaha Melupakan</h4>
						<p class="text-justify">"Setelah hari-hari yang sedih berlalu. Bulan-bulan pahit memulihkan diriku. Aku menyadari satu hal; yang bukan untukku, sekeras apa pun kupaksakan, tetap saja tak akan menjadi milikku."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/gambar6.jpg">
					<div class="card-body">
						<h4 class="text-center">Origami Hati</h4>
						<p class="text-justify">"Jangan berpaling dan membuat kita menjadi dua orang asing. Di hamparan bumi ini ada banyak sekali orang yang bisa merebutmu, juga mencuri perhatianku.Namun, aku ingin tetap kamu dan aku saja yang menjadi kita. Aku ingin kamu saja yang menemaniku membuka pagi hingga melepas senja, menenangkan malam dan membagi cerita.Tetaplah menjadi seseorang yang membuatku merasa kuat. Jangan biarkan hatimu lepas dari segala harapan yang aku ikat.."</p>
					</div>
				</div>
			</div>

		</div>

			
	</div>
	<!-- akhir Book section-->


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