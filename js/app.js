/* App Js */
;jQdcc = jQuery.noConflict();
jQdcc(document).ready(function($){
	var w,h,state;
	var stateArray = ['home','lobby','developer','creative','illustrator','rooftop','outspace'];
	var dccLobby, dccDeveloper, dccCreative, dccIllustrator, dccRooftop, dccOutspace;

	function calcY(s){
		var scrollY = 0;
		if(s<=5){
			scrollY = ((h*(6-s))+(50*(5-s))+(2*h))*-1;
		}else{
			scrollY = 0;
		}
		return scrollY;
	}
	function nextPage(){
		if(state<6){
			state++;
			$('body').attr('data-state',state);
			$('.dcc-nav').addClass('disabled');
			if(state==6){
				$('.dcc-container').addClass('launched');
				$('.rocket-holder').addClass('active');
				$('.rocket-holder').css({'transform':'translate3d(0,-'+h*3+'px, 0) scale(0)'});
			}
			$('.dcc-container').css({'transform':'translateY('+calcY(state)+'px)'});
		}
		if(state==6){
			setTimeout(function(e){
				$('.dcc-container').removeClass('launched');
				$('.rocket-holder').removeClass('active');
				$('.rocket-holder').css({'transform':'translate3d(0,0, 0) scale(1)'});
				$('.dcc-nav').removeClass('disabled');
			},10000);
		}else{
			setTimeout(function(e){
				$('.dcc-nav').removeClass('disabled');
			},2000);
		}
		
		$('body, .dcc-nav, .top-nav').removeClass(stateArray[state-1]).addClass(stateArray[state]);
		checkState();
	}
	function prevPage(){
		if(state>1){
			state--;
			$('body').attr('data-state',state);
			$('.dcc-nav').addClass('disabled');
			$('.dcc-container').css({'transform':'translateY('+calcY(state)+'px)'});
		}
		setTimeout(function(e){
			$('.dcc-nav').removeClass('disabled');
		},2000);
		$('body, .dcc-nav, .top-nav').removeClass(stateArray[state-1]).addClass(stateArray[state]);
		checkState();
	}
	function gotoPage(page){
		var cState = state;
		if(state!=page){			
			state=page;
			if(page<7){
				$('body').attr('data-state',state);
				$('.dcc-nav').addClass('disabled');
				$('.dcc-container').css({'transform':'translateY('+calcY(state)+'px)'});
			}			
			setTimeout(function(e){
				$('.dcc-nav').removeClass('disabled');
			},2000);			
			$('body, .dcc-nav, .top-nav').removeClass(stateArray[cState]).addClass(stateArray[state]);
			checkState();
		}
	}
	function refreshPage(page){
		
		if(page<7){
			$('body').attr('data-state',state);
			$('.dcc-nav').addClass('disabled');
			$('.dcc-container').addClass('skip-transition').css({'transform':'translateY('+calcY(state)+'px)'});
		}			
		setTimeout(function(e){
			$('.dcc-container').removeClass('skip-transition');
			$('.dcc-nav').removeClass('disabled');
		},1000);			
		$('body, .dcc-nav, .top-nav').removeClass(stateArray[state-1]).addClass(stateArray[state]);
		checkState();		
	}
	function resizeRes(){
		var nW = Math.round((2400*h)/1024);
		var nWx = Math.round((4000*h)/1024);
		var nWs = Math.round((2400*h*2)/2048);
		$('.draggable-normal, .draggable-normal .drag-background, .drag-background img').width(nW).height(h);
		$('.draggable-wide, .draggable-wide .drag-background, .drag-background img').width(nWx).height(h);
		$('.dcc-draggable').height(h);
		$('.sky-separator').css({'height':(h*2)+'px','background-size':nWs+'px '+(h*2)+'px'});
		$('.mascot-bear .mascot').css({'width':(nWx*0.04375)+'px','height':(h*0.234375)+'px','background-size':((nWx*0.04375)*40)+'px '+(h*0.234375)+'px'});
		$('.mascot-bebek .mascot').css({'width':(nWx*0.0325)+'px','height':(h*0.21484375)+'px','background-size':((nWx*0.0325)*25)+'px '+(h*0.21484375)+'px'});
		$('.mascot-cat .mascot').css({'width':(nWx*0.05)+'px','height':(h*0.21484375)+'px','background-size':((nWx*0.05)*25)+'px '+(h*0.21484375)+'px'});
		$('.smoke-animation').css({'width':(nWx*0.3)+'px', 'height':(h*0.29296875)+'px', 'background-size':((nWx*0.3)*10)+'px '+(h*0.29296875)+'px'});
		$('.fire-animation').css({'width':(nWx*0.025)+'px', 'height':(h*0.29296875)+'px', 'background-size':((nWx*0.025)*10)+'px '+(h*0.29296875)+'px'});
		var rocket = $('.rocket-holder').width();
		$('.rocket-smoke').css({'margin-left':'-'+((nWx*0.3)/2)+'px'});
		$('.rocket-fire').css({'margin-left':'-'+((nWx*0.025)/2)+'px'})
		$('.btn-launch').css({'width':(rocket*0.51)+'px', 'height':(rocket*0.51)+'px', 'margin-left':'-'+((rocket*0.51)/2)+'px'});
		$('.btn-launch:before').css({'width':(rocket*0.51)+'px', 'height':(rocket*0.51)+'px', 'margin-left':'-'+((rocket*0.51)/2)+'px'});
		$('.reveal-modal .hiring-content, .team-reveal-modal .details, .menu-items, .popup-content').perfectScrollbar('update');		
	}

	function enableNav(){
		$('body').removeClass('disable-nav');
	}
	function disableNav(){
		$('body').addClass('disable-nav');
	}
	function checkState(){
		$('.dcc-nav .nav').removeClass('disabled');
		if(state<=1){
			$('.dcc-nav .down').addClass('disabled');
		}else if(state>=6){
			$('.dcc-nav .up').addClass('disabled');
		}
	}
	function initMenu(){
		$('.top-nav a').on('click', function(e){
			e.preventDefault();
			var ps = $(this).data('page');
			if(!$('.dcc-nav').hasClass('disabled')){
				gotoPage(ps);
			}		
		})
	}
	function init(){
		w = $(window).width();
		h = $(window).height();
		state = $('body').data('state');

		setTimeout(function(e){$('body').addClass('ready');},3000);

		if(w <= 640){
			$('.dragon-building img').attr('src', $('.dragon-building img').data('mobile'));
		}else if(w <= 1024 && w > 640){
			$('.dragon-building img').attr('src', $('.dragon-building img').data('tablet'));
		} else if(w <= 1440 && w > 1024){
			$('.dragon-building img').attr('src', $('.dragon-building img').data('medium'));
		} else {
			$('.dragon-building img').attr('src', $('.dragon-building img').data('src'));
		}

		if(h <= 400){
			$('#dcc-lobby .drag-background img').attr('src', $('#dcc-lobby .drag-background img').data('mobile')); //400
		}else if(h <= 600 && h > 400){
			$('#dcc-lobby .drag-background img').attr('src', $('#dcc-lobby .drag-background img').data('tablet')); //600
		}else if(h <= 800 && h > 600){
			$('#dcc-lobby .drag-background img').attr('src', $('#dcc-lobby .drag-background img').data('medium')); //800
		}else {
			$('#dcc-lobby .drag-background img').attr('src', $('#dcc-lobby .drag-background img').data('src')); //1024
		}

		initImagesLoaded();

		$('.logo a').on('click mouseup touchend', function(e){
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled') && !$('html').hasClass('touch')){
				gotoPage(1);
			}
		})

		$('.menu-button').on('mouseup touchend', function(e){
			e.preventDefault();
			if(!$('#header').hasClass('disabled')){
				if(!$('.mainmenu').hasClass('active')){
					$('body').addClass('menu-opened');
					$('.mainmenu').addClass('active');
				}else{
					$('body').removeClass('menu-opened');
					$('.mainmenu').removeClass('active');
				}
			}
		});

		$('.menu-items').perfectScrollbar();

		$('.dcc-nav .up').on('mouseup touchend', function(e){
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled') && state<6){
				nextPage();
			}
		})
		$('.dcc-nav .down').on('mouseup touchend', function(e){
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled') && state>1){
				prevPage();
			}		
		})

		$('.btn-watch-us').on('mouseup touchend', function(e){
			e.preventDefault();
			$('.wp-container').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/xgkNe6R4Un0" frameborder="0" allowfullscreen></iframe><a href="#" class="wp-btnclose"></a>');
			$('.watchus-popup').removeClass('deactive');
			$('.watchus-popup').addClass('active');
		});
		$('.watchus-popup, .wp-btnclose').on('mouseup touchend', function(e){
			e.preventDefault();
			$('.wp-container').html('');
			$('.watchus-popup').removeClass('active');
			$('.watchus-popup').addClass('deactive');
		});

		resizeRes();
		checkState();
		
		start();
		initMenu();
		initCentered();
		initEsc();

		$(window).on('resize', function(e){

			
			h = $(window).height();
			w = $(window).width();
			resizeRes();
			refreshPage(state);
			dccLobby.refresh();
		dccDeveloper.refresh();
		dccCreative.refresh();
		dccIllustrator.refresh();
		dccRooftop.refresh();
		dccOutspace.refresh();
		});
	}
	
	function start(){
		$('.start-now').on('mouseup touchend', function(e){
			e.preventDefault();
			state=1;
			var initScroll = ((h*(6-state))+(50*(5-state))+(2*h))*-1;
			$('.dcc-container').css({'transform':'translateY('+initScroll+'px)'});
			initLobby();
			var $scrolled = ($('#dcc-home').height()-$(window).height());
			$('#header').show();
			var timeout = 4000;
			if(w < 769){
				timeout = 1000;
			}
			setTimeout(function(e){
				$('#dcc-home').css({'transformOrigin':'50% 100% 0', 'transform':'translateY(-'+$scrolled+'px)', 'transition-duration':timeout+'ms'});
				setTimeout(function(e){
					$('#dcc-home').css({'transform':'translateY(-'+$scrolled+'px) scale(2)', 'opacity':'0', 'transition':'transform 1.5s cubic-bezier(0.465, 0.183, 0.153, 0.946), opacity 2s cubic-bezier(0.465, 0.183, 0.153, 0.946) 1.5s'});
					setTimeout(function(e){
						$('body').attr('data-state', state);
						$('.dcc-nav, body, .top-nav').removeClass(stateArray[state-1]).addClass(stateArray[state]);
						$('#dcc-intro').remove();
						$('.skip-typed-button').on('click', function(e){
							e.preventDefault();
							$(this).hide();
							$('.normal-typed').hide();
							$('.skip-typed').show();

							$('.lobby-button-container').addClass('active');
						});
						$('.paragraph').typed({	strings:["Hi, ^500 we just came back to mother earth to spread what we have seen back in the future. ^700 What we are doing might not be something you have seen before. ^700 <br/>We know what you have thought.<br/> ^1000 No, ^200 not that one, ^1000 and not that one either. ^900 <br/>Curious?"], startDelay:500,	loop:false,	typeSpeed: 2, callback: function(e){$('.skip-typed-button').hide();$('.lobby-button-container').addClass('active');}});
					},3000);
				},timeout);
},100);
});
}

