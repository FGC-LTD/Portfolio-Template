<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="site-header">
    <div class="header-logo">
        <a href="index.html"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Innera"></a>
    </div>
    <div class="header-menu">
        <nav>
            <ul>
                <li class="sub"><a href="#">HOME</a>
                    <ul>
                        <li><a href="index.html">HOME SLIDER</a></li>
                        <li><a href="home-video.html">HOME VIDEO</a></li>
                    </ul>
                </li>
                <li class="sub"><a href="#">PAGES</a>
                    <ul>
                        <li class="sub"><a href="#">ABOUT</a>
                            <ul>
                                <li><a href="about-1.html">ABOUT 1</a></li>
                                <li><a href="about-2.html">ABOUT 2</a></li>
                            </ul>
                        </li>
                        <li class="sub"><a href="#">TEAM</a>
                            <ul>
                                <li><a href="team-1.html">TEAM 1</a></li>
                                <li><a href="team-2.html">TEAM 2</a></li>
                                <li><a href="team-single-1.html">TEAM SINGLE 1</a></li>
                                <li><a href="team-single-2.html">TEAM SINGLE 2</a></li>
                            </ul>
                        </li>
                        <li class="sub"><a href="#">SERVICES</a>
                            <ul>
                                <li><a href="services-1.html">SERVICES 1</a></li>
                                <li><a href="services-2.html">SERVICES 2</a></li>
                            </ul>
                        </li>
                        <li class="sub"><a href="#">OTHERS</a>
                            <ul>
                                <li><a href="page-404.html">404 ERROR</a></li>
                                <li><a href="page-pricing.html">PRICING TABLE</a></li>
                                <li><a href="page-elements.html">ELEMENTS</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub"><a href="#">PROJECTS</a>
                    <ul>
                        <li class="sub"><a href="#">PROJECTS 1</a>
                            <ul>
                                <li><a href="projects-1-2-col.html">PROJECTS 1 - 2 COL</a></li>
                                <li><a href="projects-1-3-col.html">PROJECTS 1 - 3 COL</a></li>
                                <li><a href="projects-1-4-col.html">PROJECTS 1 - 4 COL</a></li>
                                <li><a href="projects-1-grid.html">PROJECTS 1 - GRID</a></li>
                                <li><a href="projects-1-nospace.html">PROJECTS 1 - NOSPACE</a></li>
                                <li><a href="projects-1-lightbox.html">PROJECTS 1 - LIGHTBOX</a></li>
                            </ul>
                        </li>
                        <li><a href="projects-2.html">PROJECTS 2</a></li>
                        <li><a href="project-single-1.html">PROJECT SINGLE 1</a></li>
                        <li><a href="project-single-2.html">PROJECT SINGLE 2</a></li>
                    </ul>
                </li>
                <li class="sub"><a href="#">BLOG</a>
                    <ul>
                        <li><a href="blog-1.html">BLOG 1</a></li>
                        <li><a href="blog-2.html">BLOG 2</a></li>
                        <li><a href="blog-3.html">BLOG 3</a></li>
                        <li><a href="blog-4.html">BLOG 4</a></li>
                        <li><a href="blog-5.html">BLOG 5</a></li>
                        <li class="sub"><a href="#">SINGLE 1</a>
                            <ul>
                                <li><a href="blog-single-1.html">SINGLE 1 PHOTO</a></li>
                                <li><a href="blog-single-1-video.html">SINGLE 1 VIDEO</a></li>
                                <li><a href="blog-single-1-audio.html">SINGLE 1 AUDIO</a></li>
                                <li><a href="blog-single-1-gallery.html">SINGLE 1 GALLERY</a></li>
                            </ul>
                        </li>
                        <li class="sub"><a href="#">SINGLE 2</a>
                            <ul>
                                <li><a href="blog-single-2.html">SINGLE 2 PHOTO</a></li>
                                <li><a href="blog-single-2-video.html">SINGLE 2 VIDEO</a></li>
                                <li><a href="blog-single-2-audio.html">SINGLE 2 AUDIO</a></li>
                                <li><a href="blog-single-2-gallery.html">SINGLE 2 GALLERY</a></li>
                            </ul>
                        </li>
                        <li class="sub"><a href="#">SINGLE 3</a>
                            <ul>
                                <li><a href="blog-single-3.html">SINGLE 3 PHOTO</a></li>
                                <li><a href="blog-single-3-video.html">SINGLE 3 VIDEO</a></li>
                                <li><a href="blog-single-3-audio.html">SINGLE 3 AUDIO</a></li>
                                <li><a href="blog-single-3-gallery.html">SINGLE 3 GALLERY</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub"><a href="#">CONTACT</a>
                    <ul>
                        <li><a href="contact-1.html">CONTACT 1</a></li>
                        <li><a href="contact-2.html">CONTACT 2</a></li>
                        <li><a href="contact-3.html">CONTACT 3</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header-toggle">
        <i class="fa fa-bars"></i>
    </div>
</div>
</header><!--/.header-->

