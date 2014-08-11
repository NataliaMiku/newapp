<?php

require 'lib/utils.php';
require 'lib/outer_page_bits.php';

render_header();

// Useful to have no space before pageBodyInner - we check it with regex
?>
<div class="pageBodyInner">

  <?php nav_header(); ?>  
      
      <div class="content">
            <div id="main" class="main-content">

                <?php if ($frag_width >= 1920) : ?>
                <div class="hero-unit success"><p>This is content for a huge device.</p><small>If you're seeing this you're probably not on a medium desktop.</small></div>
                <?php elseif ($frag_width >= 1440) : ?>
                <div class="hero-unit info"><p>This is content for a big device.</p><small>If you're seeing this you're probably not on a mobile.</small></div>
                <?php elseif ($frag_width >= 1024) : ?>
                <div class="hero-unit info"><p>This is content for a medium device.</p><small>If you're seeing this you're probably not on a desktop PC.</small></div>
                <?php else: ?>
                <div class="hero-unit error"><p>This is content for a small device.</p><small>If you're seeing this you're probably on a smartphone.</small></div>
                <?php endif; ?>
                
                <section id="top-section" class="">
                    <div class="row paddingless full-width">
                        <div class="small-12 medium-12 large-12 columns text-center">
                            <ul id="animated-orbit" class="example-orbit" data-orbit data-options="animation:fade;
                                                                              pause_on_hover:true;
                                                                              animation_speed:500;
                                                                               slide_number:false;
                                                                               bullets:false; 
                                                                               timer:false;">
                                <li id="slide1">
                                  <div class="row">
                                    <div class="small-12 medium-12 large-12 columns text-center">
                                        <div class="banner-title">
                                        <h1 class="fadeInDown"><span class="phone-title-big">WEBSITES</span> FOR ANYONE</h1>
                                            <h2 class="fadeInUp">WEB DESIGN
                                                <span>
                                                    <i class="fa fa-circle"></i>
                                                </span>
                                                FRONT-END DEVELOPMENT
                                                <span>
                                                    <i class="fa fa-circle"></i>
                                                </span>
                                                DIGITAL DESIGN</h2>
                                                <span>
                                                    <a href="#" class="radius small button">Find More</a>
                                                </span>
                                        </div>    
                                    </div>
                                  </div>
                                  
                                  <div class="row">
                                      <div class="large-12 large-centered columns">
                                        
                                        <div class="animated-canvas">
                                            <div class="canvas-laptop fadeInUpBig">
                                                <img src="images/banner-img/banner-elements/laptop.png" alt="laptop" />
                                            </div>
                                            <div id="canvas-ipad" class="bounceInLeft animated">
                                                <img src="images/banner-img/banner-elements/ipad.png" alt="ipad" />
                                            </div>
                                            <div id="canvas-iphone" class="fadeIn animated">
                                                <img src="images/banner-img/banner-elements/iphone.png" alt="iphone" />
                                            </div>
                                            <div id="canvas-coffee" class="rotateInUpRight animated delay-1s">
                                                <img src="images/banner-img/banner-elements/coffee.png" alt="coffee" />
                                            </div>
                                            <div id="canvas-tablet" class="fadeIn animated delay-05s">
                                                <img src="images/banner-img/banner-elements/tablet.png" alt="tablet" />
                                            </div>
                                            <div id="canvas-pen" class="fadeInUpBig animated delay-07s">
                                                <img src="images/banner-img/banner-elements/pen.png" alt="pen" />
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </li>
                                <li id="slide2">
                                  <div class="row">
                                    <div class="small-12 medium-12 large-12 columns text-center">
                                        <div class="banner-title">
                                          <h1 class="fadeInDown"><span class="phone-title-big">WEBSITES</span> FOR ANYONE</h1>
                                            <h2 class="fadeInUp">WEB DESIGN
                                                <span>
                                                    <i class="fa fa-circle"></i>
                                                </span>
                                                FRONT-END DEVELOPMENT
                                                <span>
                                                    <i class="fa fa-circle"></i>
                                                </span>
                                                DIGITAL DESIGN</h2>
                                                <span>
                                                    <a href="#" class="radius small button">Find More</a>
                                                </span>
                                        </div>    
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="large-12 large-centered columns">
                                        
                                        <div class="animated-canvas">
                                            <div class="canvas-laptop fadeInUpBig">
                                                <img src="images/banner-img/banner-elements/laptop.png" alt="laptop" />
                                            </div>
                                            
                                            <div id="canvas-notebook" class="bounceInLeft animated">
                                                <img src="images/banner-img/banner-elements/notebook.png" alt="notebook" />
                                            </div>
                                            <div id="canvas-glasses" class="fadeIn animated">
                                                <img src="images/banner-img/banner-elements/glasses.png" alt="glasses" />
                                            </div>
                                            <div id="canvas-pen-ball" class="fadeIn animated">
                                                <img src="images/banner-img/banner-elements/pen-ball.png" alt="pen-ball" />
                                            </div>
                                            <div id="canvas-pencil" class="fadeIn animated">
                                                <img src="images/banner-img/banner-elements/pencil.png" alt="pencil" />
                                            </div>


                                            <div id="canvas-razor" class="rotateInUpRight animated">
                                                <img src="images/banner-img/banner-elements/razor.png" alt="razor" />
                                            </div>
                                            <div id="canvas-wood" class="rotateInUpRight animated">
                                                <img src="images/banner-img/banner-elements/wood.png" alt="wood" />
                                            </div>

                                            <div id="canvas-envelop" class="fadeIn animated">
                                                <img src="images/banner-img/banner-elements/envelop.png" alt="envelop" />
                                            </div>
                                            <div id="canvas-packet" class="fadeInUpBig animated">
                                                <img src="images/banner-img/banner-elements/packet.png" alt="packet" />
                                            </div>
                                            <div id="canvas-calc" class="rotateInUpRight animated">
                                                <img src="images/banner-img/banner-elements/calc.png" alt="calc" />
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                </li>
                                <li id="slide3">
                                  <div class="row">
                                    <div class="small-12 medium-12 large-12 columns text-center">
                                        <div class="banner-title">
                                          <h1 class="fadeInDown"><span class="phone-title-big">WEBSITES</span> FOR ANYONE</h1>
                                            <h2 class="fadeInUp">WEB DESIGN
                                                <span>
                                                    <i class="fa fa-circle"></i>
                                                </span>
                                                FRONT-END DEVELOPMENT
                                                <span>
                                                    <i class="fa fa-circle"></i>
                                                </span>
                                                DIGITAL DESIGN</h2>
                                                <span>
                                                    <a href="#" class="radius small button">Find More</a>
                                                </span>
                                        </div>
                                        <div class="row">
                                          <div class="large-12 large-centered columns">
                                            
                                            <div class="animated-canvas">
                                                <div class="canvas-laptop fadeInUpBig">
                                                    <img src="images/banner-img/banner-elements/laptop.png" alt="laptop" />
                                                </div>
                                                
                                                <div id="canvas-diary" class="bounceInLeft animated">
                                                    <img src="images/banner-img/banner-elements/diary.png" alt="diary" />
                                                </div>
                                                <div id="canvas-iphone-gray" class="fadeIn animated">
                                                    <img src="images/banner-img/banner-elements/iphone-gray.png" alt="iphone-gray" />
                                                </div>
                                                <div id="canvas-memory" class="rotateInUpRight animated">
                                                    <img src="images/banner-img/banner-elements/memory.png" alt="memory" />
                                                </div>
                                                <div id="canvas-sticky" class="fadeIn animated">
                                                    <img src="images/banner-img/banner-elements/sticky.png" alt="sticky" />
                                                </div>


                                                <div id="canvas-camera" class="rotateInUpRight animated">
                                                    <img src="images/banner-img/banner-elements/camera.png" alt="camera" />
                                                </div>

                                            </div>
                                          </div>
                                        </div>        
                                    </div>
                                  </div>
                                </li>
                            </ul>
                            <div class="banner-link">
                                <a href="#gallery" class="go-to-gallery">Go to Gallery</a>
                            </div>
                        </div>
                    </div>        
                </section>

                <section class="section-container" id="about-mid-section">
                    <div class="section-about">
                        <div class="row">
                            <!-- <div class="small-12 medium-12 large-12 columns text-center"> -->
                            <div class="large-6 large-centered text-center columns">
                                <div class="wp1">
                                      <img src="images/crown-logo-stardust@x05.png" width="80" height="80" alt="home">
                                      <h4 class="box-header">
                                          <span>Design with no limits</span>
                                      </h4>
                                  <!-- <h1><span class="a2">A</span><span class="alpine">B</span><span class="a1 icon-skills">OU</span><span class="alpine">T</span></h1> -->
                                      <p>Sed a lorem quis neque interdum 
                                          <a href="#">consequat ut sed sem</a>. 
                                              Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                              Praesent id tempor ipsum. Fusce at massa ac nunc porta fringilla sed eget neque. 
                                              Quisque quis pretium nulla. Fusce eget bibendum neque, vel volutpat augue. 
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                      </p>
                                      <div class="text-liner">
                                          <span class="star-dust-color"></span>
                                      </div>
                                </div>       
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="section-margin" id="portfolio-boxes">
                    <div class="row">
                        <div class="small-12 large-centered medium-12 large-12 columns">
                              <ul id="portfolio-boxes-orbit" class="example-orbit-content" data-orbit data-options="animation:slide;
                                                                                                                    pause_on_hover:true;
                                                                                                                    animation_speed:1000;
                                                                                                                     slide_number:false;
                                                                                                                     bullets:false; 
                                                                                                                     timer:false;">
                                  <li class="grid-block pink-slide" data-orbit-slide="headline-1">
                                      
                                      <div class="block-portfolio pink-field">
                                        <div class="item-masonry wp7 w1 h1">
                                            <a class="side-shifter" href="#">
                                                <img src="images/mini-portfolio/ipad-versailles-dark.jpg" alt="">
                                            </a>
                                        </div>                            
                                        <div class="item-masonry text-descr-box wp7 delay-03s w2 h2">
                                            <div class="border-corners">
                                                <h3>Versailles</h3>
                                                <h4>A prodject made for the nail-art- and beauty salon based in Auckland.
                                                    It features unique interfaces, colorful graphic elements
                                                     and a great looking logo.</h4>
                                                <!-- <a class="side-shifter" href="#">
                                                    <img src="images/mini-portfolio/versailles-typography.jpg" alt="">
                                                </a> -->
                                            </div>    
                                        </div>
                                        <div class="item-masonry wp7 delay-05s w3 h2">
                                            <a class="side-shifter" href="#">
                                                <img src="images/mini-portfolio/versailles-typography.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item-masonry typography-box wp7 delay-07s w1 h3">
                                            <a class="side-shifter" href="#">
                                                <img src="images/mini-portfolio/versailles-typo.jpg" alt="">
                                            </a>     
                                        </div>
                                        <div class="item-masonry wp7 delay-1s w1 h4">
                                            <a class="side-shifter" href="#">
                                                <img src="images/mini-portfolio/mac-versailles.jpg" alt="">
                                            </a>                                
                                        </div>
                                      </div>
                                      <span class="next-slide"></span>
                                  </li>

                                  <li class="grid-block blue-slide" data-orbit-slide="headline-2">
                                      <div class="block-portfolio blue-field">
                                        <div class="item-masonry w1 h1">
                                            <img src="images/mini-portfolio/ipad-large.jpg" alt="">
                                        </div>                            
                                        <div class="item-masonry w2 h2"></div>
                                        <div class="item-masonry w3 h2"></div>
                                        <div class="item-masonry w1 h3"></div>
                                        <div class="item-masonry w1 h4"></div>
                                      </div>
                                      <span class="next-slide"></span>
                                  </li>
                                  <li class="grid-block green-slide" data-orbit-slide="headline-3">
                                      <div class="block-portfolio green-field">
                                        <div class="item-masonry w1 h1">
                                            <img src="images/mini-portfolio/ipad-large.jpg" alt="">
                                        </div>                            
                                        <div class="item-masonry w2 h2"></div>
                                        <div class="item-masonry w3 h2"></div>
                                        <div class="item-masonry w1 h3"></div>
                                        <div class="item-masonry w1 h4"></div>
                                      </div>
                                      <span class="next-slide"></span>
                                  </li>
                              </ul>                                                  
                        </div>
                    </div>            
                </section>

                <section id="works" class="section">

                    <!-- <h1>
                        <span>
                            <span class="a2">W</span>
                            <span class="a1">o</span>rk
                        </span>
                    </h1> -->

                    <div class="wrapper">
                            <ul id="jobs">
                                <li class="work">
                                    <a href="toyotires-campaign">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/toyo_tires_print.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Built For The Wild</h1>
                                                    <p>Print/Ad Campaign</p>
                                                    <p class="tag">Toyo Tires</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="toyotires-brakeonthrough">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/toyo_tires_digital.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Brake On Through</h1>
                                                    <p>Digital Campaign/Game</p>
                                                    <p class="tag">Toyo Tires</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="hongu">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/hongu.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Hongu</h1>
                                                    <p>Branding/Identity</p>
                                                    <p class="tag">Hongu</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="soon">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/soon.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Soon</h1>
                                                    <p>Branding/Mobile/Website</p>
                                                    <p class="tag">Axa (France) </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="alpro-brandstory">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/alpro_brand_story.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Stay Curious</h1>
                                                    <p>Brand Story/Film</p>
                                                    <p class="tag">Alpro</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="langerman-diamonds">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/langerman_diamonds.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Langerman Diamonds</h1>
                                                    <p>Branding/Website/Mobile</p>
                                                    <p class="tag">Langerman</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="hair-protect">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/hair_monsters.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Hair Protect</h1>
                                                    <p>iPad Game</p>
                                                    <p class="tag">Silikom</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="eggo">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/eggo.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Eggo</h1>
                                                    <p>Website</p>
                                                    <p class="tag">Eggo</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="pairi-daiza">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/pairi_daiza.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Pairi Daiza</h1>
                                                    <p>Website/Motion design</p>
                                                    <p class="tag">Pairi Daiza</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="alpro-digital">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/alpro_digital.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Alpro</h1>
                                                    <p>Website/Digital Campaign</p>
                                                    <p class="tag">Alpro</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work">
                                    <a href="sandawe">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/sandawe.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Sandawe</h1>
                                                    <p>Website</p>
                                                    <p class="tag">Sandawe</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work hide">
                                    <a href="immocitiz">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/immocitiz.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>ImmoCitiz</h1>
                                                    <p>Game</p>
                                                    <p class="tag">ImmoVlan</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work hide">
                                    <a href="fiat-500">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/fiat500.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Fiat 500</h1>
                                                    <p>Website</p>
                                                    <p class="tag">Fiat</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work hide">
                                    <a href="prototype">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/prototype.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Prototype</h1>
                                                    <p>Facebook Connect Experience</p>
                                                    <p class="tag">Activision</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work hide">
                                    <a href="jacques-dutronc">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/dutronc.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Jacques Dutronc</h1>
                                                    <p>Website/Game</p>
                                                    <p class="tag">Sony Music</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="work hide">
                                    <a href="fear-tracker">
                                        <article>
                                            <div class="thumb">
                                                    <img src="img/works/feartracker.jpg" />
                                            </div>
                                            <div class="info">
                                                <span></span>
                                                <div class="content">
                                                    <h1>Fear Tracker</h1>
                                                    <p>Website</p>
                                                    <p class="tag">Volkswagen</p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                                <li class="archived">
                                        <section>
                                            <a href="#">
                                                <div class="circle animate">
                                                    <div class="rect"></div>
                                                    <div class="rect"></div>
                                                </div>
                                                <hgroup>
                                                    <h1>
                                                        <span class="a2">A</span>rchive
                                                        <span class="a1">d</span><br>
                                                        <span class="al1">W</span>
                                                        <span class="a1 ">o</span>rk
                                                    </h1>
                                                    <h2>past pride and glory</h2>
                                                </hgroup>
                                            </a>
                                        </section>
                                </li>
                            </ul>                            
                    </div>
                    
                    <div  id="links" class="section">
                        <div class="wrapper">
                            <div class="content">
                                <h1>Look at our full video portfolio</h1>
            
                                <div class="buttons clearfix">
                                    <div class="vimeo">
                                        <a target="_blank" href="http://vimeo.com/onemd" class="overlay">
                                                <span class="out"></span>
                                                <span class="on"></span>
                                        </a>
                                    </div>
                                </div>                                
                            </div>
                           <!-- <img src="img/bg_links.jpg" alt="">-->
                        </div>

                    </div>
                </section>
                        
                <section id="about" class="section">
                    <div class="wrapper">

                        <p class="head">
                            <span id="symbols"></span>
                            <img src="img/head_about.jpg" />
                        </p>
                        <div class="content">

                            <p>We are a cohesive and passionate team of creatives - art directors, designers, kick-ass developers, motion-graphics gurus, photographers 
                            &amp; sound production wizards. We combine our skills to deliver first-class ideas. 
                            And we bring more than 15 years of experience operating within the digital world.</p>

                            <h2>Driven. Persuasive. <br>And very ambitious.</h2>

                            <p>1MD aka One Million Dollars is an interactive playground created and managed by creatives. 
                            We enjoy experimenting and exploring new ways of communication. Every day we develop ideas or products we believe in. 
                            So If you're looking for something outside the box, or need a kick-ass strategy for pushing your brand digitally, here we are. 
                            Want to rework your visual identity? Need an incredibly efficient advertising campaign? 
                            How about a totally disruptive video, mobile app or game? Get us in.
                            </p>
                        </div>

                    </div>
                </section>                
            
            </div>
      </div>

      <span class="responsive-swipe-meta" data-pagedata="{&quot;title&quot;:&quot;Responsive Swipe - Home&quot;,&quot;environment&quot;:&quot;prod&quot;}"></span>
  </div> <!-- #pageBodyInner -->





<?php render_footer();






      

