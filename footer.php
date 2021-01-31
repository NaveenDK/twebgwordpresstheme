
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/image 7.png" class="mb-4" width="268" height="113" alt=""/> </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Restaurent Product</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Hotel Product</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Corporate Product</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Prime Laminated & Business Card </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Glassware Glass Print </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Uniform & T-Shirt </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Design & Print Service </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About Us </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us </a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>About us</h4>
          <p>Menu.co.nz Proudly a New zealand owened and operated business located in auckland's west in a custom designed and purpose build 	premise</p>
          <p>7/186 Target Road wairau<br>
            valley 0267, (Behind North<br>
            harbour ford)</p>
          <p>Open Times:<br>
            Mon-Thurs 8:30am - 4:00pm<br>
            Friday 8:30 - 1200pm </p>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Other</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy Policy </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms & Condition</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright"> &copy; Website Design & Developed By <a href="#">The Web Guys</a> </div>
  </div>
</footer>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div> 

<!-- Vendor JS Files --> 


<script src="https://unpkg.com/swiper/swiper-bundle.js"></script> 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> 
<?php wp_footer(); ?>
<!-- Template Main JS File --> 

<script>
    $(document).ready(function() {
// Swiper: Slider
    new Swiper('.swiper-container', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 3,
        paginationClickable: true,
		  centeredSlides : true,
        spaceBetween: 0,
		 pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            1028: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            },
			
			 200: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });
		});
	

		
		</script> 
<script>
    $(document).ready(function(){ 
    $('.tab-a').click(function(){  
      $(".tab").removeClass('tab-active');
      $(".tab[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
      $(".tab-a").removeClass('active-a');
      $(this).parent().find(".tab-a").addClass('active-a');
     });


});
</script>
</body>
</html>