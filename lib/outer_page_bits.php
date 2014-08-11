<?php
$frag_width = isset($_GET['frag_width']) ? filter_var($_GET['frag_width'], FILTER_SANITIZE_NUMBER_INT) : 320;
$full_page = !isset($_GET['frag_width']);

function render_header() {
	global $full_page;
	if ($full_page) { ?>
	<!doctype html>
	<html class="no-js" lang="en">
	  	<head>
		    <meta charset="utf-8" />
		    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		    <title>DESIGNMAGAZINE | PORTFOLIO</title>
		    <link rel="stylesheet" href="css/app.css" />
		    <script src="bower_components/modernizr/modernizr.js"></script>
	  	</head>
		
		<body>

			<div class="container-narrow">
				<div id="pageBody">
					<div id="swipeview-slider">
						<div id="swipeview-masterpage-0">
							<!-- Leave empty. First lefthand content will load here -->
						</div>
						<div id="swipeview-masterpage-1">

		<?php
	}
}

function render_footer() {
	global $full_page;
	if ($full_page) { ?>
			

						</div><!--END/swipeview-masterpage-1 -->
						<div id="swipeview-masterpage-2">
						     <!--Leave empty. First righthand content will load here -->
						</div>
					</div><!--END/swipeview-slider -->
				</div><!--END/pageBody -->

						<p class="alert footer">This is how we're highlighting Ajax-delivered content in this demo:</p>
						<div class="row-fluid k">
							<div class="span6 ajax-loaded">Inner content loaded by Ajax from a PHP response</div>
							<div class="span6 ajax-loaded from-cache">Inner content loaded by Ajax from cache.</div>
						</div>

			</div><!--END/container-narrow -->

			<!-- 		    <section id="contact" class="section dark">
			    <div class="wrapper">
			        <div class="content">
			            <h1>Co
			                <span class="a2">n</span>
			                <span class="a3">t</span>
			                <span class="a2">a</span>ct
			            </h1>
			            <h2>
			                <span>1MD </span>| One million dollars
			            </h2>
			            <p class="adress">4 Avenue de l’Yser  <br />1040 Brussels - Belgium<br />
			                <a href="mailto:info@1md.be">info@1md.be</a> <br />
			                <a href="mailto:jobs@1md.be">jobs@1md.be</a> 
			                <br />+32 27334860
			            </p>
			        </div>
			        <img src="img/bg_contact.jpg" alt="">

			    </div>
			</section>

			<section id="social" class="section">
			    <div class="wrapper">
			        <ul>
			            <li class="facebook">
			                <a href="https://www.facebook.com/onemd" target="_blank" class="overlay"><span class="out"></span><span class="on"></span></a>
			            </li>
			            <li class="twitter">
			                <a href="https://twitter.com/1MD" target="_blank" class="overlay"><span class="out"></span><span class="on"></span></a>
			            </li>
			            <li class="vimeo">
			                <a href="http://vimeo.com/onemd" target="_blank" class="overlay"><span class="out"></span><span class="on"></span></a>
			            </li>
			            <li class="behance">
			                <a href="https://www.behance.net/1md" target="_blank" class="overlay"><span class="out"></span><span class="on"></span></a>
			            </li>
			            <li class="linkedin">
			                <a href="https://www.linkedin.com/company/1md" target="_blank" class="overlay"><span class="out"></span><span class="on"></span></a>
			            </li>
			        </ul>
			    </div>
			</section> -->

		    <footer id="footer" class="section">
		        <div class="wrapper">
		            <p>Designmagazine © 2014   •   All rights reserved   •   <a href="general-conditions">General sales conditions</a></p>
		        </div>                  
		    </footer>

			<a href="javascript:void(0)" class="prev btn btn-large"><</a>
			<a href="javascript:void(0)" class="next btn btn-large">></a>

			<script src="bower_components/jquery/dist/jquery.min.js"></script>
			<script src="bower_components/foundation/js/foundation.min.js"></script>
			<script src="bower_components/foundation/js/foundation/foundation.orbit.js"></script>
			<script src="js/app.js"></script>
			<script src="js/vendor.min.js"></script>
			<!-- <script src="js/swiper.min.js"></script> -->

			<script type="text/javascript">

			  $(document).ready(function() {
			    $("#owl-demo").owlCarousel({
			      autoPlay: false,
			      items : 4,
			      navigationText: false,
			      navigation : true,
			      pagination : false,
			      itemsDesktop : [1199,3],
			      itemsDesktopSmall : [979,3]
			    });

			  });
			</script>
			<script>
				docReady( function() {
				  var msnry = new Masonry( '.block-portfolio', {
				    isFitWidth: true,
				    columnWidth: 50%,
				    transitionDuration: 500,
				    'gutter': '.gutter-sizer',
				    'itemSelector': '.item-masonry'
				  });
				});
			</script>
			<script type="text/javascript">
			  $(".next-slide").click(function() {
			      $("#portfolio-boxes-orbit").siblings(".orbit-next").click();
			      //$("#portfolio-boxes-orbit").siblings(".orbit-timer").click(); // Remove this line to pause the orbit. (it pauses whenever you change slides by default)
			  });
			</script>

			<!-- <script>
			    
			    var baseUrl = '/newapp/';
			
				var mySwipe = $('#pageBody').responsiveSwipe({
					edition: [
						baseUrl + 'index.php',
						baseUrl + 'setup.php',
						baseUrl + 'disclaimer.php'
					],
					widthGuess: 0,
					emulator: window.location.hash.match(/emulator/)
				});
			
				
				(function($){	
			
				//$(document).ready(function(){
			
					$(document).on('click', '.next', function (e) {
						e.preventDefault();
						mySwipe.gotoNext();
					});
			
					$(document).on('click', '.prev', function (e) {
						e.preventDefault();
						mySwipe.gotoPrev();
					});
			
				})(jQuery);
			</script> -->
		</body>
	</html>
		<?php
	}

}


