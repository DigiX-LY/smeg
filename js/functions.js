
//Window Loaded Handler
  $(window).load(function() {'use strict';
	$(".loader").fadeOut("slow");
	$(".smegVideo").attr("src","https://www.youtube.com/embed/GIdOlKh16Rc?autoplay=1");
	$(".tripMap").attr("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.2474330569516!2d13.122321384731283!3d32.86517218679223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8eddd31064341%3A0xc28ab06d774719b5!2ssmeg.libya!5e0!3m2!1sar!2sly!4v1601375839884!5m2!1sar!2sly");
	$(".misuMap").attr("src","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.2474330569516!2d13.122321384731283!3d32.86517218679223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8eddd31064341%3A0xc28ab06d774719b5!2ssmeg.libya!5e0!3m2!1sar!2sly!4v1601375839884!5m2!1sar!2sly");
  });
  

jQuery(function($) {'use strict';

  //goto TOP Button
	 $('.go-top').on('click', function(){
		$('html, body').animate({scrollTop: 0}, 800);
	 });
	 
	 
	 
	   
// ============= to input quantity (Shop page)============== 
	$('.spinner input').keydown(function(e){
		e.preventDefault();
		return false;
	});
	 var minNumber = 1;
	 var maxNumber = 10;
	 $('.spinner .btn:first-of-type').on('click', function() {
		  if($('.spinner input').val() == maxNumber){
				return false;
		  }else{
				$('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
		  }
	 });

	 $('.spinner .btn:last-of-type').on('click', function() {
		  if($('.spinner input').val() == minNumber){
				return false;
		  }else{
				$('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
		  }
	 });

 // ============== Timmer ================== 
  $('.countdown').final_countdown();
  
 
  // ================ Accordions =============== 
  $(".set > a").on("click", function(){
    if($(this).hasClass('active')){
      $(this).removeClass("active");
      $(this).siblings('.content').slideUp(500);
      $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
    }else{
      $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
    $(this).find("i").removeClass("fa-plus").addClass("fa-minus");
    $(".set > a").removeClass("active");
    $(this).addClass("active");
    $('.content').slideUp(500);
    $(this).siblings('.content').slideDown(500);
    }
    
  });
  
    
     // =============== tabbed content =================
    $(".tab_content").hide();
    $(".tab_content:first").show();
    $("ul.tabs li").on('click', function() {
		  $(".tab_content").hide();
		  var activeTab = $(this).attr("rel"); 
		  $("#"+activeTab).fadeIn();		
		  
		  $("ul.tabs li").removeClass("active");
		  $(this).addClass("active");

		  $(".tab_drawer_heading").removeClass("d_active");
		  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	$(".tab_drawer_heading").on('click', function() {
       $(".tab_content").hide();
       var d_activeTab = $(this).attr("rel"); 
       $("#"+d_activeTab).fadeIn(1200);
	  
	    $(".tab_drawer_heading").removeClass("d_active");
       $(this).addClass("d_active");
	  
	    $("ul.tabs li").removeClass("active");
	    $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	 
  
  //TO Filter the Grids
    $('.view-button.grid').on('click', function(){
    	if($(this).hasClass('active')) return false;
    	$('.shop-grid').fadeOut(function(){
    		$('.shop-grid').removeClass('list-view').addClass('grid-view');
    		$(this).fadeIn();
    	});
    	$(this).parent().find('.active').removeClass('active');
    	$(this).addClass('active');
    });

    $('.view-button.list').on('click', function(){
    	if($(this).hasClass('active')) return false;
    	$('.shop-grid').fadeOut(function(){
    		$('.shop-grid').removeClass('grid-view').addClass('list-view');
    		$(this).fadeIn();
    	});
    	$(this).parent().find('.active').removeClass('active');
    	$(this).addClass('active');
    });
	 
	 
	 // popup
	 $('.fancybox').fancybox();
  
  
  
 // ================ Owl Carousel ==================== 
	 
	 //Four Col Products
	 $("#fourCol-slider").owlCarousel({
		  autoPlay: false,
		  pagination : false,
		  navigation : true,
		  navigationText :["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  items : 4,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,2]
	
	 });
	 
	 //Brands
	 $("#brand-slider").owlCarousel({
		  autoPlay: true,
		  pagination : false,
		  items : 5,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,4]
	
	 });
  
	  //Testinomials
	  $("#tstinomial-slider").owlCarousel({
		  navigation : true,
		  navigationText :["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  slideSpeed : 300,
		  pagination : true,
		  transitionStyle : "fade",
		  singleItem:true
	
	 });
	 
	  //Top Sellers
	 $(".seller-slider").owlCarousel({
		  navigation : true,
		  navigationText :["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  slideSpeed : 300,
		  pagination : false,
		  singleItem:true
	
	 });
	 
	 
	 // ================== Revolution Slider ===================
	 var revapi;
	 revapi = jQuery("#rev_slider").revolution({
		 sliderType:"standard",
		 sliderLayout:"fullwidth",
		 scrollbarDrag:"true",
		 delay:9000,
		 navigation: {
			 arrows:{enable:true},
			 touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false

					}
		 },			
		 gridwidth:1170,
		 gridheight:690		
	 });
	 
	 //Home2
	 var revapi;
	 revapi = jQuery("#rev_home_slider").revolution({
		 sliderType:"standard",
		 sliderLayout:"fullwidth",
		 scrollbarDrag:"true",
		 delay:9000,
		 navigation: {
			 arrows:{enable:true},
			 touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
			 
		 },			
		 gridwidth:1170,
		 gridheight:840		
	 });	
  


  // Product Single
    $('#slider_product').cubeportfolio({
        layoutMode: 'slider',
        drag: true,
        auto: false,
        autoTimeout: 5000,
        autoPauseOnHover: true,
        showNavigation: false,
        showPagination: false,
        rewindNav: true,
        scrollByPage: true,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1,
            cols: 1
        }],
        gapHorizontal: 0,
        gapVertical: 0,
        caption: '',
        displayType: 'fadeIn',
        displayTypeSpeed: 400,

        plugins: {
            slider: {
                pagination: '#js-pagination-slider',
                paginationClass: 'cbp-pagination-active',
            }
        }
    });
	 

    // ===============	Parallax ===================	
	
	$('#parallax2').parallax("50%", 0.2);
	$('#testinomialBg').parallax("50%", 0.2);
	$('#newsletter').parallax("50%", 0.2);
 
   
 //Map 
 $('#test')
      .gmap3({
        center:[48.8620722, 2.352047],
        zoom:4
      })
      .marker([
        {position:[48.8620722, 2.352047]},
        {address:"86000 Poitiers, France"},
        {address:"66000 Perpignan, France", icon: "http://maps.google.com/mapfiles/marker_grey.png"}
      ])
        .on('click', function (marker) {
          marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
        })
        .then(function (markers) {
          markers[1].setIcon('http://maps.google.com/mapfiles/marker_orange.png');
        });
	 
	 
	 
});


