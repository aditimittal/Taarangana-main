<!DOCTYPE html>
<html lang="en">
<head>
<title>About | Taarangana'18</title>
<?php include('../module/head.php') ?></head>
    <body>
<?php include('../module/navbar.php') ?>
        <div id="fullpage">
            <section id="venue-opening" class="section bg">
                <div class="container narrow">
                    <div class="letters wow fadeIn"><span class="letter">O</span><span class="letter">u</span><span class="letter">r</span> <span class="letter text-danger">v</span><span class="letter text-danger">e</span><span class="letter text-danger">n</span><span class="letter text-danger">u</span><span class="letter text-danger">e</span></div>
                    <h1 class="title-45 wow fadeInUp">The <strong>extraordinary</strong> Royal Hospital Kilmainham.</h1>
                </div>
                <img data-hex="62f1d2,042a3b" src="../assets/img/RHK%20Venue2.png" class="venue-opening-img">
            </section>
            <section id="map" class="section bg09">
                <div class="container">
                    <div class="address wow fadeInUp">
                        <address class="visible-xs">Located in Dublin 8, <br>The Royal Hospital Kilmainham is one of the finest 17th-century buildings in Ireland.</address>
                    </div>
                    <div class="map wow fadeInUp" data-wow-delay=".2s">
                        <div id="google-map"></div>
                    </div>
                    <div class="address wow fadeInUp">
                        <address class="hidden-xs">Located in Dublin 8, <br>The Royal Hospital Kilmainham is one of the finest 17th-century buildings in Ireland.</address>
                        
                    </div>
                </div>
            </section>
            <section id="how-to-get" class="section">
                <div class="side-wrap clearfix">
                    <div class="left-side bg08 anim">
                        <div class="inner-content center">
                            <div class="left-middle no-xs">
                                <h2 class="title-38"><strong>How to</strong> get here.</h2>
                                <h3>RAIL</h3>
                                <p>Heuston station is located about 5 minutes walk from The RHK.</p>
                                <h3>LUAS</h3>
                                <p>The Luas Red Line will take you to Heuston Station or James’s Hospital station, both about a 5 minute walk from the RHK.</p>
                                <h3>DUBLIN BIKES</h3>
                                <p>There are two stations located in the Kilmainham area beside The RHK.</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-side bg03 anim">
                        <div class="inner-content center">
                            <div class="left-middle no-xs">
                                <h3>DUBLIN BUS</h3>
                                <p>To Heuston Station (five minutes walk via Military Road): 26 from Wellington Quay; 51, 79 from Aston Quay; 90 Dart Feeder Bus from Connolly and Tara Street stations. To James Street (5 minutes walk via steps to Bow Lane onto Irwin Street and Military Road): 123 from O’Connell Street/Dame Street; 51B, 78A from Aston Quay.</p>
                                <h3>BY CAR</h3>
                                <p>10 minute drive from city centre. Car parking available on the grounds.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			</div>
            <?php include('../module/footer.php') ?>
        
        <script>
            $(function(){
                $(window).resize(function(){
                    if($(window).width()<768){
                        if($('#fullpage').hasClass('fullpage-wrapper')) $.fn.fullpage.destroy('all');
                        $('#venue-opening').height($(window).height())
                    } else {
                        $('#fullpage').fullpage({
                            scrollBar:true
                        });
                    }
                }).trigger('resize');
                
                var lat = 53.343029, lng = -6.300108
                var mapOption = {
                    styles: [
                        {
                            "featureType": "all",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "saturation": "-100"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "lightness": 40
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#032635"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#3c5f58"
                                },
                                {
                                    "saturation": "0"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#062e3c"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#4d6059"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#0a3c52"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#1c4b5f"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#7f8d89"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#fa2e70"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#2b3638"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#2b3638"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#62f1d2"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#24282b"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        }
                    ],
                    zoom: 16, 
                    center: {lat: lat, lng: lng}
                }
                var map = new google.maps.Map(document.getElementById('google-map'), mapOption);
                var marker = new google.maps.Marker({
                    position: {lat: lat, lng: lng},
                    map: map,
                    icon: 'assets/img/map-marker.png'
                });
            });
        </script>
        
    </body>

<!-- Mirrored from www.404.ie/venue by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2017 04:31:10 GMT -->
</html>