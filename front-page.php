
<?php 
get_header();
?>
<div class="hero">
      <div class="container-wrap d-flex justify-content-end align-items-end">
        <a
          href="https://www.youtube.com/watch?v=ism1XqnZJEg"
          class="icon-video popup-vimeo d-flex justify-content-center align-items-center"
        >
          <span class="ion-ios-play play"></span>
        </a>
      </div>
      <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/instfeed/bar.jpeg' ?>)">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center">
              <div class="col-md-8 ftco-animate">
                <div class="text mb-5 pb-5">
                  <h1 class="mb-3">Hotel Askireg</h1>
                  <h2>More than a hotel... an experience</h2>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/instfeed/floor.jpeg' ?>)">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center">
              <div class="col-md-8 ftco-animate">
                <div class="text mb-5 pb-5">
                  <h1 class="mb-3">Experience Stunning views </h1>
                  <h2>Askireg Hotel &amp; Resort</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 pr-1 aside-stretch">
            <form action="#" class="booking-form">
              <div class="row">
                <div class="col-md d-flex py-md-4">
                  <div
                    class="form-group align-self-stretch d-flex align-items-end"
                  >
                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                      <label for="#">Check-in Date</label>
                      <input
                        type="text"
                        class="form-control checkin_date"
                        placeholder="Check-in date"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex py-md-4">
                  <div
                    class="form-group align-self-stretch d-flex align-items-end"
                  >
                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                      <label for="#">Check-out Date</label>
                      <input
                        type="text"
                        class="form-control checkout_date"
                        placeholder="Check-out date"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex py-md-4">
                  <div
                    class="form-group align-self-stretch d-flex align-items-end"
                  >
                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                      <label for="#">Room</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon">
                            <span class="ion-ios-arrow-down"></span>
                          </div>
                          <select name="" id="" class="form-control">
                            <option value="">Suite</option>
                            <option value="">Family Room</option>
                            <option value="">Deluxe Room</option>
                            <option value="">Classic Room</option>
                            <option value="">Superior Room</option>
                            <option value="">Luxury Room</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex py-md-4">
                  <div
                    class="form-group align-self-stretch d-flex align-items-end"
                  >
                    <div class="wrap bg-white align-self-stretch py-3 px-4">
                      <label for="#">Guests</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon">
                            <span class="ion-ios-arrow-down"></span>
                          </div>
                          <select name="" id="" class="form-control">
                            <option value="">1 Adult</option>
                            <option value="">2 Adult</option>
                            <option value="">3 Adult</option>
                            <option value="">4 Adult</option>
                            <option value="">5 Adult</option>
                            <option value="">6 Adult</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex">
                  <div class="form-group d-flex align-self-stretch">
                    <a
                      href="#"
                      class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block"
                      ><span
                        >Check Availability
                        <small>Best Price Guaranteed!</small></span
                      ></a
                    >
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-wrap">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-3">
            <a
              href="#"
              class="services-wrap img align-items-end d-flex"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/services/sauna.jpg' ?>)"
            >
              <div class="text text-center pb-2">
                <h3>Sauna</h3>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a
              href="#"
              class="services-wrap img align-items-end d-flex"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/services/pool.jpg' ?>)"
            >
              <div class="text text-center pb-2">
                <h3>Swimming Pool</h3>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a
              href="#"
              class="services-wrap img align-items-end d-flex"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/services/rest_bar.jpeg' ?>)"
            >
              <div class="text text-center pb-2">
                <h3>Restaurant</h3>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <div
              class="services-wrap services-overlay img align-items-center d-flex"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/services/room2.jpeg' ?>)"
            >
              <div class="text text-center pb-2">
                <h3 class="mb-0">Suites &amp; Rooms</h3>
                <span>Special Rooms</span>
                <div class="d-flex mt-2 justify-content-center">
                  <div class="icon">
                    <a href="#"><span class="ion-ios-arrow-forward"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Welcome to Askireg Hotel</span>
            <h2 class="mb-4">In the heart of Dersim in south-east Turkey</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="flaticon-reception-bell"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Friendly Service</h3>
              </div>
            </div>
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="flaticon-serving-dish"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Get Breakfast</h3>
              </div>
            </div>
          </div>
          <div
            class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate"
          >
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="flaticon-car"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Transfer Services</h3>
              </div>
            </div>
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="flaticon-spa"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Suits &amp; SPA</h3>
              </div>
            </div>
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div
                  class="icon d-flex align-items-center justify-content-center"
                >
                  <span class="ion-ios-bed"></span>
                </div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Cozy Rooms</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light ftco-room">
      <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Hotel Askireg </span>
            <h2 class="mb-4">Rooms and services</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <div class="room-wrap">
              <div
                class="img d-flex align-items-center"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/building/floor.jpeg' ?>)"
              >
                <div class="text text-center px-4 py-4">
                  <h2>Welcome to <a href="index.html">Askireg</a> Hotel</h2>
                  <p>
                  Looking to escape the hustle and bustle of the big city? Visit the beautiful Mountain Hotel, nestled in the heart of Turkey's scenic south-east. 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="room-wrap d-md-flex">
              <a
                href="#"
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/room/Suite.jpeg' ?>)"
              ></a>
              <div class="half left-arrow d-flex align-items-center">
                <div class="text p-4 p-xl-5 text-center">
                  <p class="star mb-0">
                    <span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span>
                  </p>
                  <p class="mb-0">
                    <span class="price mr-1">$120.00</span>
                    <span class="per">per night</span>
                  </p>
                  <h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
                  <p class="pt-1">
                    <a href="room-single.html" class="btn-custom px-3 py-2"
                      >View Room Details
                      <span class="icon-long-arrow-right"></span
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="room-wrap d-md-flex">
              <a
                href="#"
                class="img order-md-last"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/building/gym.jpg' ?>)"
              ></a>
              <div class="half right-arrow d-flex align-items-center">
                <div class="text p-4 p-xl-5 text-center">
                  
                  <p class="mb-0">
                    <span class="price mr-1">24 </span>
                    <span class="per">hours</span>
                  </p>
                  <h3 class="mb-3"><a href="rooms.html">Gym</a></h3>
                  <p class="pt-1">
                    <a href="room-single.html" class="btn-custom px-3 py-2"
                      >View Details
                      <span class="icon-long-arrow-right"></span
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="room-wrap d-md-flex">
              <a
                href="#"
                class="img order-md-last"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/room/deluxe.jpeg' ?>)"
              ></a>
              <div class="half right-arrow d-flex align-items-center">
                <div class="text p-4 p-xl-5 text-center">
                  <p class="star mb-0">
                    <span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span
                    ><span class="ion-ios-star"></span>
                  </p>
                  <p class="mb-0">
                    <span class="price mr-1">$120.00</span>
                    <span class="per">per night</span>
                  </p>
                  <h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
                  <p class="pt-1">
                    <a href="room-single.html" class="btn-custom px-3 py-2"
                      >View Room Details
                      <span class="icon-long-arrow-right"></span
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="room-wrap d-md-flex">
              <a
                href="#"
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/building/view.jpeg' ?>)"
              ></a>
              <div class="half left-arrow d-flex align-items-center">
                <div class="text p-4 p-xl-5 text-center">
                  
                  <p class="mb-0">
                    <span class="price mr-1">$250.00</span>
                    <span class="per">per trip </span>
                  </p>
                  <h3 class="mb-3"><a href="rooms.html">Guided Skiing</a></h3>
                  <p class="pt-1">
                    <a href="room-single.html" class="btn-custom px-3 py-2"
                      >View Details
                      <span class="icon-long-arrow-right"></span
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="room-wrap d-md-flex">
              <a
                href="#"
                class="img"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/building/views.jpg' ?>)"
              ></a>
              <div class="half left-arrow d-flex align-items-center">
                <div class="text p-4 p-xl-5 text-center">
                  
                  <p class="mb-0">
                    <span class="price mr-1">$250.00</span>
                    <span class="per">per trip</span>
                  </p>
                  <h3 class="mb-3"><a href="rooms.html">Guided Hiking</a></h3>
                  <p class="pt-1">
                    <a href="room-single.html" class="btn-custom px-3 py-2"
                      >View Details
                      <span class="icon-long-arrow-right"></span
                    ></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <section class="ftco-section ftco-no-pt ftco-no-pb px-0">
      <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-end">
          <div class="col-md-12">
            <div
              id="home"
              class="video-hero"
              style="
                height: 800px;
                background-image: url(<?php echo get_template_directory_uri().'/assets/images/banner/view3.jpeg' ?>);
                background-size: cover;
                background-position: center center;
              "
            >
              <video playsinline autoplay muted loop poster="" id="vid" >
                <source src=<?php echo get_template_directory_uri()."/assets/video/video2.mp4"?> type="video/mp4">
              </video>
              <div class="container">
                <div
                  class="row justify-content-start d-flex align-items-end height-text"
                >
                  <div class="col-md-8">
                    <div class="text">
                      <!-- <h1>Askireg Hotel</h1> -->
                      <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

