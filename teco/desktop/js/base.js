/*banner close*/
$(document).ready(function() {
	$('.bukatutup').click(function () {
		//$('.bigbox').toggleClass('bukaopen');
        $('.outfixed').toggleClass('open');
		$(this).find('i').toggleClass('arrowdw arrowup');
		$(this).find('span').toggleClass('texttutup textbuka');
		});
  $('.cls728').click(function () {
		$(this).closest('.banner728').hide();
	}); 
  $('.cls300').click(function () {
		$(this).closest('.banner300').hide();
	});
  $('.cls-head-banner').click(function () {
		$(this).closest('.head-banner').hide();
		$('.header').removeClass('whead-banner');
		$('.cd-main-content').removeClass('whead-banner');
	});
});
/*slider*/
$(document).ready(function() {
  $('.adv-cls').click(function () {
		$('.fix-bottom').hide();
		$('.footer').removeClass('w-fix-bottom');
	}); 
$('.slider-menu').slick({
  slidesToShow:10,
  arrows: true,
  autoplay: false,
  centerMode: false,
  variableWidth: true,
  slidesToScroll:4,
  infinite: false,
  adaptiveHeight: false,
});
 $('#slider-berita-pilihan').slick({
  slidesToShow: 1,
  arrows: true,
  autoplay: true,
  centerMode: true,
  slidesToScroll:1,
  dots: true,
});
$('#slider-detail-foto').slick({
  slidesToShow: 1,
  arrows: true,
  autoplay: false,
  centerMode: true,
  slidesToScroll:1,
  dots: true,
  adaptiveHeight:true,
  infinite: false,
});
 $('#slider-kanal').slick({
  slidesToShow: 1,
  arrows: true,
  autoplay: true,
  centerMode: true,
  slidesToScroll:1,
  dots: true,
});
/*search & menu sub menu*/
$('.subbox').hide();
$('.block-all').hide();
$('.click-sub').click(function() {
  if ($(this).hasClass('active')) {    
    $(this).removeClass('active');
	$(this).find('.deicons').addClass('fa-angle-down');
	$(this).find('.deicons').removeClass('fa-angle-up');
    $('.subbox').slideUp("fast").removeClass('active');
  } else {
    $('.subbox').slideUp("fast").removeClass('active');
    $('.click-sub').removeClass('active');
    $(this).addClass('active');
    $(this).next().filter('.subbox').slideDown("fast").addClass('active');
	$(this).find('.deicons').addClass('fa-angle-up');
	$(this).find('.deicons').removeClass('fa-angle-down');
  }
});
$('.box-alert').hide();
	$('.show-alert').on('click', function(event){
		event.preventDefault();
		$('.box-alert').slideDown('fast');
		$('body').addClass('overflow');
	});

	$('.alert-cls').click(function () {
		$('.box-alert').slideUp('fast');
		$('body').removeClass('overflow');
	});
	$('.box-konfirmasi-forgot').hide();
		$('.klik-konfirmasi-forgot').on('click', function(event){
			event.preventDefault();
			$('.box-konfirmasi-forgot').fadeIn('fast');
			$('.box-forgot').hide();
	});
	$('.box-konfirmasi-daftar').hide();
		$('.klik-konfirmasi-daftar').on('click', function(event){
			event.preventDefault();
			$('.box-konfirmasi-daftar').fadeIn('fast');
			$('.box-daftar').hide();
	});
$('.buka-popup').magnificPopup({
  closeBtnInside:true,
  removalDelay: 500,
    callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true
});
});
$(document).mouseup(function (e) {
	if ($(e.target).closest(".subbox").length
				=== 0) {
		$(".subbox").slideUp("fast").removeClass('active');
		$(this).find('.deicons').addClass('fa-angle-down');
	}
});
$(document).ready(function () {
  $(".search-top input").focus(function () {
    $(".search-popular").slideDown("fast");
	$(".block-all").fadeIn("fast");
    //return false;
  });
  $(".search-top input").blur(function () {
    if (!$(this).val()) {
      $(".search-popular").slideUp("fast");
	  $(".block-all").fadeOut("fast");
    }
  });
  $('.click-balasan').click(function() {
  if ($(this).hasClass('active')) {    
	$('.box-balasan').hide();
	$('#div'+$(this).attr('target')).slideToggle();
	
  } else {
	$('#div'+$(this).attr('target')).slideToggle();
    $(this).next().filter('.box-balasan').slideDown("fast").addClass('active');
	
  }
});
  $('.click-input-balasan').click(function() {
  if ($(this).hasClass('active')) {
	$('.box-input-balasan').hide();
	$('#div'+$(this).attr('target')).slideToggle();
  } else {
	$('#div'+$(this).attr('target')).slideToggle();
    $(this).next().filter('.box-input-balasan').slideDown("fast").addClass('active');
  }
});

$('.close-tempo-apps').click(function() {
$('.download-apps').fadeOut('');
});
}); 

/*fixed script*/
$(document).ready(function() {			
var width = window.innerWidth || document.documentElement.clientWidth;
	if (width > 100) {
//		$(".skinads-left").stick_in_parent({offset_top:146});
//		$(".skinads-right").stick_in_parent({offset_top:146});
//		$(".fixed-col-right").stick_in_parent({offset_top:0});
//		$(".fixed-col-left").stick_in_parent({offset_top:146});
	}
});
$(document).ready(function () {
    $('.eye-btn').click(function () {
		if($(this).hasClass('fa-eye-slash')){
          $(this).removeClass('fa-eye-slash');
          $(this).addClass('fa-eye');
          $('.passwd').attr('type','text');
        }else{
          $(this).removeClass('fa-eye');
          $(this).addClass('fa-eye-slash');  
          $('.passwd').attr('type','password');
        }
    });
    $('.eye-btn2').click(function () {
		if($(this).hasClass('fa-eye-slash')){
          $(this).removeClass('fa-eye-slash');
          $(this).addClass('fa-eye');
          $('.passwd2').attr('type','text');
        }else{
          $(this).removeClass('fa-eye');
          $(this).addClass('fa-eye-slash');  
          $('.passwd2').attr('type','password');
        }
    });
    $('.eye-btn3').click(function () {
		if($(this).hasClass('fa-eye-slash')){
          $(this).removeClass('fa-eye-slash');
          $(this).addClass('fa-eye');
          $('.passwd3').attr('type','text');
        }else{
          $(this).removeClass('fa-eye');
          $(this).addClass('fa-eye-slash');  
          $('.passwd3').attr('type','password');
        }
    });
});
jQuery(function(){
        jQuery('#favorit').multiSelect();
		jQuery('#minat').multiSelect();
    });
/*dark Template*/
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        document.documentElement.setAttribute('data-theme', 'light');
          localStorage.setItem('theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

/*rating star*/
$(document).ready(function(){
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); 
	
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
//    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
//    var msg = "";
//    if (ratingValue > 1) {
//        msg = "Thanks! You rated this " + ratingValue + " stars.";
//    }
//    else {
//        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
//    }
//    responseMessage(msg);
    
  }); 

});


//function responseMessage(msg) {
//  $('.success-box').fadeIn(200);  
//  $('.success-box div.text-message').html("<span>" + msg + "</span>");
//}
