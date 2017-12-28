<!DOCTYPE html>
<html lang="en">
<head>
<title>Events | Taarangana'18</title>
<?php include('../module/head.php') ?></head>
<body class="bg">
	<?php include('../module/navbar.php') ?>   
        
		<section id="speakers-opening" class="bg06">
            <div class="container narrow">
                <h1 class="title-45 wow fadeInUp">Our speaker line up features <strong>trailblazers</strong> at the top of their game.</strong></h1>
                <div class="letters wow fadeInUp"><span class="letter">G</span><span class="letter">a</span><span class="letter">i</span><span class="letter">n</span> <span class="letter text-danger">i</span><span class="letter text-danger">d</span><span class="letter text-danger">e</span><span class="letter text-danger">a</span><span class="letter text-danger">s</span><span class="text-danger">,</span> <span class="letter text-danger">i</span><span class="letter text-danger">n</span><span class="letter text-danger">s</span><span class="letter text-danger">i</span><span class="letter text-danger">g</span><span class="letter text-danger">h</span><span class="letter text-danger">t</span><span class="letter text-danger">s</span> <span class="letter text-danger">+</span> <span class="letter text-danger">k</span><span class="letter text-danger">n</span><span class="letter text-danger">o</span><span class="letter text-danger">w</span><span class="letter text-danger">l</span><span class="letter text-danger">e</span><span class="letter text-danger">d</span><span class="letter text-danger">g</span><span class="letter text-danger">e</span><span class="text-danger">.</span></div>
            </div>
        </section>
		
		<section id="speakers">
            <div class="container">
                <div class="tab-navigation wow fadeInUp">
                    <ul class="nav hidden-xs" role="tablist">
                        <li class="active"><a href="#about-clg" class="btn" data-toggle="tab">About IGDTUW</a></li>
						<li><a href="#about-taarangana" class="btn" data-toggle="tab">About Taarangana</a></li>                 
                    </ul>
                    <div class="dropdown visible-xs">
                        <button type="button" class="btn not-anim btn-border btn-block dropdown-toggle" data-toggle="dropdown">
                        <span class="text">About IGDTUW</span> <i class="ic-chevron-thin-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#about-clg">About IGDTUW</a></li>
                            <li ><a href="#about-taarangana">About Taarangana</a></li>                   
                        </ul>
                    </div>
                </div>
				
				<div class="tab-content">
				<div class="tab-pane active" id="about-clg">
				
				</div>
				
				
					<div class="tab-pane" id="about-taarangana">
					
				
					</div>
				</div>
			</div>
		</section>
        
        <?php include('../module/footer.php') ?>            
        <script>
            $(function(){
                function getParameterByName(name, url) {
                    if (!url) url = window.location.href;
                    name = name.replace(/[\[\]]/g, "\\$&");
                    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                        results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return '';
                    return decodeURIComponent(results[2].replace(/\+/g, " "));
                }
                if(getParameterByName('tab')!=null){
                    $('.tab-navigation .nav>li>a[href="#'+getParameterByName('tab')+'"]').tab('show')
                }
                $('[data-toggle="bio-popup"]').click(function(e){
                    $('body').addClass('bio-open')
                    $($(this).data('bio')).fadeIn()
                    history.pushState(null, '404', $(this).attr('href'))

                    $('.bio-slick:visible').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                        var prevText = $('.bio-item.slick-current:visible').prev('.bio-item').find('h4').text().split(' ').join('<br>')
                        var nextText = $('.bio-item.slick-current:visible').next('.bio-item').find('h4').text().split(' ').join('<br>')
                        var prevUrl = $('.bio-item.slick-current:visible').prev('.bio-item').data('url')
                        var nextUrl = $('.bio-item.slick-current:visible').next('.bio-item').data('url')

                        $('.bio-slick:visible').find('.slick-prev span').html(prevText)
                        $('.bio-slick:visible').find('.slick-prev').attr('href', prevUrl)
                        var mprev = (100-$('.bio-slick:visible').find('.slick-prev span').height())/2;
                        $('.bio-slick:visible').find('.slick-prev span').css('margin-top', mprev)
                        $('.bio-slick:visible').find('.slick-next span').html(nextText)
                        $('.bio-slick:visible').find('.slick-next').attr('href', nextUrl)
                        var mnext = (100-$('.bio-slick:visible').find('.slick-next span').height())/2;
                        $('.bio-slick:visible').find('.slick-next span').css('margin-top', mnext)

                        history.pushState(null, '404', $('.bio-item.slick-current:visible').data('url'))
                    });
                    var initSlide = $(this).parents('.col-sm-4').index()
                    $('.bio-slick:visible').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: false,
                        autoplay: false,
                        infinite: false,
                        initialSlide: initSlide,
                        prevArrow: '<a href="#" onclick="javascript:void(0)" class="slick-prev"><i class="ic-angle-left"></i> <span></span></a>',
                        nextArrow: '<a href="#" onclick="javascript:void(0)" class="slick-next"><i class="ic-angle-right"></i> <span></span></a>'
                    });
                    $('.bio-content').each(function(i, el){
                        new IScroll(el, { mouseWheel: true });
                    })
                    e.preventDefault()
                })
                $('[data-dismiss="bio-popup"]').click(function(){
                    history.pushState(null, '404', 'speakers')
                    $('body').removeClass('bio-open')
                    $(this).parents('.bio-popup').fadeOut()
                    if($('.bio-slick:visible').hasClass('slick-slider')) $('.bio-slick:visible').slick('unslick');

                })
                $('[data-toggle="bio-right"]').click(function(e){
                    $('body').addClass('bio-open')
                    $('.bio-right').removeClass('active')
                    $($(this).attr('href')).addClass('active')
                    $('.bio-right-inner').each(function(i, el){
                        new IScroll(el, { mouseWheel: true });
                    })
                    e.preventDefault()
                })
                $('[data-dismiss="bio-right"]').click(function(){
                    $('body').removeClass('bio-open')
                    $(this).parents('.bio-right').removeClass('active')
                })
                $('.tab-navigation .dropdown-menu>li>a').click(function(e){
                    $('.tab-navigation .dropdown-menu>li').removeClass('active')
                    $(this).parents('li').addClass('active')
                    $('.tab-navigation').find('.dropdown-toggle .text').text($(this).text())
                    $('.tab-navigation .nav>li>a[href="'+$(this).attr('href')+'"]').click()
                    e.preventDefault()
                })


                if(getParameterByName('installation')!=null){
                     $('[data-toggle="bio-popup"][href="speakers/?installation='+getParameterByName('installation')+'"]').click()
                }
                
                if(getParameterByName('speaker')!=null){
                     $('[data-toggle="bio-popup"][href="speakers/?speaker='+getParameterByName('speaker')+'"]').click()
                }
            });
        </script>
    </body>
</html>