<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
    wp_head();
    ?>
   

   <style>
      ::-webkit-scrollbar {
        width: 8px;
      }
      /* Track */
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #888;
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
      body {
        background-color: #ecedee;
      }
      .card {
        border: none;
        overflow: hidden;
      }
      .thumbnail_images ul {
        list-style: none;
        justify-content: center;
        display: flex;
        align-items: center;
        margin-top: 10px;
      }
      .thumbnail_images ul li {
        margin: 5px;
        padding: 10px;
        border: 2px solid #eee;
        cursor: pointer;
        transition: all 0.5s;
      }
      .thumbnail_images ul li:hover {
        border: 2px solid #000;
      }
      .main_image {
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid #eee;
        height: 400px;
        width: 100%;
        overflow: hidden;
      }
      .heart {
        height: 29px;
        width: 29px;
        background-color: #eaeaea;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .content p {
        font-size: 12px;
      }
      .ratings span {
        font-size: 14px;
        margin-left: 12px;
      }
      .colors {
        margin-top: 5px;
      }
      .colors ul {
        list-style: none;
        display: flex;
        padding-left: 0px;
      }
      .colors ul li {
        height: 20px;
        width: 20px;
        display: flex;
        border-radius: 50%;
        margin-right: 10px;
        cursor: pointer;
      }
      .colors ul li:nth-child(1) {
        background-color: #6c704d;
      }
      .colors ul li:nth-child(2) {
        background-color: #96918b;
      }
      .colors ul li:nth-child(3) {
        background-color: #68778e;
      }
      .colors ul li:nth-child(4) {
        background-color: #263f55;
      }
      .colors ul li:nth-child(5) {
        background-color: black;
      }
      .right-side {
        position: relative;
      }
      .search-option {
        position: absolute;
        background-color: #000;
        overflow: hidden;
        align-items: center;
        color: #fff;
        width: 200px;
        height: 200px;
        border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
        left: 30%;
        bottom: -250px;
        transition: all 0.5s;
        cursor: pointer;
      }
      .search-option .first-search {
        position: absolute;
        top: 20px;
        left: 90px;
        font-size: 20px;
        opacity: 1000;
      }
      .search-option .inputs {
        opacity: 0;
        transition: all 0.5s ease;
        transition-delay: 0.5s;
        position: relative;
      }
      .search-option .inputs input {
        position: absolute;
        top: 200px;
        left: 30px;
        padding-left: 20px;
        background-color: transparent;
        width: 300px;
        border: none;
        color: #fff;
        border-bottom: 1px solid #eee;
        transition: all 0.5s;
        z-index: 10;
      }
      .search-option .inputs input:focus {
        box-shadow: none;
        outline: none;
        z-index: 10;
      }
      .search-option:hover {
        border-radius: 0px;
        width: 100%;
        left: 0px;
      }
      .search-option:hover .inputs {
        opacity: 1;
      }
      .search-option:hover .first-search {
        left: 27px;
        top: 25px;
        font-size: 15px;
      }
      .search-option:hover .inputs input {
        top: 20px;
      }
      .search-option .share {
        position: absolute;
        right: 20px;
        top: 22px;
      }
      .buttons .btn {
        height: 50px;
        width: 150px;
        border-radius: 0px !important;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="/askireghotel">
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

if ( has_custom_logo() ) {
	echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
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