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
			}
			$('.dcc-container').css({'-webkit-transform':'translateY('+calcY(state)+'px)', 'transform':'translateY('+calcY(state)+'px)'});
		}
		if(state==6){
			setTimeout(function(e){
				$('.dcc-container').removeClass('launched');
				$('.rocket-holder').removeClass('active');
				$('.dcc-nav').removeClass('disabled');
			},8000);
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
			$('.dcc-container').css({'-webkit-transform':'translateY('+calcY(state)+'px)','transform':'translateY('+calcY(state)+'px)'});
		}
		setTimeout(function(e){
			$('.dcc-nav').removeClass('disabled');
		},2000);
		$('body, .dcc-nav, .top-nav').removeClass(stateArray[state-1]).addClass(stateArray[state]);
		checkState();
	}
	function gotoPage(page){
		if(state!=page){			
			state=page;
			if(page<7){
				$('body').attr('data-state',state);
				$('.dcc-nav').addClass('disabled');
				$('.dcc-container').css({'-webkit-transform':'translateY('+calcY(state)+'px)', 'transform':'translateY('+calcY(state)+'px)'});
			}			
			setTimeout(function(e){
				$('.dcc-nav').removeClass('disabled');
			},2000);			
			$('body, .dcc-nav, .top-nav').removeClass(stateArray[state-1]).addClass(stateArray[state]);
			checkState();
		}
	}
	function resizeRes(){
		var nW = Math.round((2400*h)/1024);
		var nWx = Math.round((4000*h)/1024);
		var nWs = Math.round((2400*h*2)/2048);
		$('.draggable-normal, .draggable-normal .drag-background, .drag-background img').width(nW).height(h);
		$('.draggable-wide, .draggable-wide .drag-background, .drag-background img').width(nWx).height(h);
		$('.sky-separator').css({'height':(h*2)+'px','background-size':nWs+'px '+(h*2)+'px'});
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

		$('.logo a').on('click', function(e){
			e.preventDefault();
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled')){
				gotoPage(1);
			}
		})

		$('.menu-button, .close-menu-mask').on('click', function(e){
			e.preventDefault();
			if(!$('#header').hasClass('disabled')){
				if(!$('.mainmenu').hasClass('active')){
					$('.mainmenu').addClass('active');
				}else{
					$('.mainmenu').removeClass('active');
				}
			}
		});

		$('.dcc-nav .up').on('click', function(e){
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled') && state<6){
				nextPage();
			}
		})
		$('.dcc-nav .down').on('click', function(e){
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled') && state>1){
				prevPage();
			}		
		})

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
		});
	}
	function start(){
		$('.start-now').on('click', function(e){
			e.preventDefault();
			state=1;
			var initScroll = ((h*(6-state))+(50*(5-state))+(2*h))*-1;
			$('.dcc-container').css({'-webkit-transform':'translateY('+initScroll+'px)','transform':'translateY('+initScroll+'px)'});
			initImagesLoaded();
			initLobby();
			var $scrolled = ($('#dcc-home').height()-$(window).height());
			$('#header').show();
			setTimeout(function(e){
				$('#dcc-home').css({'transformOrigin':'50% 100% 0', 'transform':'translateY(-'+$scrolled+'px)','transition-duration':'4s'});
				setTimeout(function(e){
					$('#dcc-home').css({'-webkit-transform':'translateY(-'+$scrolled+'px) scale(2)', 'transform':'translateY(-'+$scrolled+'px) scale(2)', 'opacity':0, '-webkit-transition':'transform 1.5s cubic-bezier(0.465, 0.183, 0.153, 0.946), opacity 2s cubic-bezier(0.465, 0.183, 0.153, 0.946) 1.5s', 'transition':'transform 1.5s cubic-bezier(0.465, 0.183, 0.153, 0.946), opacity 2s cubic-bezier(0.465, 0.183, 0.153, 0.946) 1.5s'});
					setTimeout(function(e){
						$('body').attr('data-state', state);
						$('.dcc-nav, body, .top-nav').removeClass(stateArray[state-1]).addClass(stateArray[state]);
						$('#dcc-intro').remove();
					},3000);
				},4000);
			},600);
		});
	}

	function initLobby(){
		var lobbyStartX = (($('.draggable-normal').width() - w)/2)*-1;
		dccLobby = new IScroll('#dcc-lobby', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/ }, startX:lobbyStartX});
		$('.btn-begin').on('click', function(e){
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled') && state==1){
				gotoPage(2);
			}		
		})
	}
	function initDev(){
		$('#dcc-developer .drag-background img').each(function(e,i){
			$(this).attr('src', $(this).data('src'));
		});
		var valProgress = 0;
		$('#dcc-developer').imagesLoaded().progress(function(e){
			valProgress++;
			var curProgress = (valProgress / e.images.length) * 100;
			$('.top-nav li.f2 a span.enabled').css('width',curProgress+'%');
		}).done(function(e){
			dccDeveloper = new IScroll('#dcc-developer', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { className: /(^|\s)popup-content(\s|$)/ }, preventDefault:false});
			$('.top-nav li.f2 a span.enabled').css('width','100%');
			initPopup();
		});
	}
	function initCreative(){
		$('#dcc-creative .drag-background img').each(function(e,i){
			$(this).attr('src', $(this).data('src'));
		});
		var valProgress = 0;
		$('#dcc-creative').imagesLoaded().progress(function(e){
			valProgress++;
			var curProgress = (valProgress / e.images.length) * 100;
			$('.top-nav li.f3 a span.enabled').css('width',curProgress+'%');
		}).done(function(e){
			dccCreative = new IScroll('#dcc-creative', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }});
			$('.top-nav li.f3 a span.enabled').css('width','100%');
			initPopup();
		});
	}
	function initIllustrator(){
		$('#dcc-illustrator .drag-background img').each(function(e,i){
			$(this).attr('src', $(this).data('src'));
		});
		var valProgress = 0;
		$('#dcc-illustrator').imagesLoaded().progress(function(e){
			valProgress++;
			var curProgress = (valProgress / e.images.length) * 100;
			$('.top-nav li.f4 a span.enabled').css('width',curProgress+'%');
		}).done(function(e){
			dccIllustrator = new IScroll('#dcc-illustrator', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }});
			$('.top-nav li.f4 a span.enabled').css('width','100%');
			initPopup();
		});
	}
	function initRooftop(){
		$('#dcc-rooftop .drag-background img').each(function(e,i){
			$(this).attr('src', $(this).data('src'));
		});
		var valProgress = 0;
		$('#dcc-rooftop').imagesLoaded().progress(function(e){
			valProgress++;
			var curProgress = (valProgress / e.images.length) * 100;
			$('.top-nav li.f5 a span.enabled').css('width',curProgress+'%');
		}).done(function(e){
			var rooftopStartX = (($('.draggable-normal').width() - w)/2)*-1;
			dccRooftop = new IScroll('#dcc-rooftop', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }, startX:rooftopStartX});
			$('.top-nav li.f5 a span.enabled').css('width','100%');
		});
		$('.btn-launch').on('click', function(e){
			e.preventDefault();
			if(!$('.dcc-nav').hasClass('disabled') && state<6){
				nextPage();
			}
		})
	}
	function initOutspace(){
		$('#dcc-outspace .drag-background img').each(function(e,i){
			$(this).attr('src', $(this).data('src'));
		});
		var valProgress = 0;
		$('#dcc-outspace').imagesLoaded().progress(function(e){
			valProgress++;
			var curProgress = (valProgress / e.images.length) * 100;
			$('.top-nav li.f6 a span.enabled').css('width',curProgress+'%');
		}).done(function(e){
			var outspaceStartX = (($('.draggable-normal').width() - w)/2)*-1;
			dccOutspace = new IScroll('#dcc-outspace', { scrollX: true, scrollY: false, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A|P)$/ }, startX:outspaceStartX});
			$('.top-nav li.f6 a span.enabled').css('width','100%');
			initParallax();
			initReveal();
		});
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
	}
	function initImagesLoaded(){
		$('#dcc-intro, #header').imagesLoaded().done(function(e){
			checkImagesLoaded();
		});
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
		$('.dragon a').on('click', function(e){
			e.preventDefault();		
			disableNav();
			if(!$(this).parent().hasClass('active')){
				$(this).parent().addClass('active');
			}else {
				$('.dragon').removeClass('active');
				enableNav();			
			}			
		})

		$('.dragon-bg').on('click', function(e){
			e.preventDefault();		
			$('.dragon').removeClass('active');
			enableNav();
		})
	}
	function initReveal(){
		$('.dragon-hiring > a').on('click', function(e){
			e.preventDefault();
			var $this_id = $(this).data('dragon-id');
			$('#dcc-outspace').append('<div class="reveal-bg"></div><div wanted-id="'+$this_id+'" class="reveal-modal" style="margin-top:-'+$(this).parent().find('.reveal').height()/2+'px">'+$(this).parent().find('.reveal').html()+'</div>');
			disableNav();
			
			$('#dcc-outspace').find('.reveal-modal a.close-reveal, .reveal-bg').on('click', function(e){
				e.preventDefault();
				$('#dcc-outspace').find('.reveal-bg').remove();
				$('#dcc-outspace').find('.reveal-modal').remove();
				enableNav();
			})
		});
	}

	function initCentered(){
		$('.centered-content').each(function(i,e){
			$(e).css({'margin-top':($(this).height()/2)*-1+'px'});
		});
	}
	function initEsc(){
		$(document).keydown(function(e) {
			if (e.keyCode == 27) {
				if($('body').hasClass('disable-nav')){
					e.preventDefault();
					$('.dragon').removeClass('active');
					$('#dcc-outspace').find('.reveal-bg').remove();
					$('#dcc-outspace').find('.reveal-modal').remove();
					enableNav();
				}
			}
		});
	}
	init();
});