<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<style>
.button {
	background-color: #4CAF50;
	border-radius: 8px;
	border: none;
	color: white;
	padding: 10px 14px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
}
.box {
	float: left;
	margin-right: 20px;
}
.carousel-control-next, .carousel-control-prev {
	filter: invert(100%);
}
	</style>
	
    <title>GamaTechno</title>

  </head>
  <body>
  
    <div id="carousel" class="carousel slide" data-ride="carousel" style="height: 570px;">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="text-color: #1c1c1c: border-style:solid">
                <img src="./images/asd.jpg" class="d-block w-100" alt="..." style="height:570px;">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom:13%; text-shadow: 0px 0px 5px #000; color:#FFF;">
                    <h1>Welcome to GamaTechno</h1>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/App-Development.jpg" class="d-block w-100" alt="..." style="height:570px;">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom:13%; text-shadow: 0px 0px 5px #FFF; color:#000;">
                    <h1>Imagining an Advanced Future</h1>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/GTN.jpg" class="d-block w-100" alt="..." style="height:570px;">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom:13%; text-shadow: 0px 0px 5px #FFF; color:#000;">
                    <h1>Enhancing Your Business</h1>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="d-flex mt-4" style="align-items:center; flex-direction:column; font-size:15px">
        <h1>About Gamatechno </h1>
		<h4 style="margin-bottom:30px;">Software House Indonesia</h4>
		
		 <div style="width: 100%; overflow: hidden;">
			<div style="width: 600px; float: left;">
			
			<iframe width="500px" height="285px" style="margin-left:130px"
            src="https://youtube.com/embed/fqcDTVy1BBs">
			</iframe>
			
			</div>
			<div style="margin-left: 50%;">  
				<div style="margin:0px 130px 0px 20px;">
					<p>Gamatechno Software House Indonesia merupakan perusahaan konsultan IT di bidang jasa pembuatan aplikasi dan penyedia solusi teknologi informasi berbasis web, mobile dan desktop yang berkantor pusat di Yogyakarta dan memiliki kantor cabang di Jakarta dan Bali. Resmi berdiri pada 4 Januari 2005 berawal dari pengembangan sistem informasi untuk segmen perguruan tinggi.</p>
					<br>
					<p>Saat ini Gamatechno sebagai software developer terbaik telah melayani lebih dari 400 klien B2B di seluruh Indonesia. Seiring dengan perkembangan perusahaan, Gamatechno memperluas segmen market untuk menyediakan solusi teknologi bagi institusi pemerintah, bisnis, transportasi dan beberapa segmen penting lainnya</p>
					
					<a href="<?php echo site_url('About')?>">
						<button class="button" <?php echo site_url('About')?> >Selengkapnya</button>
					</a>
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
                <a href="#" class="d-flex flex-column align-items-center">
					<img src="./images/Aplikasi-Solo-Destination.jpg" class="d-block w-100" alt="..." style="padding-bottom:10px" width="240" height="160">
					<center>
                    <h5 class="card-title" style="font-size:23px;">IT Support</h5>
				</a>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>
				
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
				</a>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>
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
				</a>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>

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
				</a>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies leo nunc, eget tempus sem ullamcorper ac. Integer molestie mattis eros sed sollicitudin. </p>
					</center>
				
            </div>
        </div>
    </div>
	</div>

	<br>
    <div style="font-weight:bolder; font-size:50px; color: Black; text-align:center; align:center;">
        <p>Success Story</p>
		
        <iframe width="800px" height="400px" style="margin-bottom:20px"
            src="https://youtube.com/embed/wvwPhFaEXSU">
        </iframe> 
    </div>

    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>