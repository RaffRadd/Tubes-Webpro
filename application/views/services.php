<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style>
	
.tab {
	width: 250px;
	min-width: 250px;
}
.tab button {
	display: block;
	background-color: inherit;
	color: black;
	padding: 22px 16px;
	width: 100%;
	border: none;
	outline: none;
	text-align: left;
	cursor: pointer;
	transition: 0.3s;
}
.tab button:hover {
	background-color: #ddd;
}
.tab button.active {
	background-color: #1fbde0;
}
.tabcontent {
	float: left;
	padding: 0px 12px;
	border: 1px solid #ccc;
	width: 70%;
	border-left: none;
}
.verti {
	display: flex;
}
h3, p, li, dt, dd {
	margin-left: 40px;
}
.button {
	background-color: #4CAF50;
	border-radius: 12px;
	border: none;
	color: white;
	padding: 10px 20px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
}
.img {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 25%;
}
.container {
	display: flex;
	overflow-y: auto;
	flex-direction: row;
	align-items: center;
	padding-bottom:20px;
}
	</style>

    <title>GamaTechno</title>
	
  </head>
  <body>
  
    <div>
		<img src="./images/banner-bg.jpg" class="d-block w-100" alt="..." style="height:580px;">
		<div class="carousel-caption" style="margin-bottom:70px;">
		
            <h1 style="color:black; text-shadow: 0px 0px 5px #FFF">Rancang Strategi Implementasi TIK yang Tepat dan Efisien</h1>
			
            <h5 style="text-shadow: 0px 0px 5px #000">Layanan konsultasi teknologi informasi profesional dan berkualitas untuk membantu organisasi (pemerintah, korporasi maupun akademik) dalam mencapai tujuan, visi dan misi. Membangun masa depan strategis dan tersistematis</h5>
			
			<br>
			
			<a class="nav-link" href="<?php echo site_url('contactUs')?>" style>
				<button class="button" <?php echo site_url('contactUs')?> >Contact Us</button>
			</a>
        </div>
	</div>
	
	<h1 style="text-align:center; margin-top:40px;"> Program Konsultasi Teknologi Informasi</h1>
