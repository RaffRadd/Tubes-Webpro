<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>GamaTechno</title>

    <style>
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
		.box{
			float:left;
			margin-right:20px;
		}
		.clear{
			clear:both;
}
    </style>
  </head>
  <body>
  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/asd.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom:330px; text-shadow: 0px 2px #000000">
                    <h1>Welcome to GamaTechno</h1>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/App-Development.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom:520px;">
                    <h1 style="color:black; text-shadow: 2px 0px #FFFFFF">Imagining an Advanced Future</h1>
                    <h3 style="color:black; text-shadow: 2px 0px #FFFFFF">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/GTN.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom:395px; text-shadow: 0px 2px #000000">
                    <h1>Enhancing Your Business</h1>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="d-flex mt-4" style="align-items:center; flex-direction:column; font-size:15px;">
        <h1>About Gamatechno </h1>
		<h4>Software House Indonesia</h4>
		<center>
        <p style="padding-left: 20px; padding-right: 20px;">Gamatechno Software House Indonesia merupakan perusahaan konsultan IT di bidang jasa pembuatan aplikasi dan penyedia solusi teknologi informasi berbasis web, mobile dan desktop yang berkantor pusat di Yogyakarta dan memiliki kantor cabang di Jakarta dan Bali. Resmi berdiri pada 4 Januari 2005 berawal dari pengembangan sistem informasi untuk segmen perguruan tinggi.</p>
		<a class="nav-link" href="<?php echo site_url('About')?>">
			<button class="button" <?php echo site_url('About')?> >Selengkapnya</button>
		</a>
		
		</center>
    </div>
	
	<br>
    <div class="service ml-5" style="font-weight:bolder; font-size:50px; color: black;text-align:center; margin-right:46px;">
        <p>Services</p>
    </div>
    <div class="list-service d-flex flex-row justify-content-between m-5">
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
					<img src="./images/Aplikasi-Solo-Destination.jpg" class="d-block w-100" alt="..." style="padding-bottom:10px" width="240" height="160">
					<center>
                    <h5 class="card-title" style="font-size:23px;">IT Support</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>
				</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
					<img src="./images/App-Development.jpg" class="d-block w-100" alt="..." style="padding-bottom:10px" width="240" height="160">
					<center>
                    <h5 class="card-title" style="font-size:23px;">Mobile Development</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>
				</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
					<img src="./images/dashboard.jpg" class="d-block w-100" alt="..." style="padding-bottom:10px" width="240" height="160">
					<center>
                    <h5 class="card-title" style="font-size:23px;">IT Consultation</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>
				</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
					<img src="./images/Dynamic-Price-Setup.jpg" class="d-block w-100" alt="..." style="padding-bottom:10px" width="240" height="160">
					<center>
                    <h5 class="card-title" style="font-size:23px;">Digital Design</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>
				</a>
            </div>
        </div>
    </div>
	
	<br>
    <div class="cdental ml-5" style="font-weight:bolder; font-size:50px; color: Black; text-align:center">
        <p>Success Story</p>
        <iframe width="1366px" height="768px" style="margin-bottom:20px"
            src="https://youtube.com/embed/wvwPhFaEXSU">
        </iframe> 
    </div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        $('.carousel').carousel({
            interval: 1000
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>