if ( has_custom_logo() ) {
	echo '<img   src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
	echo '<h1>' . get_bloginfo('name') . '</h1>';
}?>
                      <h4>Pülümür, Tunceli, Turkey - Mountain Hotel</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section ftco-menu"
      style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/building/breakfast.jpeg' ?>)"
    >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Restaurant</span>
            <h2>Restaurant</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img order-md-last"
                style="background-image: url('https://cdn.pixabay.com/photo/2022/06/07/20/52/curry-7249247_960_720.jpg')"
              ></div>
              <div class="desc pr-3 text-md-right">
                <div class="d-md-flex text align-items-center">
                  <h3 class="order-md-last heading-left">
                    <span>Grilled Crab with Onion</span>
                  </h3>
                  <span class="price price-left">$20.00</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img order-md-last"
                style="background-image: url('https://cdn.pixabay.com/photo/2016/06/28/17/32/salmon-1485014_960_720.jpg')"
              ></div>
              <div class="desc pr-3 text-md-right">
                <div class="d-md-flex text align-items-center">
                  <h3 class="order-md-last heading-left">
                    <span>Grilled Beef with potatoes</span>
                  </h3>
                  <span class="price price-left">$29.00</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img order-md-last"
                style="background-image: url('https://cdn.pixabay.com/photo/2015/12/04/15/48/steak-1076665_960_720.jpg')"
              ></div>
              <div class="desc pr-3 text-md-right">
                <div class="d-md-flex text align-items-center">
                  <h3 class="order-md-last heading-left">
                    <span>Grilled Beef with potatoes</span>
                  </h3>
                  <span class="price price-left">$20.00</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img order-md-last"
                style="background-image: url('https://cdn.pixabay.com/photo/2015/12/08/19/08/steak-1083567_960_720.jpg')">
              ></div>
              <div class="desc pr-3 text-md-right">
                <div class="d-md-flex text align-items-center">
                  <h3 class="order-md-last heading-left">
                    <span>Grilled Beef with potatoes</span>
                  </h3>
                  <span class="price price-left">$20.00</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img"
                style="background-image: url('https://cdn.pixabay.com/photo/2019/11/09/17/02/burger-4614022_960_720.jpg')"
              ></div>
              <div class="desc pl-3">
                <div class="d-md-flex text align-items-center">
                  <h3><span>Grilled Beef with potatoes</span></h3>
                  <span class="price">$49.91</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img"
                style="background-image: url('https://cdn.pixabay.com/photo/2017/11/17/16/05/duck-2957809_960_720.jpg')"
              ></div>
              <div class="desc pl-3">
                <div class="d-md-flex text align-items-center">
                  <h3><span>Ultimate Overload</span></h3>
                  <span class="price">$20.00</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img"
                style="background-image: url('https://cdn.pixabay.com/photo/2019/09/28/21/04/meatballs-4511773_960_720.jpg')"
              ></div>
              <div class="desc pl-3">
                <div class="d-md-flex text align-items-center">
                  <h3><span>Grilled Beef with potatoes</span></h3>
                  <span class="price">$20.00</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
            <div class="pricing-entry d-flex ftco-animate">
              <div
                class="img"
                style="background-image: url('https://cdn.pixabay.com/photo/2014/09/11/11/17/prawn-441623_960_720.jpg')"
              ></div>
              <div class="desc pl-3">
                <div class="d-md-flex text align-items-center">
                  <h3><span>Ham &amp; Pineapple</span></h3>
                  <span class="price">$20.00</span>
                </div>
                <div class="d-block">
                  <p>
                    A small river named Duden flows by their place and supplies
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Read Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/news/bar.jpeg' ?>)"
              >
              </a>
              <div class="text mt-3 text-center">
                <div class="meta mb-2">
                  <div><a href="#">July 03, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
                <h3 class="heading">
                  <a href="#"
                    >Even the all-powerful Pointing has no control about the
                    blind texts</a
                  >
                </h3>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/news/coffee.jpeg' ?>)"
              >
              </a>
              <div class="text mt-3 text-center">
                <div class="meta mb-2">
                  <div><a href="#">July 03, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
                <h3 class="heading">
                  <a href="#"
                    >Even the all-powerful Pointing has no control about the
                    blind texts</a
                  >
                </h3>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20"
                style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/news/winter2021.JPG' ?>)"
              >
              </a>
              <div class="text mt-3 text-center">
                <div class="meta mb-2">
                  <div><a href="#">July 03, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
                <h3 class="heading">
                  <a href="#"
                    >Even the all-powerful Pointing has no control about the
                    blind texts</a
                  >
                </h3>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Photos</span>
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a
              href="images/insta-1.jpg"
              class="insta-img image-popup"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/instfeed/bar.jpeg' ?>)"
            >
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a
              href="images/insta-2.jpg"
              class="insta-img image-popup"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/instfeed/floor.jpeg' ?>)"
            >
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a
              href="images/insta-3.jpg"
              class="insta-img image-popup"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/instfeed/lobby.jpeg' ?>)"
            >
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a
              href="images/insta-4.jpg"
              class="insta-img image-popup"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/instfeed/room1.jpeg' ?>)"
            >
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a
              href="images/insta-5.jpg"
              class="insta-img image-popup"
              style="background-image: url(<?php echo get_template_directory_uri().'/assets/images/instfeed/view2.jpeg' ?>)"
            >
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
   
    <?php
get_footer();
?>