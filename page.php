<?php 
get_header();
// $current_page = get_queried_object();
// $content      = apply_filters( 'the_content', $current_page->post_content );
// echo $content;
?>

<!-- <iframe
        src='https://pamukkale-ece-termal-otel.hmshotel.net/'
        frameborder='0'
        width='100%'
        height='500px'
        style= "border-radius: 10px; margin-top:25vh;" 
      ></iframe> -->

<div class="container mb-5" id="roomcont">
      
      <div class="card">
        <div class="row g-0">
          <div class="col-md-8 border-end">
            <div class="d-flex flex-column justify-content-center">
              <div class="main_image">
                <img
                src=<?php echo get_template_directory_uri()."/assets/images/room/suite1.jpeg"?>
                  id="main_product_image"
                  width="500"
                />
              </div>
              <div class="thumbnail_images">
                <ul id="thumbnail">
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/suite1.jpeg"?>
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/suite2.jpeg"?>
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/suite3.jpeg"?>
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/suite4.jpeg"?>
                      width="70"
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 align-items-center" id="product_titdesc">
            <div class="p-3 right-side">
              <div class="d-flex justify-content-between" >
                <h3>Suite Room</h3>
                <span class="heart"><i class="bx bx-heart"></i></span>
              </div>
              <div class="mt-2 pr-3 content">
                <p>
                  Spacious suite room with luxurious bathroom and great view. Perfect for two. Mountain or garden view available.
                </p>
              </div>
              <h3>$350.00</h3>
              
              <div class="buttons d-flex flex-row mt-5 gap-3">
                <button class="btn btn-outline-dark">Book Now</button>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row g-0">
          <div class="col-md-8 border-end">
            <div class="d-flex flex-column justify-content-center">
              <div class="main_image">
                <img
                src=<?php echo get_template_directory_uri()."/assets/images/room/deluxe2.jpeg"?>
                  id="main_product_image"
                  width="500"
                />
              </div>
              <div class="thumbnail_images">
                <ul id="thumbnail">
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/deluxe2.jpeg"?>
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/deluxe3.jpeg"?>
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/deluxe4.jpeg"?>
                      width="70"
                    />
                  </li>
                  <li>
                    <img
                      onclick="changeImage(this)"
                      src=<?php echo get_template_directory_uri()."/assets/images/room/deluxe5.jpeg"?>
                      width="70"
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 align-items-center" id="product_titdesc">
            <div class="p-3 right-side">
              <div class="d-flex justify-content-between" >
                <h3>Deluxe Room</h3>
                <span class="heart"><i class="bx bx-heart"></i></span>
              </div>
              <div class="mt-2 pr-3 content">
                <p>
                  Deluxe double room with luxurious bathroom and spacious balcony. Perfect for two. Mountain or garden view available.
                </p>
              </div>
              <h3>$250.00</h3>
              
              <div class="buttons d-flex flex-row mt-5 gap-3">
                <button class="btn btn-outline-dark">Book Now</button>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php
get_footer();
?>