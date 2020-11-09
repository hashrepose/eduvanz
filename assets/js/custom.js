(function($) {
	"use strict";
	
	// ______________ Modal
	$("#myModal").modal('show');
	
	$(document).ready(function() {
		$("a[data-theme]").click(function() {
			$("head link#theme").attr("href", $(this).data("theme"));
			$(this).toggleClass('active').siblings().removeClass('active');
		});
		$("a[data-effect]").click(function() {
			$("script#effect").attr("src", $(this).data("effect"));
			$(this).toggleClass('active').siblings().removeClass('active');
		});
	});
	
	// ______________Cover Image
	$(".cover-image").each(function() {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});
	
	// ______________Loader
	$(window).on("load", function(e) {
		$("#loading").fadeOut("slow");
	})
	
	
	// ______________Horizontal-menu Active Class
	$(document).ready(function() {
		$(".horizontalMenu-list li a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
	});
	
	// ______________ GLOBAL SEARCH
	$(document).on("click", "[data-toggle='search']", function(e) {
		var body = $("body");

		if(body.hasClass('search-gone')) {
			body.addClass('search-gone');
			body.removeClass('search-show');
		}else{
			body.removeClass('search-gone');
			body.addClass('search-show');
		}
	});
	
	// ______________LEFTMENU
	var toggleSidebar = function() {
		var w = $(window);
		if(w.outerWidth() <= 1024) {
			$("body").addClass("sidebar-gone");
			$(document).off("click", "body").on("click", "body", function(e) {
				if($(e.target).hasClass('sidebar-show') || $(e.target).hasClass('search-show')) {
					$("body").removeClass("sidebar-show");
					$("body").addClass("sidebar-gone");
					$("body").removeClass("search-show");
				}
			});
		}else{
			$("body").removeClass("sidebar-gone");
		}
	}
	toggleSidebar();
	$(window).resize(toggleSidebar);
	
	// ______________ Back to Top
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$("#back-to-top").on("click", function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});
	
	// ______________Rating Stars
	var ratingOptions = {
		selectors: {
			starsSelector: '.rating-stars',
			starSelector: '.rating-star',
			starActiveClass: 'is--active',
			starHoverClass: 'is--hover',
			starNoHoverClass: 'is--no-hover',
			targetFormElementSelector: '.rating-value'
		}
	};
	$(".rating-stars").ratingStars(ratingOptions);
	
	
	// ______________Search
	// $('body, .navbar-collapse form[role="search"] button[type="reset"]').on('click keyup', function(event) {
	// 	console.log(event.currentTarget);
	// 	if (event.which == 27 && $('.navbar-collapse form[role="search"]').hasClass('active') ||
	// 	$(event.currentTarget).attr('type') == 'reset') {
	// 	closeSearch();
	// 	}
	// });
	function closeSearch() {
		var $form = $('.navbar-collapse form[role="search"].active')
		$form.find('input').val('');
		$form.removeClass('active');
	}
	// Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
	$(document).on('click', '.navbar-collapse form[role="search"]:not(.active) button[type="submit"]', function(event) {
		event.preventDefault();
		var $form = $(this).closest('form'),
		$input = $form.find('input');
		$form.addClass('active');
		$input.focus();
	});
	// if your form is ajax remember to call `closeSearch()` to close the search container
	$(document).on('click', '.navbar-collapse form[role="search"].active button[type="submit"]', function(event) {
		event.preventDefault();
		var $form = $(this).closest('form'),
		$input = $form.find('input');
		$('#showSearchTerm').text($input.val());
		closeSearch()
	});
	
	
	// ______________Quantity-right-plus
	var quantitiy = 0;
	$('.quantity-right-plus').on('click', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val()); 
		$('#quantity').val(quantity + 1); 
	});
	$('.quantity-left-minus').on('click', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if (quantity > 0) {
			$('#quantity').val(quantity - 1);
		}
	});
	
	// ______________Full screen
	$("#fullscreen-button").on("click", function toggleFullScreen() {
      if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
          document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
          document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (document.documentElement.msRequestFullscreen) {
          document.documentElement.msRequestFullscreen();
        }
      } else {
        if (document.cancelFullScreen) {
          document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      }
    })
	
	// ______________ mCustomScrollbar
	$(".highlight pre").mCustomScrollbar({
		theme:"minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});
	$(".team").mCustomScrollbar({
		theme:"minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});
	
	//Switcher
	$(document).on("click", "a[data-switcher]", function(e) {
		$("head link#switcher").attr("href", $(this).data("switcher"));
		$(this).toggleClass('active').siblings().removeClass('active');
	});
	
	/*Header Styles*/
	$(document).on('click', '#myonoffswitch', function(e){
		if (this.checked) {
			$('body').addClass('horizontal-conatiner');
			localStorage.setItem("horizontal-conatiner", "True");
		}
		else {
			$('body').removeClass('horizontal-conatiner');
			localStorage.setItem("horizontal-conatiner", "false");
		}
	});
	
	/*leftmenu-Iconic style*/
	$(document).on('click', '#myonoffswitch1', function(e){
		if (this.checked) {
			$('body').addClass('sidenav-toggled');
			localStorage.setItem("sidenav-toggled", "True");
		}
		else {
			$('body').removeClass('sidenav-toggled');
			localStorage.setItem("sidenav-toggled", "false");
		}
	});
	
	/*leftmenu-Iconic style2*/
	$(document).on('click', '#myonoffswitch2', function(e){
		if (this.checked) {
			$('body').addClass('leftmenu-style-2');
			$('body').removeClass('leftmenu-light');
			localStorage.setItem("leftmenu-style-2", "True");
		}
		else {
			$('body').removeClass('leftmenu-style-2');
			localStorage.setItem("leftmenu-style-2", "false");
		}
	});
	
	/*leftmenu-Iconic style2*/
	$(document).on('click', '#myonoffswitch3', function(e){
		if (this.checked) {
			$('body').addClass('horizontalmenu-dark');
			$('body').removeClass('horizontalmenu-color');
			localStorage.setItem("horizontalmenu-dark", "True");
		}
		else {
			$('body').removeClass('horizontalmenu-dark');
			localStorage.setItem("horizontalmenu-dark", "false");
		}
	});
	
	/*leftmenu-Iconic style2*/
	$(document).on('click', '#myonoffswitch4', function(e){
		if (this.checked) {
			$('body').addClass('horizontalmenu-color');
			$('body').removeClass('horizontalmenu-dark');
			localStorage.setItem("horizontalmenu-color", "True");
		}
		else {
			$('body').removeClass('horizontalmenu-color');
			localStorage.setItem("horizontalmenu-color", "false");
		}
	});
	
	
	
	/*leftmenu-Iconic style3*/
	$(document).on('click', '#myonoffswitch5', function(e){
		if (this.checked) {
			$('body').addClass('leftmenu-style-3');
			localStorage.setItem("leftmenu-style-3", "True");
		}
		else {
			$('body').removeClass('leftmenu-style-3');
			localStorage.setItem("leftmenu-style-3", "false");
		}
	});
	
	/*leftmenu-Iconic style3*/
	$(document).on('click', '#myonoffswitch6', function(e){
		if (this.checked) {
			$('body').addClass('leftmenu-light');
			$('body').removeClass('leftmenu-style-2');
			localStorage.setItem("leftmenu-light", "True");
		}
		else {
			$('body').removeClass('leftmenu-light');
			localStorage.setItem("leftmenu-light", "false");
		}
	});
	
	
	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function() {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#ebebf1',
				lineCap: ''
			});
		});
	}
	const DIV_CARD = 'div.card';
	// ______________Tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// ______________Popover
	$('[data-toggle="popover"]').popover({
		html: true
	});
	
	// ______________Card Remove
	$('[data-toggle="card-remove"]').on('click', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});
	
	// ______________Card Collapse
	$('[data-toggle="card-collapse"]').on('click', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	// ______________Card Full Screen
	$('[data-toggle="card-fullscreen"]').on('click', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	
	// ______________Increment
	var quantitiy=0;
	$('.quantity-right-plus').on('click', function(e){
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		$('#quantity').val(quantity + 1);

	});
	$('.quantity-left-minus').on('click', function(e){
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if(quantity>0){
			$('#quantity').val(quantity - 1);
		}
	});
	
	//Date range as a button
	$('#daterange-btn').daterangepicker({
		ranges: {
			'Today': [moment(), moment()],
			'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		startDate: moment().subtract(29, 'days'),
		endDate: moment()
	}, function(start, end) {
		$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
	})
	
	
})(jQuery);

$(document).ready(function(){
		$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
			localStorage.setItem('activeTab', $(e.target).attr('href'));
		});
		var activeTab = localStorage.getItem('activeTab');
		if(activeTab){
			$('#myTab a[href="' + activeTab + '"]').tab('show');
		} 
		 
	});	
	