<div style="margin:50px 100px 70px 100px;display:flex">
	<div class="tab">
	   <button class="vert" onclick="infofunc(event, 'MasterPlan')" id="default">Master Plan Smart City</button>
	   <button class="vert" onclick="infofunc(event, 'SPBE')">Master Plan SPBE</button>
	   <button class="vert" onclick="infofunc(event, 'Monitoring')">Monitoring Dan Evaluasi IT</button>
	   <button class="vert" onclick="infofunc(event, 'BP')">Blueprint DED Command Center</button>
	</div>
	
	<div id="MasterPlan" class="verti">
	   <h3>Overview</h3>
	   <p>Dokumen kerangka kerja beserta peta jalannya untuk pembangunan Smart City yang diharapkan dapat memunculkan berbagai inisiatif berdasarkan data permasalahan yang berada di suatu daerah.</p>
	   <h3>benefit</h3>
	   <ul>
			<li>Terbentuknya kerangka kerja tata kelola pemerintah yang berbasis SPBE</li>
			<li>Terciptanya strategi dan arahan pengelolaan serta pengembangan teknologi informasi yang efektif, efisien di lingkungan pemerintahan daerah</li>
	   </ul>
	   <h3>Hasil</h3>
	   <ul>
			<li>Perumusan arah kebijakan pembangunan SPBE di pemerintahan daerah</li>
			<li>Pemetaan kondisi sekarang (exsiting) pemerintahan daerah yang berkaitan dengan sistem informasi/infrastruktur/teknologi untuk mendukung berlangsungnya SPBE</li>
			<li>Menganalisa GAP analisis</li>
			<li>Pembuatan roadmap atau peta jalan pengembangan</li>
	   </ul>
	</div>
	
	
	<div id="SPBE" class="verti">
	   <h3>Overview</h3>
	   <p>Pengembangan Sistem Pemerintahan Berbasis Elektronik (SPBE) diharapkan mampu mendongkrak kualitas Pemda kepada masyarakat karena dapat menghemat waktu layanan, mempercepat proses, menyederhanakan birokrasi, serta hingga transparansi terhadap proses, biaya, maupun waktu pelayanan</p>
	   <h3>benefit</h3>
	   <ul>
			<li>Terbentuknya kerangka kerja tata kelola pemerintah yang berbasis SPBE</li>
			<li>Terciptanya strategi dan arahan pengelolaan serta pengembangan teknologi informasi yang efektif, efisien di lingkungan pemerintahan daerah</li>
	   </ul>
	   <h3>Hasil</h3>
	   <ul>
			<li>Perumusan arah kebijakan pembangunan SPBE di pemerintahan daerah</li>
			<li>Pemetaan kondisi sekarang (exsiting) pemerintahan daerah yang berkaitan dengan sistem informasi/infrastruktur/teknologi untuk mendukung berlangsungnya SPBE</li>
			<li>Menganalisa GAP analisis</li>
			<li>Pembuatan roadmap atau peta jalan pengembangan</li>
	   </ul>
	</div>

	<div id="Monitoring" class="verti">
	   <h3>Overview</h3>
	   <p>Master Plan secara berkala perlu dimonitoring dan evaluasi untuk mengetahui perkembangan program pembangunan yang telah direncanakan dalam sebuah peta jalan (roadmap). Kegiatan ini guna memastikan peta rencana yang telah disusun berjalan dengan lancar dan mendukung tujuan dan operasional organisasi.</p>
	   <h3>benefit</h3>
	   <ul>
			<li>Pemetaan kondisi sekarang (existing) pemerintahan daerah yang berkaitan dengan teknologi informasi dan komunikasi untuk mendukung keberlanjutan program kerja;</li>
			<li>Menganalisis SWOT/GAP analisis;</li>
			<li>Rekomendasi arahan strategis;</li>
			<li>Revisi roadmap atau peta jalan pembangunan.</li>
	   </ul>
	</div>
	
	<div id="BP" class="verti">
	   <h3>Overview</h3>
	   <p>Perancangan / Detail Engineering Design Command Center sebagai dokumen teknis yang dapat digunakan sebagai panduan perencanaan dan rancangan teknis, sehingga dapat digunakan sebagai acuan untuk proses pengadaan command center.</p>
	   <h3>Keluaran</h3>
	   <dl>
			<dt>Desain Teknis</dd>
				<dd>- Desain Kapabilitas</dd>
				<dd>- Aplikasi Pendukung Desain Komponen</dd>
				<dd>- Daftar Peralatan Utama</dd>
				<dd>- Daftar Peralatan Pendukung</dd>
	   </dl>	
		<dl>
			<dt>Desain Ruangan</dd>
				<dd>- Layout</dd>
				<dd>- Ilustrasi 3D</dd>
				<dd>- Daftar Kebutuhan Material</dd>
	   </dl>
	   <dl>
			<dt>Desain Teknis</dd>
				<dd>- Daftar Kebutuhan</dd>
				<dd>- Estimasi Biaya</dd>
	   </dl>
	</div>
</div>
 
<div style="text-align:center; background-color:#dedede">
	<h2>OUR CLIENT</h2>
	<div class="container">
		<img class="img" alt="Menteri Pendidikan" src="./images/Kementrian-Pendidikan-RI.png">
		<img class="img" alt="Menteri Perhubungan" src="./images/Kementrian-Perhubungan-RI.png">
		<img class="img" alt="Menteri Luar Negeri" src="./images/Kementrian-Luar-Negeri-RI-1.png">
		<img class="img" alt="Menteri Olahraga" src="./images/Kementerian-Pemuda-dan-Olahraga.png">
	</div>
</div>

<script>
	function infofunc(e, info) {
	   var i, content, links;
	   content = document.getElementsByClassName("verti");
	   for (i = 0; i < content.length; i++) {
		  content[i].style.display = "none";
	   }
	   links = document.getElementsByClassName("vert");
	   for (i = 0; i < links.length; i++) {
		  links[i].className = links[i].className.replace(" active", "");
	   }
	   document.getElementById(info).style.display = "block";
	   e.currentTarget.className += " active";
	}
document.getElementById("default").click();
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>