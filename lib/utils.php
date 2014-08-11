<?php

function get_site_url(){
	$url = parse_url($_SERVER['REQUEST_URI']);
	return $_SERVER['SERVER_NAME'] . $url['path'];
}

function render_image($img = '') {

	global $frag_width;
	$src = 'img/';

	switch ($img) {

		case 'logo':

			if ($frag_width > 480) {
				$src .= $img . '-large.png';
			} elseif ($frag_width > 320) {
				$src .= $img . '-medium.png';
			} else {
				$src .= $img . '-small.png';
			}

	}

	echo '<img src="' . $src . '" id="' . $img . '" />';

}

function nav_header(){

	$output = <<<HEREDOC
	<section id="homeSection">
        <div class="sticky">
            <nav class="top-bar" data-topbar>
                <ul id="gn-menu" class="gn-menu-main">
                    <li class="gn-trigger">
                        <a class="gn-icon gn-icon-menu">
                            <span>Menu</span>
                        </a>
                        <nav class="gn-menu-wrapper">
                            <div class="gn-scroller">
                                <ul class="gn-menu">
                                    <li class="gn-search-item">
                                        <input placeholder="Search" type="search" class="gn-search">
                                        <a class="gn-icon gn-icon-search">
                                            <span>Search</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gn-icon gn-icon-download">Graphics</a>
                                        <ul class="gn-submenu">
                                            <li><a class="gn-icon gn-icon-illustrator">Illustrations</a>
                                            </li>
                                            <li><a class="gn-icon gn-icon-photoshop">Photoshop</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="gn-icon gn-icon-cog">Settings</a>
                                    </li>
                                    <li><a class="gn-icon gn-icon-help">Help</a>
                                    </li>
                                    <li>
                                        <a href="portfolio.php" class="gn-icon gn-icon-archive">Archives</a>
                                        <ul class="gn-submenu">
                                            <li><a class="gn-icon gn-icon-article">Articles</a>
                                            </li>
                                            <li><a class="gn-icon gn-icon-pictures">Images</a>
                                            </li>
                                            <li><a class="gn-icon gn-icon-videos">Videos</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </li>
                    <li>
                    	<a class="icon-services icon-home" href="index.php"></a>
                    </li>                      
                </ul>
            </nav>
        </div>    
    </section>
HEREDOC;

	echo $output;
}