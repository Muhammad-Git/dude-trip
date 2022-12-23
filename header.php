<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>
	
 <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/lib.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>
<body <?php body_class(); ?>>

<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="logo">
                        <a href="<?php echo site_url(); ?>">
                           <h2>Dude Trip</h2>
                        </a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="nav-list h-100">
                         <?php wp_nav_menu( array('menu'=> 'Header Menu','theme_location' => 'header_menu','fallback_cb'=> false, 'menu_class' => 'nav-list', 'container' => false ) ); ?>
                      
                    </div>
                </div>
            </div>
        </div>
    </header>



