<?php

require 'lib/utils.php';
require 'lib/outer_page_bits.php';

render_header();

// Useful to have no space before pageBodyInner - we check it with regex
?><div class="pageBodyInner">

	<?php nav_header(); ?>

 <div class="jumbotron">
    <h1>Disclaimer</h1>
    <p class="lead">This product is not <small>bla bla bla..</small></p>
  </div>

  <div class="row-fluid">
    <div class="span8 offset2">
		<p>Sorry, we aren't able to provide support to anyone who uses this plugin, we're too busy cultivating our hedonistic lifestyles.</p>
		<p>You're free to use this plugin, change it and do whatever else you like with it, so long as you comply with the licence terms of the people whose work we've used in this project, especially Matteo Spinelli, whose excellent <a href="http://cubiq.org/swipeview">SwipeView</a> carousel we have ruthlessly cannibalised. The Ajax part of the plugin was also inspired by <a href="https://github.com/defunkt/jquery-pjax">pjax</a>. Many thanks to the authors whose work has helped us, and most of all we acknowledge the genius of the author of Responsive Swipe, <a href="https://github.com/stephanfowler" title="Stephan Fowler">Stephan Fowler</a>:</p>
		<a href="https://github.com/stephanfowler" title="Stephan Fowler">
		<p>Use this product at your own risk. Consult a physician before attempting to operate any heavy machinery. In fact best just lie down in a darkened room.</p>
    </div>
  </div>

	<!-- Element containing metadata about ths page, which Responsive Swipe uses -->
	<span class="responsive-swipe-meta" data-pagedata="{&quot;title&quot;:&quot;Responsive Swipe - Disclaimer&quot;,&quot;environment&quot;:&quot;prod&quot;}"></span>

</div> <!-- #pageBodyInner -->

<?php render_footer();
