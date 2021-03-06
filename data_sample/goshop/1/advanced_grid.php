<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["advanced_grid_module"] = array (
  1 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/bg-choose-bike.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '1',
    'column' => 
    array (
      1 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="box with-arrow">
     <div class="box-heading">Choose your <span>bike</span></div>
     <div class="second-heading">Search by type of bike</div>
     <div class="box-content text-center">
          <div class="roundabout">     
               <div class="next"></div>
               <div class="prev"></div>
               
               <ul>
                    <li>
                         <div class="image"><img src="image/catalog/bike-1.png" alt="" /></div>
                         <div class="name"><a href="#">Mountain bikes</a></div>
                         <div class="price"><span>Start from</span> $599.00</div>
                    </li>
                    <li>
                         <div class="image"><img src="image/catalog/bike-2.png" alt="" /></div>
                         <div class="name"><a href="#">Road bikes</a></div>
                         <div class="price"><span>Start from</span> $299.00</div>
                    </li>
                    <li>
                         <div class="image"><img src="image/catalog/bike-3.png" alt="" /></div>
                         <div class="name"><a href="#">BMX bikes</a></div>
                         <div class="price"><span>Start from</span> $399.00</div>
                    </li>
               </ul>
          </div>
          
          <a href="#" class="button" style="margin-bottom: 97px">View all bikes</a>
     </div>
</div>


<script src="catalog/view/theme/goshop/js/jquery.roundabout.min.js"></script>
<script type="text/javascript">
     $(".roundabout ul").roundabout({
         autoplay: true,
         autoplayDuration: 5000,
         minOpacity: 1,
         minScale: 0.55,
         btnNext: ".next",
         btnPrev: ".prev",
         autoplayPauseOnHover: true
     });
</script>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => 'no-container',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '1',
    'column' => 
    array (
      2 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="clearfix row row-without-padding">
     <div class="home-discount"><div>Discount up to 75%</div></div>
     
     <div class="col-sm-6" style="background: #f8f8f8 url(image/catalog/promotion-1.jpg) bottom right no-repeat">
          <div class="promotion" style="float: right">
               <div class="name">Waterproof Jacket</div>
               <div class="brand">Men <span>$350</span></div>
               
               <ul class="features">
                    <li>Integrated i-Lume LED rear light</li>
                    <li>Optional hood available separately</li>
                    <li>Breathability rating 15,000</li>
               </ul>
               
               <ul class="actions">
                    <li><a href="#">Detail</a></li>
                    <li><a href="#">Add to cart</a></li>
               </ul>
          </div>
     </div>
     
     <div class="col-sm-6" style="background: #f0f0f0 url(image/catalog/promotion-2.jpg) bottom left no-repeat">
          <div class="promotion">
               <div class="name">Waterproof Jacket</div>
               <div class="brand">Women <span>$250</span></div>
               
               <ul class="features">
                    <li>Integrated i-Lume LED rear light</li>
                    <li>Optional hood available separately</li>
                    <li>Breathability rating 15,000</li>
               </ul>
               
               <ul class="actions">
                    <li><a href="#">Detail</a></li>
                    <li><a href="#">Add to cart</a></li>
               </ul>
          </div>
     </div>
</div>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => 'no-container',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/bg-address.jpg',
    'background_image_position' => 'top right',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      3 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="address text-center">
     <img src="image/catalog/logo-footer.png" style="margin-bottom: 6px" alt="Logo"><br>
     148 Parramatta Road Stanmore NSW 2048, New York City<br>
     Call Sales & Workshop : (02) 9567 1999
     <h5>Opening hours</h5>
     Monday to Wednesday from 10.00AM - 17.00PM<br>
     Thursday to Sunday from 11.00AM - 19.00PM 
</div>

<div class="partner">
     <div class="container">
          <ul>
               <li><a href="#"><img src="image/catalog/logo-1.png" alt="Logo"></a></li>
               <li><a href="#"><img src="image/catalog/logo-2.png" alt="Logo"></a></li>
               <li><a href="#"><img src="image/catalog/logo-3.png" alt="Logo"></a></li>
               <li><a href="#"><img src="image/catalog/logo-1.png" alt="Logo"></a></li>
               <li><a href="#"><img src="image/catalog/logo-4.png" alt="Logo"></a></li>
          </ul>
     </div>
</div>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'footer',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      4 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="about-us">
     <img src="image/catalog/logo-footer.png" alt="GoPro">
     <p>Ecommerce OC Template</p>
     <ul class="social-icons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
     </ul>
</div>',
              $language_id => '',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'My account',
                $language_id => '',
              ),
              'limit' => '5',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'My account',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=account/login',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newsletter',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=account/newsletter',
                  'sort' => '4',
                ),
              ),
            ),
          ),
        ),
      ),
      6 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Our service',
                $language_id => '',
              ),
              'limit' => '5',
              'array' => 
              array (
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Shipping Return',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=account/return/add',
                  'sort' => '1',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact us',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=information/contact',
                  'sort' => '2',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Faq',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=module/faq',
                  'sort' => '3',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Affiliates',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=affiliate/login',
                  'sort' => '4',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Specials',
                    $language_id => '',
                  ),
                  'url' => 'index.php?route=product/special',
                  'sort' => '5',
                ),
              ),
            ),
          ),
        ),
      ),
      7 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '4',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Newsletter',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => 'Lorem ipsum dolor sit amet conseret adipiscing elit sed diam nonunem.',
                $language_id => '',
              ),
              'input_placeholder' => 
              array (
                1 => 'Your Email',
                $language_id => '',
              ),
              'subscribe_text' => 
              array (
                1 => 'Ok',
                $language_id => '',
              ),
              'unsubscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
          ),
        ),
      ),
      8 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '5',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="overflow-payments">
     <div id="owl-example" class="owl-carousel footer-payments">
          <div><a href="#"><img src="image/catalog/payment-1.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-2.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-4.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-3.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-5.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-6.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-8.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-7.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-1.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-2.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-3.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-4.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-5.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-6.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-8.png" alt="Payment"></a></div>
          <div><a href="#"><img src="image/catalog/payment-7.png" alt="Payment"></a></div>
     </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
     $("#owl-example").owlCarousel({
         items : 8,
         navigation : true,
         navigationText : ["←","→"],
    });
});
</script>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '166',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#f7f7f7',
    'background_image_type' => '1',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      9 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'latest_blogs',
            'latest_blogs' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Latest news',
                $language_id => '',
              ),
              'width' => '80',
              'height' => '80',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/bg-testimonials.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '5',
    'disable_on_mobile' => '1',
    'column' => 
    array (
      10 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="overflow-testimonials">
     <div id="testimonials" class="owl-carousel testimonials">
          <div class="item text-center">
               <div class="testimonial">
                    <div class="first-heading">They says</div>
                    <div class="second-heading">Happy clients</div>
                    <div class="description">“<b>Cycling is a healthy</b>, fun and exciting way to travel. No matter what type of cycling you’re into, we’ve got a bike for you. We stock one of the largest bicycle ranges anywhere”</div>
                    <div class="author"><span>JESICA WILSON</span> - France</div>
               </div>
          </div>
          
          <div class="item text-center">
               <div class="testimonial">
                    <div class="first-heading">They says</div>
                    <div class="second-heading">Happy clients</div>
                    <div class="description">“<b>Cycling is a healthy</b>, fun and exciting way to travel. No matter what type of cycling you’re into, we’ve got a bike for you. We stock one of the largest bicycle ranges anywhere”</div>
                    <div class="author"><span>ARTUR</span> - France</div>
               </div>
          </div>
          
          <div class="item text-center">
               <div class="testimonial">
                    <div class="first-heading">They says</div>
                    <div class="second-heading">Happy clients</div>
                    <div class="description">“<b>Cycling is a healthy</b>, fun and exciting way to travel. No matter what type of cycling you’re into, we’ve got a bike for you. We stock one of the largest bicycle ranges anywhere”</div>
                    <div class="author"><span>NINE-THMES</span> - France</div>
               </div>
          </div>
     </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
     $("#testimonials").owlCarousel({
         singleItem:true,
         navigation: true,
         navigationText : ["",""]
    });
});
</script>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  7 => 
  array (
    'custom_class' => 'no-container',
    'margin_top' => '30',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      11 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="box">
     <div class="box-heading">Featured products</div>
     <div class="second-heading">Our featured products here</div>
     <div class="box-content">     
          <div class="row row-without-padding featured-products">
               <div class="col-sm-6 col-lg-3">
                    <div class="image"><img src="image/catalog/featured-product-1.png" alt="Product"></div>
                    <div class="description">
                         <div class="text">
                              <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                              <div class="brand">Cycling Shoes</div>
                              <div class="name"><a href="#">Sidebike m065 pro</a></div>
                              <div class="price">$250.00</div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-3">
                    <div class="image"><img src="image/catalog/featured-product-2.png" alt="Product"></div>
                    <div class="description">
                         <div class="text">
                              <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                              <div class="brand">Cycling Shoes</div>
                              <div class="name"><a href="#">Sidebike m065 pro</a></div>
                              <div class="price">$250.00</div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-3">
                    <div class="image"><img src="image/catalog/featured-product-3.png" alt="Product"></div>
                    <div class="description">
                         <div class="text">
                              <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                              <div class="brand">Cycling Shoes</div>
                              <div class="name"><a href="#">Sidebike m065 pro</a></div>
                              <div class="price">$250.00</div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-3">
                    <div class="image"><img src="image/catalog/featured-product-4.png" alt="Product"></div>
                    <div class="description">
                         <div class="text">
                              <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                              <div class="brand">Cycling Shoes</div>
                              <div class="name"><a href="#">Sidebike m065 pro</a></div>
                              <div class="price">$250.00</div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-3">
                    <div class="image"><img src="image/catalog/featured-product-5.png" alt="Product"></div>
                    <div class="description">
                         <div class="text">
                              <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                              <div class="brand">Cycling Shoes</div>
                              <div class="name"><a href="#">Sidebike m065 pro</a></div>
                              <div class="price">$250.00</div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-3">
                    <div class="image"><img src="image/catalog/featured-product-6.png" alt="Product"></div>
                    <div class="description">
                         <div class="text">
                              <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                              <div class="brand">Cycling Shoes</div>
                              <div class="name"><a href="#">Sidebike m065 pro</a></div>
                              <div class="price">$250.00</div>
                         </div>
                    </div>
               </div>
               
               <div class="col-sm-6 col-lg-3">
                    <div class="image"><img src="image/catalog/featured-product-7.png" alt="Product"></div>
                    <div class="description">
                         <div class="text">
                              <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                              <div class="brand">Cycling Shoes</div>
                              <div class="name"><a href="#">Sidebike m065 pro</a></div>
                              <div class="price">$250.00</div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  8 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/bg-offer.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '2',
    'disable_on_mobile' => '1',
    'column' => 
    array (
      12 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="box">
     <div class="box-heading">CARBON FIBER <span>CERVELO</span></div>
     <div class="second-heading">Limited time offer only on Go Shop</div>
     <div class="box-content">     
          <div class="limited-time-offer">
               <div class="countdown-special">
                    <script>
                    $(function () {
                    	var austDay = new Date();
                    	austDay = new Date(2015, 12 - 1, 22);
                    	var date = new Date();
                    	date.setDate(date.getDate() + 10 /*days*/);    
                    	$(\'#goshop-countdown\').countdown({until: date});
                    });
                    </script>
                    <div id="goshop-countdown" class="clearfix"></div>
               </div>
               
               <a href="#" class="button">Add to cart</a>
          </div>
     </div>
</div>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  9 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#2c2c2c',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      13 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="found-your-dream clearfix">
     <div class="buttons">
          <a href="#" class="button button2">Discover</a>
          <a href="#" class="button">Purchase</a>
     </div>
     
     <div class="first-heading">Found your <span>Dream Bike</span>? Why wait</div>
     <div class="second-heading">Get it now with a 0% finance deal from GoShop Fashion..</div>
</div>',
              $language_id => '',
            ),
          ),
        ),
      ),
    ),
  ),
  10 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      14 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products_tabs',
            'products_tabs' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '<span>New</span> arrivals',
                $language_id => '',
              ),
              'description' => 
              array (
                1 => 'Trending Products',
                $language_id => '',
              ),
              'width' => '270',
              'height' => '285',
              'limit' => '4',
              'products' => 
              array (
                1 => 
                array (
                  'title' => 
                  array (
                    1 => 'Clothing',
                    $language_id => '',
                  ),
                  'get_products_from' => 'products',
                  'product' => '',
                  'products' => '42,47,29,30',
                  'category' => '',
                  'categories' => '',
                ),
                2 => 
                array (
                  'title' => 
                  array (
                    1 => 'Bikes',
                    $language_id => '',
                  ),
                  'get_products_from' => 'products',
                  'product' => '',
                  'products' => '47,28,30,31',
                  'category' => '',
                  'categories' => '',
                ),
                3 => 
                array (
                  'title' => 
                  array (
                    1 => 'Components',
                    $language_id => '',
                  ),
                  'get_products_from' => 'latest',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                4 => 
                array (
                  'title' => 
                  array (
                    1 => 'Accessories',
                    $language_id => '',
                  ),
                  'get_products_from' => 'most_viewed',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                5 => 
                array (
                  'title' => 
                  array (
                    1 => 'Protections',
                    $language_id => '',
                  ),
                  'get_products_from' => 'random',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  11 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#000',
    'background_image_type' => '1',
    'background_image' => 'catalog/bg-newsletter2.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '3',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      15 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'goshop_newsletter.tpl',
              'title' => 
              array (
                1 => 'Subscribe newsletter <p>Sign Up for <span>Special Promotion</span></p>',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '<b>Lorem ipsum dolor sit amet</b>,  consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ',
                $language_id => '',
              ),
              'input_placeholder' => 
              array (
                1 => 'Enter your email address',
                $language_id => '',
              ),
              'subscribe_text' => 
              array (
                1 => 'Submit',
                $language_id => '',
              ),
              'unsubscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  12 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#000',
    'background_image_type' => '1',
    'background_image' => 'catalog/bg-newsletter2.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '2',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '2',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      16 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'goshop_newsletter.tpl',
              'title' => 
              array (
                1 => 'Subscribe newsletter <p>Sign Up for <span>Special Promotion</span></p>',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '<b>Lorem ipsum dolor sit amet</b>,  consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ',
                $language_id => '',
              ),
              'input_placeholder' => 
              array (
                1 => 'Enter your email address',
                $language_id => '',
              ),
              'subscribe_text' => 
              array (
                1 => 'Submit',
                $language_id => '',
              ),
              'unsubscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  13 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '96',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#f7f7f7',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '2',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      17 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'products_grid.tpl',
              'title' => 
              array (
                1 => 'Related products <p>Customers who viewed this item also viewed</p>',
                $language_id => '',
              ),
              'get_products_from' => 'random',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '270',
              'height' => '285',
              'limit' => '4',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>