<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery | Taarangana'18</title>
<?php include('../module/head.php') ?>
<link rel="stylesheet" type="text/css" href="fancybox\dist\jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/style.css" />
	
	<script src="js/aframe.min.js"></script>
    <script src="js/build1.js"></script><!--for text -->
	<script src="js/build2.js"></script><!--for audio bars -->
	
	<script src="font/Dawning-of-a-New-Day_Regular.js"></script>
    <script src="font/ExoBlack_Regular.js"></script>
    <script src="font/ExoBoldItalic.js"></script>
    <script src="js/aframe-orbit-controls-component.js"></script>
    <script src="js/kframe/aframe-look-at-component.min.js"></script>
    <script src="js/isvr-vr-mode.js"></script>
    <script src="js/isvr-model-center.js"></script>
    <script src="js/isvr-hotspot.js"></script>
    <script src="js/isvr-annotation.js"></script>
    <script src="js/isvr-teleportation.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
    <body class="bg">
		<?php include('../module/navbar.php') ?>
        
		<a-scene vr-mode-ui="enabled: false">
	
	<a-assets>
        <img id="pink" src="https://img.gs/bbdkhfbzkk/stretch/http://i.imgur.com/1hyyIUi.jpg" crossorigin="anonymous">
        <img src="https://img.gs/bbdkhfbzkk/2048x1024,stretch/http://i.imgur.com/WMNH2OF.jpg" id="chrome" crossorigin="anonymous">
		<a-mixin id="bar" geometry="primitive: box;width:3;depth:3;height:7;"></a-mixin>
        </a-assets>
	  
	<!--camera-->
                <a-entity id="camera" camera="fov:60" position="8 1 4" rotation="-7 50 3" cursor="rayOrigin:mouse" orbit-controls="
				maxPolarAngle:3.142;
				target:#model;
				minDistance:18;
				maxDistance:35" raycaster="origin:4.981809616088867 2.0047125816345215 0.3100601136684418;direction:-0.9625493654871191 -0.11539700112136334 -0.24532071076967893;useWorldCoordinates:true">
                </a-entity>				
				
     <!--model-->     
     <a-entity> 
          <a-curvedimage src="img/bg/pic1.png" radius="18" theta-length="28" height="9" theta-start="0"></a-curvedimage>
		   <a-curvedimage src="img/bg/pic2.png" radius="18" theta-length="28" height="9" theta-start="30"></a-curvedimage>
		    <a-curvedimage src="img/bg/pic3.png" radius="18" theta-length="28" height="9" theta-start="60"></a-curvedimage>
			 <a-curvedimage src="img/bg/pic4.png" radius="18" theta-length="28" height="9" theta-start="90"></a-curvedimage>
			 <a-curvedimage src="img/bg/pic5.jpg" radius="18" theta-length="28" height="9" theta-start="120"></a-curvedimage>
			  <a-curvedimage src="img/bg/pic6.png" radius="18" theta-length="28" height="9" theta-start="150"></a-curvedimage>
			  <a-curvedimage src="img/bg/pic7.png" radius="18" theta-length="28" height="9" theta-start="180"></a-curvedimage>
			  <a-curvedimage src="img/bg/pic8.png" radius="18" theta-length="28" height="9" theta-start="210"></a-curvedimage>
			 <a-curvedimage src="img/bg/pic9.png" radius="18" theta-length="28" height="9" theta-start="240"></a-curvedimage>
			  <a-curvedimage src="img/bg/pic10.png" radius="18" theta-length="28" height="9" theta-start="270"></a-curvedimage>
			  <a-curvedimage src="img/bg/pic11.png" radius="18" theta-length="28" height="9" theta-start="300"></a-curvedimage>
			 <a-curvedimage src="img/bg/pic12.png" radius="18" theta-length="28" height="9" theta-start="330"></a-curvedimage>
			  <a-curvedimage src="img/bg/pic13.png" radius="18" theta-length="28" height="9" theta-start="330"></a-curvedimage>
	    <a-curvedimage src="img/bg/pic14.png" radius="18" theta-length="28" height="9" theta-start="330"></a-curvedimage>
	    <a-animation attribute="rotation" from="0 0 0" to="0 360 0" dur="30000" easing="linear" repeat="indefinite"></a-animation>
	    </a-entity>
	  
            <a-entity id="model" data-vrscale="0.5 0.5 0.5" data-vr-model-y-axis="0.7" position="3 -5 0">             
                
<a-cylinder  src="img/bg/stage.jpg" height="1.5" radius="1.5" position="-3 0 -3" scale="3 0.5 3" material="" geometry=""></a-cylinder>	
<a-entity position="-5 0.5 0" rotation="4 43 0">
        <a-entity rotation="0 0 5" position="0 2 0.2" text="text: Coming Soon; font:dawning of a new day; bevelEnabled: true; bevelSize: 0.08; bevelThickness: 0.05; curveSegments: 12; size: 1; height: 0;" material="color:#ffff00; metalness:1; roughness: 0; sphericalEnvMap: #pink;"></a-entity>
		<a-entity>
        <a-entity position="-0.5 0.3 -0.5" scale="0.6 1.2 1" text="text: TAARANGANA; font: exo 2 black; bevelEnabled: true; bevelSize: 0.1; bevelThickness: 0.1; curveSegments: 1; size: 1.5; height: 0.5;" material="color:#ffccff; metalness:0.9; roughness: 0.05; sphericalEnvMap: #chrome;">
		 <!--<a-animation attribute="rotation"
               dur="10000"
               fill="forwards"
               to="0 360 0"
               repeat="indefinite" direction="alternate"></a-animation>-->
		</a-entity>
		</a-entity>
      </a-entity>
	  
	<a-box src="img/logo/logo.jpg" id="box" position="-3 5 -3" rotation="-34 47.27411100000999414 34" scale="2 2 2" material="" geometry="">
	<a-animation attribute="rotation" from="-34 0 34" to="-34 360 34" dur="9000" easing="linear" repeat="indefinite"></a-animation></a-box>
	
	<a-animation attribute="rotation" from="0 0 0" to="0 360 0" dur="100000" easing="linear" repeat="indefinite"></a-animation>
	
				</a-entity>        
				
			<a-entity light="color:#BBB;type:ambient" data-aframe-default-light="" aframe-injected=""></a-entity>
			<a-entity light="intensity:0.6" position="-0.5 1 1" data-aframe-default-light="" aframe-injected=""></a-entity>
			
      <a-entity>
        <a-cylinder position="0 0.5 0" radius="19" height="12" side="back" src="img/bg/t3.jpg"
                    color="#FFF"></a-cylinder>
      </a-entity>
    </a-scene>
		
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.fullpage.js"></script>
        <script src="../assets/js/mgGlitch.min.js"></script>
        <script src="../assets/js/iscroll.js"></script>
        <script src="../r.min.js"></script>
        <script src="../assets/js/cookie.min.js"></script>
        <script src="../assets/js/script.js"></script>   
    </body>
</html>