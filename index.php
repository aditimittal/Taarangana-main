<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="author" content="404">
		<link rel="shortcut icon" href="assets/img/favicon.png">
        <title>Taarangana'18</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/slick.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/jquery.fullpage.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		<script src="assets/js/aframe-master.js"></script>
		<script src="assets/js/play-all-model-animations.js"></script>
		</head>
        <style>
        a-scene{z-index:1000;}
        .page-loading{z-index:1000;}
        .hamburger{z-index:100000;}
    </style>
<body onload="myFunction()">
		<audio loop src="">
    Your browser does not support the <code>audio</code> tag
</audio> 
<div id="mydiv">
		<div class="navbar navbar-fixed-top navbar-brand">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="hamburger" type="button" data-toggle="navigation">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>                    
                </div>
            </div>
        </div>      
		
               
<div class="menu-backdrop"></div>
        <div id="menu">
            <button class="hamburger" type="button" data-toggle="navigation">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="menu-wrap">
                <div class="menu-nav">
                    <div class="left-middle">
                        <ul class="nav">
                            <li class="first active"><a href="/"><span>Home</span></a></li>							
							<li><a href="about-clg/"><span>AboutUs</span></a></li>
							<li><a href="events/"><span>Events</span></a></li>
							<li><a href="schedule/"><span>Schedule</span></a></li>
							<li><a href="pronight/"><span>Pronight</span></a></li>							
							<li><a href="gallery/"><span>Gallery</span></a></li>
							<li><a href="sponsors/"><span>Sponsors</span></a></li>
							<li class="last"><a href="meet-team/"><span>Meet-Team</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-text">
                    <div class="center-middle">
                        <div class="menu-text-inner">
                            <div class="menu-logo">
                                <img src="assets/img/logo.gif" alt="">
                            </div>
                            <div class="menu-event">
                                <div class="date">Dublin, 7 October 2017</div>
                                <div class="location">The Royal Hospital Kilmainham</div>
                                <p style="text-transform:lowercase; font-weight: bold; font-family:"andale_mono"; font-size:16px;color:#042a3b;">Ticket registration is from 10am on Monday 11th September.<br>You can email us now at <a href="mailto:hello@404.ie" style="color:#fa2e70">hello@404.ie</a> and we’ll send you the link to register.</p>
                                <a href="https://www.eventbrite.ie/e/404-tickets-35232778188" target="_blank" class="btn btn-info"><span>I WANT TO GO</span></a>
                                <button type="button" class="btn btn-info btn-register-interest"><span>I WANT TO GO</span></button>
                                <div class="social">
                                    <a href=" https://twitter.com/404events" target="_blank"><i class="ic-twitter2"></i></a>
                                    <a href="https://www.facebook.com/404events/" target="_blank"><i class="ic-facebook"></i></a>
                                    <a href="https://www.instagram.com/404_events/" target="_blank"><i class="ic-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
		<div class="page-loading hidden-xs hidden-sm">
            <div class="loader" id="loader"></div>
           <!--  <span class="text">Loading...</span> -->
        </div>
        
		<!-- <div class="homepage-video hidden-xs hidden-sm">
            <video id="opening-video" class="background-video">
            </video>
        </div> -->

        <a-scene  vr-mode-ui="enabled: false">
      <a-assets>
        <a-asset-item id="cityModel" src="https://cdn.aframe.io/test-models/models/glTF-2.0/virtualcity/VC.gltf"></a-asset-item>
      </a-assets>

      <a-entity gltf-model="#cityModel" play-all-model-animations></a-entity>
    </a-scene> 

        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 20000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.fullpage.js"></script>
        <script src="assets/js/mgGlitch.min.js"></script>
        <script src="assets/js/iscroll.js"></script>
        <script src="assets/js/validator.min.js"></script>
        <script src="assets/js/cookie.min.js"></script>
        <script src="assets/js/script.js"></script>   
    </body>
</html>
