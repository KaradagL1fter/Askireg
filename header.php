<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Roxandrea - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
    wp_head();
    ?>
   

    
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="#">
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

if ( has_custom_logo() ) {
	echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
	echo '<h1>' . get_bloginfo('name') . '</h1>';
}?>
                
            
            </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
        <?php
                    wp_nav_menu(
                        array(
                            "menu" => "primary",
                            "container" => "",
                            "theme_location" => "primary",
                            "items_wrap" =>'<ul id="" class="navbar-nav ml-auto">%3$s</ul>',
                            'add_a_class' => 'nav-link'
                        )
                    );
                ?>
	        
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->