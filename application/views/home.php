<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/home.css" rel="stylesheet" type="text/css">

	<title>GamaTechno</title>
</head>

<body>
	<div class="carousel slide" data-ride="carousel" id="carousel" style="height: 570px;">
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#carousel">
			</li>


			<li data-slide-to="1" data-target="#carousel">
			</li>


			<li data-slide-to="2" data-target="#carousel">
			</li>
		</ol>


		<div class="carousel-inner">
			<div class="carousel-item active" style="text-color: #1c1c1c: border-style:solid">
				<img alt="..." class="d-block w-100" src="./images/asd.jpg" style="height:570px;">

				<div class="carousel-caption d-none d-md-block" style="margin-bottom:13%; text-shadow: 0px 0px 5px #000; color:#FFF;">
					<h1>Welcome to GamaTechno</h1>


					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
				</div>
			</div>


			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="./images/App-Development.jpg" style="height:570px;">

				<div class="carousel-caption d-none d-md-block" style="margin-bottom:13%; text-shadow: 0px 0px 5px #FFF; color:#000;">
					<h1>Imagining an Advanced Future</h1>


					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h3>
				</div>
			</div>


			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="./images/GTN.jpg" style="height:570px;">

				<div class="carousel-caption d-none d-md-block" style="margin-bottom:13%; text-shadow: 0px 0px 5px #FFF; color:#000;">
					<h1>Enhancing Your Business</h1>


					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" data-slide="prev" href="#carousel" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carousel" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
	</div>


	<div class="d-flex mt-4" style="align-items:center; flex-direction:column; font-size:15px">
		<h1>About Gamatechno</h1>


		<h4 style="margin-bottom:30px;">Software House Indonesia</h4>


		<div style="width: 100%; overflow: hidden;">
			<div style="width: 600px; float: left;">
				<iframe height="285px" src="https://youtube.com/embed/fqcDTVy1BBs" style="margin-left:130px" width="500px"></iframe>
			</div>


			<div style="margin-left: 50%;">
				<div style="margin:0px 130px 0px 20px;">
					<p>Gamatechno Software House Indonesia merupakan perusahaan konsultan IT di bidang jasa pembuatan aplikasi dan penyedia solusi teknologi informasi berbasis web, mobile dan desktop yang berkantor pusat di Yogyakarta dan memiliki kantor cabang di Jakarta dan Bali. Resmi berdiri pada 4 Januari 2005 berawal dari pengembangan sistem informasi untuk segmen perguruan tinggi.</p>
					<br>


					<p>Saat ini Gamatechno sebagai software developer terbaik telah melayani lebih dari 400 klien B2B di seluruh Indonesia. Seiring dengan perkembangan perusahaan, Gamatechno memperluas segmen market untuk menyediakan solusi teknologi bagi institusi pemerintah, bisnis, transportasi dan beberapa segmen penting lainnya</p>
					<a href="<?php echo site_url('contactUs')?>"><button class="button">Selengkapnya</button></a>
				</div>
			</div>
		</div>
	</div>
	<br>


	<div style="background-color:#e3e3e3; padding-top:50px; padding-bottom:50px;">
		<div class="service ml-5" style="font-weight:bolder; font-size:50px; color: black;text-align:center; margin-right:46px;">
			<p>Services</p>
		</div>


		<div class="list-service d-flex flex-row justify-content-between m-5">
			<div class="card" style="width: 18rem; border:none;">
				<div class="card-body d-flex flex-column">
					<a class="d-flex flex-column align-items-center" href="#"><img alt="..." class="d-block w-100" height="160" src="./images/Aplikasi-Solo-Destination.jpg" style="padding-bottom:10px" width="240">

					<center>
						<h5 class="card-title" style="font-size:23px;">IT Support</h5>
					</center></a>

					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin.</p>
				</div>
			</div>


			<div class="card" style="width: 18rem; border:none;">
				<div class="circle">
				</div>


				<div class="card-body d-flex flex-column">
					<a class="d-flex flex-column align-items-center" href="#"><img alt="..." class="d-block w-100" height="160" src="./images/App-Development.jpg" style="padding-bottom:10px" width="240">

					<center>
						<h5 class="card-title" style="font-size:23px;">Mobile Development</h5>
					</center></a>

					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin.</p>
				</div>
			</div>


			<div class="card" style="width: 18rem; border:none;">
				<div class="circle">
				</div>


				<div class="card-body d-flex flex-column">
					<a class="d-flex flex-column align-items-center" href="#"><img alt="..." class="d-block w-100" height="160" src="./images/dashboard.jpg" style="padding-bottom:10px" width="240">

					<center>
						<h5 class="card-title" style="font-size:23px;">IT Consultation</h5>
					</center></a>

					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin.</p>
				</div>
			</div>


			<div class="card" style="width: 18rem; border:none;">
				<div class="circle">
				</div>


				<div class="card-body d-flex flex-column">
					<a class="d-flex flex-column align-items-center" href="#"><img alt="..." class="d-block w-100" height="160" src="./images/Dynamic-Price-Setup.jpg" style="padding-bottom:10px" width="240">

					<center>
						<h5 class="card-title" style="font-size:23px;">Digital Design</h5>
					</center></a>

					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin.</p>
				</div>
			</div>
		</div>
	</div>
	<br>


	<div style="font-weight:bolder; font-size:50px; color: Black; text-align:center; align:center;">
		<p>Success Story</p>
		<iframe height="400px" src="https://youtube.com/embed/wvwPhFaEXSU" style="margin-bottom:20px" width="800px"></iframe>
	</div>
	<script>
	       $('.carousel').carousel({
	           interval: 2000
	       })
	</script> 
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>