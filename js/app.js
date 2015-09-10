/* App Js */
;jCiayo = jQuery.noConflict();
jCiayo(document).ready(function($){

	var $wWidth = $(window).width();
	var $wHeight = $(window).height();
	var $siteurl = $('body').data('url');

	var pageState = $('body').data('state');
	var state = ['home','lobby','developer','illustrator','creative','rooftop','career'];

	var dccHome, dccLobby, dccF1, dccF2, dccF3, dccCareer;
	
	$('.menu-button').on('click', function(e){
		e.preventDefault();
		if(!$('.menu-toggle').hasClass('disabled')){
			$('#menu').toggleClass('active');
		}		
	})

	$('.logo a').on('click',function(e){
		e.preventDefault();
		if(!$('.logo').hasClass('disabled')){
			if(!$('.dcc-nav').hasClass('disabled') && pageState>1){
				$('.dcc-nav').addClass('disabled');
				goPage(1);
			}
		}
	})

	//$('#header').hide();

	$('.dcc-start').on('click',function(e){
		pageState=1;
		var initScroll = (($wHeight*(6-pageState))+(50*(6-pageState)))*-1;
		$('.dcc-container').css({'transform':'translateY('+initScroll+'px)'});
		e.preventDefault();
		var $scrolled = ($('.bg-home img').height()-$(window).height());
		$(this).fadeOut();
		$('#header').show();
		setTimeout(function(e){
			$('.bg-home img').css({'transformOrigin':'50% 100% 0', 'transform':'translateY(-'+$scrolled+'px)','transition-duration':'4s'});
			setTimeout(function(e){
				$('.bg-home img').css({'transform':'translateY(-'+$scrolled+'px) scale(2)', 'opacity':0, 'transition':'transform 1.5s cubic-bezier(0.465, 0.183, 0.153, 0.946), opacity 2s cubic-bezier(0.465, 0.183, 0.153, 0.946) 1.5s'});
				setTimeout(function(e){
					$('body').attr('data-state', pageState);
					$('.dcc-nav, body, .top-nav').removeClass(state[pageState-1]).addClass(state[pageState]);
					$('.dcc-home').remove();
				},3000);
			},4000);
		},600);
	});

	$('.top-nav a').on('click', function(e){
		e.preventDefault();
		var ps = $(this).data('page');
		if(!$('.dcc-nav').hasClass('disabled')){
			$('.dcc-nav').addClass('disabled');
			goPage(ps);
		}		
	})

	$('.dcc-nav .up').on('click', function(e){
		e.preventDefault();
		if(!$('.dcc-nav').hasClass('disabled') && pageState<6){
			$('.dcc-nav').addClass('disabled');
			nextPage();
		}
	})
	$('.dcc-nav .down').on('click', function(e){
		e.preventDefault();
		if(!$('.dcc-nav').hasClass('disabled') && pageState>1){
			$('.dcc-nav').addClass('disabled');
			prevPage();
		}		
	})

	$('.party-start').on('click', function(e){
		e.preventDefault();
		if(!$('.dcc-nav').hasClass('disabled')){
			$('.dcc-nav').addClass('disabled');
			nextPage();
		}	
	})

	$('.see-future').on('click', function(e){
		e.preventDefault();
		if(!$('.dcc-nav').hasClass('disabled')){
			$('.dcc-nav').addClass('disabled');
			nextPage();
		}	
	});

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

	$('.dragon-hiring > a').on('click', function(e){
		e.preventDefault();
		var $this_id = $(this).data('dragon-id');
		$('.dcc-career').append('<div class="wanted-bg"></div><div wanted-id="'+$this_id+'" class="wanted-modal" style="margin-top:-'+$(this).parent().find('.dragon-wanted').height()/2+'px">'+$(this).parent().find('.dragon-wanted').html()+'</div>');
		$('.logo, .menu-toggle').addClass('disabled');
		$('body').toggleClass('opened');
		$('.dcc-career').find('.wanted-modal a.close-wanted, .wanted-bg').on('click', function(e){
			e.preventDefault();
			$('.dcc-career').find('.wanted-bg').addClass('disabled');
			$('.dcc-career').find('.wanted-modal').addClass('disabled');
			$('body').removeClass('opened');
			$('.logo, .menu-toggle').removeClass('disabled');
			$('.dcc-nav').removeClass('disabled');
			setTimeout(function(e){
				$('.dcc-career').find('.wanted-bg').remove();
				$('.dcc-career').find('.wanted-modal').remove();
			},2000);
		})
	});

	var lobbyStartX = (($('.draggable-lobby').width() - $wWidth)/2)*-1;
	var lobbyStartY = (($('.draggable-lobby').height() - $wHeight)/2)*-1;
	dccLobby = new IScroll('#dcc-lobby', { scrollX: true, scrollY: true, mouseWheel: true, mouseWheelSpeed:10, deceleration:0.01, scrollbars: false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/ }, startX:lobbyStartX, startY:lobbyStartY });

	console.log($('.draggable-lobby .bg-section img').attr('src'));

	var careerStartX = (($('.draggable-career').width() - $wWidth)/2)*-1;
	var careerStartY = (($('.draggable-career').height() - $wHeight)*-1)/2;
	dccCareer = new IScroll('#dcc-career', { scrollX: true, scrollY: false, mouseWheel: true, scrollbars: false, mouseWheelSpeed:10, deceleration:0.01, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/ }, startX:careerStartX});
	
	resizeTeam($('.team-container'), $('.draggable-team'),$wHeight);

	dccF1 = new IScroll('#creative-team', { scrollX: true, scrollY: false, mouseWheel: true, scrollbars: false, mouseWheelSpeed:10, deceleration:0.01, preventDefault:false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/, className: /(^|\s)(popup-content|dragon-bg|dragon)(\s|$)/ }});
	dccF2 = new IScroll('#illustrator-team', { scrollX: true, scrollY: false, mouseWheel: true, scrollbars: false, mouseWheelSpeed:10, deceleration:0.01, preventDefault:false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/, className: /(^|\s)(popup-content|dragon-bg|dragon)(\s|$)/ }});
	dccF3 = new IScroll('#developer-team', { scrollX: true, scrollY: false, mouseWheel: true, scrollbars: false, mouseWheelSpeed:10, deceleration:0.01, preventDefault:false, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/, className: /(^|\s)(popup-content|dragon-bg|dragon)(\s|$)/ }});

	var teamStartY = (($wHeight*2)+100)*-1;
	$('.team-container').css({'transform':'translateY('+teamStartY+'px)'});

	var roofStartX = (($('.draggable-rooftop').width() - $wWidth)/2)*-1;
	var roofStartY = ($('.draggable-rooftop').height() - $wHeight)*-1;
	dccLobby = new IScroll('#dcc-rooftop', { scrollX: true, scrollY: false, mouseWheel: true, scrollbars: false, mouseWheelSpeed:10, deceleration:0.01, mouseWheelSpeed:20, preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/ }, startX:roofStartX, startY:roofStartY });

	$('#scene').parallax({scalarX:3});

	function resizeTeam(container,obj,h){
		var nW = Math.round((4000*h)/1024);
		var nHc = (h*3)+(100);
		obj.width(nW).height(h);
		obj.find('.bg-section').width(nW).height(h);
	}

	function disableNav(){
		$('body').addClass('opened');
		$('.dcc-nav, .logo, .menu-toggle').addClass('disabled');
		$('#menu').removeClass('active');
	}
	function enableNav(){
		$('body').removeClass('opened');
		$('.dcc-nav, .logo, .menu-toggle').removeClass('disabled');
	}
	function nextPage(nav){
		if(pageState<=6){
			pageState++;
			$('body').attr('data-state',pageState);
			var scrollY = (($wHeight*(6-pageState))+(50*(6-pageState)))*-1;
			$('.dcc-container').css({'transform':'translateY('+scrollY+'px)'});
		}
		setTimeout(function(e){
			$('.dcc-nav').removeClass('disabled');
		},3000);
		$('body, .dcc-nav, .top-nav').removeClass(state[pageState-1]).addClass(state[pageState]);
		checkState();
	}
	function prevPage(nav){
		if(pageState>1 && pageState<7){
			pageState--;
			$('body').attr('data-state',pageState);
			var scrollY = (($wHeight*(6-pageState))+(50*(6-pageState)))*-1;
			$('.dcc-container').css({'transform':'translateY('+scrollY+'px)'});	
		}
		$('body, .dcc-nav, .top-nav').removeClass(state[pageState+1]).addClass(state[pageState]);
		setTimeout(function(e){
			$('.dcc-nav').removeClass('disabled');
		},3000);
		checkState();
	}
	function goPage(s){
		if(pageState!=s){
			$('body, .dcc-nav, .top-nav').removeClass(state[pageState]).addClass(state[s]);
			pageState=s;
			if(s<7){
				var scrollY = (($wHeight*(6-pageState))+(50*(6-pageState)))*-1;
				$('.dcc-container').css({'transform':'translateY('+scrollY+'px)'});
				$('.dcc-career').removeClass('active');
			}
			$('body').attr('data-state',pageState);
			setTimeout(function(e){
				$('.dcc-nav').removeClass('disabled');
			},3000);			
			checkState();
		}

	}
	function checkState(){
		$('.dcc-nav .nav').removeClass('disabled');
		if(pageState<2){
			$('.dcc-nav .down').addClass('disabled');
		}else if(pageState>=6){
			$('.dcc-nav .up').addClass('disabled');
		}
		console.log("pagestate"+pageState);
	}
	checkState();
});