<?php get_header(); ?>
<?php $hero = get_field('Hero')  ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center" data-aos="fade-up" data-aos-delay="500">
    <h1 class="text-center"><?php echo $hero['line_1_title']; ?><br>
    <?php echo $hero['line_2_title']; ?><br>
     <?php echo $hero['line_3_title'];?></h1>
    <a href="<?php echo $hero['btn_link']; ?>" class="btn-get-started scrollto"> <?php echo $hero['btn_text']; ?></a> </div>
</section>
<!-- End Hero -->

<main id="main"> 
  <?php $about= get_field('about'); ?>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-2 d-flex align-items-end justify-content-end sm-d-block" data-aos="fade-left"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/about-text.jpg" class="img-fluid round-img" alt=""> </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-1 content" data-aos="fade-right">
          <h1 class="big-title"> <?php echo $about['subtitle']; ?> </h1>
          <p class="font-italic"> <?php echo $about['paragraph']; ?> </p>
        </div>
      </div>
    </div>
  </section>
  <section class="slider">
    <div class="swiper-container"> 
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <div class="swiper-slide " >
          <div class="image-heading">
            <h1>Restaurant <br>
              Products</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/blankslide.png"/> </div>
        <div class="swiper-slide " >
          <div class="image-heading">
            <h1>Hotel Products <br>
              Product</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide1.jpeg"/> </div>
        <div class="swiper-slide " >
          <div class="image-heading">
            <h1>Corporate <br>
              Products</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/blankslide.png"/> </div>
        <div class="swiper-slide " >
          <div class="image-heading">
            <h1>Restaurent <br>
              Product</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/slide1.jpeg"/> </div>
        <div class="swiper-slide " >
          <div class="image-heading">
            <h1>Restaurent <br>
              Product</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/blankslide.png"/> </div>
     
      </div>
      
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- End About Section -->
  <?php $recentwork= get_field('recent_work'); ?>
  <section  class="recent-work">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-end" data-aos="fade-left">
          <p class="font-italic"> <?php echo $recentwork['paragraph_text'];?></p>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0  content" data-aos="fade-right">
          <h1 class="big-title text-right">Recent <br>
            Work</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 pr-3" data-aos="fade-left"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle 15.png" class="img-fluid mb-4"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle 14.png" class="img-fluid"> </div>
        <div class="col-lg-5 pt-4 pt-lg-0  content text-right" data-aos="fade-right"> <a href="  <?php echo $recentwork['button_url'];?>" class="btn-view-all scrollto mb-5">  <?php echo $recentwork['view_all_button_text'];?> <i class="fa fa-angle-right float-right" aria-hidden="true"></i> </a> <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle 29.png" class="img-fluid mt-5"/> </div>
      </div>
    </div>
  </section>
  <section  class="mudbrick">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 " data-aos="fade-left"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/Rectangle 21.png" class="img-fluid"/> </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content offset-1 " data-aos="fade-right">
          <div  class="tab tab-active" data-id="tab1">
            <h1 class="big-title text-white mb-4">Mudbrick <br>
              Winery</h1>
            <p class=" text-white mb-auto"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book </p>
          </div>
          <div  class="tab" data-id="tab2">
            <h1 class="big-title text-white mb-4">123 <br>
              Winery</h1>
            <p class=" text-white mb-auto"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book </p>
          </div>
          <div  class="tab" data-id="tab3">
            <h1 class="big-title text-white mb-4">456 <br>
              Winery</h1>
            <p class=" text-white mb-auto"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book </p>
          </div>
          <div  class="tab" data-id="tab4">
            <h1 class="big-title text-white mb-4">759 <br>
              Winery</h1>
            <p class=" text-white mb-auto"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book </p>
          </div>
            <div  class="tab" data-id="tab5">
            <h1 class="big-title text-white mb-4">101 <br>
              Winery</h1>
            <p class=" text-white mb-auto"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book </p>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="row mt-5">
            <div class="col-md-12">
              <div class="clients ">
                <div class="swiper-logo owl-carousel">
                  <div class="item"> <a class="tab-a active-a" data-id="tab1"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/image 1.png"  alt=""/> </a> </div>
                  <div class="item"> <a class="tab-a" data-id="tab2"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/image 2.png"  alt=""/> </a> </div>
                  <div class="item"> <a class="tab-a" data-id="tab3"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/image 3.png"  alt=""/> </a> </div>
                  <div class="item"> <a class="tab-a" data-id="tab4"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/imgage 4.png"  alt=""/> </a> </div>
                  <div class="item"> <a class="tab-a" data-id="tab5"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/image 2.png"  alt=""/> </a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section  class="another-second">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0  content" data-aos="fade-right">
          <h1 class="big-title text-center">Don't waste <br>
            another<br>
            Second</h1>
        </div>
      </div>
      <?php $contact = get_field('contact_details');?>
      
      <div class="row">
        <div class="col-lg-6 pr-3" data-aos="fade-left">
          <div class="black-box">
            <p><span>Call:</span> &nbsp;<strong> <?php echo $contact['phone_number'];?></strong></p>
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0  content" data-aos="fade-right">
          <div class="black-box">
            <p><span>Email:</span> &nbsp;<strong> <?php echo $contact['email_address'];?></strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End #main -->
<?php get_footer(); ?>