function initLobby(){
	var lobbyStartX = (($('.draggable-normal').width() - w)/2)*-1;
	dccLobby = new IScroll('#dcc-lobby', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/ }, startX:lobbyStartX});
	$('.btn-meet-us').on('mouseup touchend', function(e){
		e.preventDefault();
		if(!$('.dcc-nav').hasClass('disabled') && state==1){
			gotoPage(2);
		}		
	});
	var interval;
	var iv = 50;
	$('.drag-nav-lobby .draggie.drag-next').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-lobby .draggable').width();
		interval = setInterval(function(e){
			if((elW - w) > dccLobby.x*-1){
				dccLobby.scrollBy(-1*iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-lobby .draggie.drag-next').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-lobby .draggie.drag-next').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-lobby .draggie.drag-prev').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-lobby .draggable').width();
		interval = setInterval(function(e){
			if(dccLobby.x < 0){
				dccLobby.scrollBy(iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-lobby .draggie.drag-prev').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-lobby .draggie.drag-prev').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
}
function initDev(){
	injectSrc($('#dcc-developer .drag-background img'));
	var valProgress = 0;
	$('#dcc-developer').imagesLoaded().progress(function(e){
		valProgress++;
		var curProgress = (valProgress / e.images.length) * 100;
		$('.top-nav li.f2 a span.enabled').css('width',curProgress+'%');
		$('#preload-developer span').html(curProgress+'%');
	}).done(function(e){
		dccDeveloper = new IScroll('#dcc-developer', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: true, preventDefaultException: { tagName:/^(A)$/}, preventDefault:false});
		$('.top-nav li.f2 a span.enabled').css('width','100%');
		$('#preload-developer').fadeOut(250);			
	});
	var interval;
	var iv = 50;
	$('.drag-nav-developer .draggie.drag-next').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-developer .draggable').width();
		interval = setInterval(function(e){
			if((elW - w) > dccDeveloper.x*-1){
				dccDeveloper.scrollBy(-1*iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-developer .draggie.drag-next').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-developer .draggie.drag-next').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-developer .draggie.drag-prev').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-developer .draggable').width();
		interval = setInterval(function(e){
			if(dccDeveloper.x < 0){
				dccDeveloper.scrollBy(iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-developer .draggie.drag-prev').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-developer .draggie.drag-prev').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
}
function initCreative(){
	injectSrc($('#dcc-creative .drag-background img'));
	var valProgress = 0;
	$('#dcc-creative').imagesLoaded().progress(function(e){
		valProgress++;
		var curProgress = (valProgress / e.images.length) * 100;
		$('.top-nav li.f3 a span.enabled').css('width',curProgress+'%');
		$('#preload-creative span').html(curProgress+'%');
	}).done(function(e){
		dccCreative = new IScroll('#dcc-creative', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: true, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }});
		$('.top-nav li.f3 a span.enabled').css('width','100%');
		$('#preload-creative').fadeOut(250);
	});
	var interval;
	var iv = 50;
	$('.drag-nav-creative .draggie.drag-next').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-creative .draggable').width();
		interval = setInterval(function(e){
			if((elW - w) > dccCreative.x*-1){
				dccCreative.scrollBy(-1*iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-creative .draggie.drag-next').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-creative .draggie.drag-next').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-creative .draggie.drag-prev').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-creative .draggable').width();
		interval = setInterval(function(e){
			if(dccCreative.x < 0){
				dccCreative.scrollBy(iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-creative .draggie.drag-prev').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-creative .draggie.drag-prev').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
}
function initIllustrator(){
	injectSrc($('#dcc-illustrator .drag-background img'));
	var valProgress = 0;
	$('#dcc-illustrator').imagesLoaded().progress(function(e){
		valProgress++;
		var curProgress = (valProgress / e.images.length) * 100;
		$('.top-nav li.f4 a span.enabled').css('width',curProgress+'%');
		$('#preload-illustrator span').html(curProgress+'%');
	}).done(function(e){
		dccIllustrator = new IScroll('#dcc-illustrator', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: true, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }});
		$('.top-nav li.f4 a span.enabled').css('width','100%');
		$('#preload-illustrator').fadeOut(250);
	});
	var interval;
	var iv = 50;
	$('.drag-nav-illustrator .draggie.drag-next').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-illustrator .draggable').width();
		interval = setInterval(function(e){
			if((elW - w) > dccIllustrator.x*-1){
				dccIllustrator.scrollBy(-1*iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-illustrator .draggie.drag-next').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-illustrator .draggie.drag-next').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-illustrator .draggie.drag-prev').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-illustrator .draggable').width();
		interval = setInterval(function(e){
			if(dccIllustrator.x < 0){
				dccIllustrator.scrollBy(iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-illustrator .draggie.drag-prev').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-illustrator .draggie.drag-prev').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
}
function initRooftop(){
	injectSrc($('#dcc-rooftop .drag-background img'));
	var valProgress = 0;
	$('#dcc-rooftop').imagesLoaded().progress(function(e){
		valProgress++;
		var curProgress = (valProgress / e.images.length) * 100;
		$('.top-nav li.f5 a span.enabled').css('width',curProgress+'%');
		$('#preload-rooftop span').html(curProgress+'%');
	}).done(function(e){
		var rooftopStartX = (($('.draggable-normal').width() - w)/2)*-1;
		dccRooftop = new IScroll('#dcc-rooftop', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }, startX:rooftopStartX});
		$('.top-nav li.f5 a span.enabled').css('width','100%');
		$('#preload-rooftop').fadeOut(250);
	});
	$('.btn-launch').on('click touchend', function(e){
		e.preventDefault();
		if(!$('.dcc-nav').hasClass('disabled') && state<6){
			nextPage();
		}
	});
	var interval;
	var iv = 50;
	$('.drag-nav-rooftop .draggie.drag-next').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-rooftop .draggable').width();
		interval = setInterval(function(e){
			if((elW - w) > dccRooftop.x*-1){
				dccRooftop.scrollBy(-1*iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-rooftop .draggie.drag-next').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-rooftop .draggie.drag-next').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-rooftop .draggie.drag-prev').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-rooftop .draggable').width();
		interval = setInterval(function(e){
			if(dccRooftop.x < 0){
				dccRooftop.scrollBy(iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-rooftop .draggie.drag-prev').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-rooftop .draggie.drag-prev').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
}
function initOutspace(){
	injectSrc($('#dcc-outspace .drag-background img'));
	var valProgress = 0;
	$('#dcc-outspace').imagesLoaded().progress(function(e){
		valProgress++;
		var curProgress = (valProgress / e.images.length) * 100;
		$('.top-nav li.f6 a span.enabled').css('width',curProgress+'%');
		$('#preload-outspace span').html(curProgress+'%');
	}).done(function(e){
		var outspaceStartX = (($('.draggable-normal').width() - w)/2)*-1;
		dccOutspace = new IScroll('#dcc-outspace', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }, startX:outspaceStartX, prefentDefault:false});
		$('.top-nav li.f6 a span.enabled').css('width','100%');
		$('#preload-outspace').fadeOut(250);
		initParallax();
		initReveal();
	});
	var interval;
	var iv = 50;
	$('.drag-nav-outspace .draggie.drag-next').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-outspace .draggable').width();
		interval = setInterval(function(e){
			if((elW - w) > dccOutspace.x*-1){
				dccOutspace.scrollBy(-1*iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-outspace .draggie.drag-next').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-outspace .draggie.drag-next').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-outspace .draggie.drag-prev').on('mousedown touchstart', function(e){
		e.preventDefault();
		var elW = $('#dcc-outspace .draggable').width();
		interval = setInterval(function(e){
			if(dccOutspace.x < 0){
				dccOutspace.scrollBy(iv,0);
			}
			iv++;
		},10);
	});
	$('.drag-nav-outspace .draggie.drag-prev').on('mouseup touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	$('.drag-nav-outspace .draggie.drag-prev').on('mouseout touchend', function(e){
		e.preventDefault();
		clearInterval(interval);
		iv=1;
	});
	var curSlide = 'dev';
	var nextSlide = 'creative';
	var prevSlide = '';
	$('.drag-nav-outspace-mobile .draggie.drag-next').on('mousedown touchstart', function(e){
		e.preventDefault();
		if(nextSlide != ''){
			$('.dcc-space .planet.planet-'+nextSlide).css('transform','translateX(0)');
			$('.dcc-space .planet.planet-'+curSlide).css('transform','translateX(-300%)');
			prevSlide = curSlide;
			curSlide = nextSlide;
			if(curSlide == 'creative'){
				nextSlide = 'illustrator';
			} else {
				nextSlide = '';
			}
		}
		console.log(prevSlide);
	});
	$('.drag-nav-outspace-mobile .draggie.drag-prev').on('mousedown touchstart', function(e){
		e.preventDefault();
		if(prevSlide != ''){
			$('.dcc-space .planet.planet-'+prevSlide).css('transform','translateX(0)');
			$('.dcc-space .planet.planet-'+curSlide).css('transform','translateX(300%)');
			nextSlide = curSlide;
			curSlide = prevSlide;
			if(curSlide == 'creative'){
				prevSlide = 'dev';
			} else {
				prevSlide = '';
			}
		}
	});
	$('.popup-content').perfectScrollbar();
}

function initParallax(){
	$('#planet-scene').parallax({scalarX:3});
}

function checkImagesLoaded(){
	initDev();
	setTimeout(function(e){initCreative();},200);
	setTimeout(function(e){initIllustrator();},300);
	setTimeout(function(e){initRooftop();},400);
	setTimeout(function(e){initOutspace();},500);
	initPopup();
	$('.dragon > a').each(function(i,e){
		$(e).css({'animation':'planetarium 4000ms '+Math.floor((Math.random() * 500) + 200)+'ms'+' infinite cubic-bezier(0.455, 0.03, 0.515, 0.955)'});
	});
}
function initImagesLoaded(){
	var valProgress = 0;
	$('#dcc-intro, #header, #dcc-lobby').imagesLoaded().progress(function(e){
		var imgLen = e.images.length;
		valProgress++;
		setProgress(valProgress,imgLen);
	}).done(function(e){
		$('.dcc-preloader').fadeOut(300);
		checkImagesLoaded();
		$('.predcc-zeppelin').addClass("dcc-zeppelin");
	});
}
function setProgress(valProgress,imgLen){
	var val = (valProgress / imgLen) * 100;
	var height = (valProgress / imgLen) * 70;
	$('.dp-progressfront').css('height',height+'px');
	$('.dp-progressval').html(val.toFixed(0)+'%');
} 

function loadHQ(){
	$('.draggable').find('[data-hq]').each(function(i,e){
		var newEl = '<img src="'+$(e).data('hq')+'" class="bg-hq" alt="'+$(e).attr('alt')+'">';
		$(newEl).appendTo($(e).parent('.drag-background'));
		$(newEl).on('load', function(e){
			resizeRes();

		})
	});
}

function initPopup(){
	$('.dragon a').on('mouseup touchend', function(e){
		e.preventDefault();		
		disableNav();
		if(!$(this).parent().hasClass('active')){
			$(this).parent().addClass('active');
			$('body').append('<div class="team-reveal-bg"></div><div class="team-reveal-modal">'+$(this).parent().find('.popup-content').html()+'<a class="close-reveal">Click to close <span></span></a></div>');
			$('.team-reveal-modal .details').perfectScrollbar();
		}else {
			$('.dragon').removeClass('active');
			enableNav();			
		}
		$('body').find('.team-reveal-modal a.close-reveal, .team-reveal-bg').on('mousedown touchstart', function(e){
			e.preventDefault();
			$('body').find('.team-reveal-bg').remove();
			$('body').find('.team-reveal-modal').remove();
			$('.dragon').removeClass('active');
			enableNav();
		});
	})

	$('.dragon-bg').on('click', function(e){
		e.preventDefault();		
		$('.dragon').removeClass('active');
		enableNav();
	})


}
function initReveal(){
	$('.dragon-hiring > a').on('mouseup touchend', function(e){
		e.preventDefault();
		var $this_id = $(this).data('dragon-id');
		$('body').append('<div class="reveal-bg"></div><div wanted-id="'+$this_id+'" class="reveal-modal" style="margin-top:-'+$(this).parent().find('.reveal').height()/2+'px">'+$(this).parent().find('.reveal').html()+'<a class="close-reveal">Click to close <span></span></a></div>');
		$('.reveal-modal .hiring-content').perfectScrollbar();
		disableNav();

		$('body').find('.reveal-modal a.close-reveal, .reveal-bg').on('mouseup touchend', function(e){
			e.preventDefault();
			$('body').find('.reveal-bg').remove();
			$('body').find('.reveal-modal').remove();
			enableNav();
		})
	});
}

function injectSrc(el){
	if(h <= 400 && w < 1024){
			el.attr('src', el.data('mobile')); //400
		}else if(h <= 600 && h > 400 && w < 1024){
		el.attr('src', el.data('tablet')); //600
	}else if(h <= 800 && h > 600){
			el.attr('src', el.data('medium')); //800
		}else {
			el.attr('src', el.data('src')); //1024
		}
	}

	function initCentered(){
		$('.centered-content').each(function(i,e){
			//$(e).css({'margin-top':($(this).height()/2)*-1+'px'});
		});
	}
	function initEsc(){
		$(document).keydown(function(e) {
			if (e.keyCode == 27) {
				if($('body').hasClass('disable-nav')){
					e.preventDefault();
					$('.dragon').removeClass('active');
					$('body').find('.reveal-bg, .team-reveal-bg').remove();
					$('body').find('.reveal-modal, .team-reveal-modal').remove();
					enableNav();
				}
			}
		});
	}
	init();
});