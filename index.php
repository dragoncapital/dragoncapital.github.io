<?php $phppage = ["about", "fangs", "brains", "eyes", "rooftop", "career", "van", "cookie", "daniel", "hendra", "imam", "opan", "akung", "janness", "ali", "donny", "agung", "yoel", "erick", "rajiv", "diaz", "asad", "arip", "corry", "cynthia", "awe", "coco", "borton", "yori", "stephanie", "vic", "mega", "rudy", "vinza", "fadly", "adith", "aji", "beny", "hana", "mizan", "kun", "frans", "chips", "mogri", "dike", "acai", "jesslyn", "iqbal", "fano", "algorithm-engineer", "ios-developer", "android-developer", "devops", "ux-engineer", "data-scientist", "backend-developer", "frontend-developer", "search-engineer", "2d-animator", "copywriter", "administrator", "art-director", "ui-ux-designer", "vector-illustrator", "2d-illustrator", "3d-illustrator"];?>
<?php $phpstate = (isset($_GET['p'])) ? $_GET['p'] : false; ?>
<?php $is404 = false; ?>
<?php if($phpstate!="") : ?>
<?php if(!in_array($phpstate, $phppage)) $is404 = true;?>
<?php endif;?>
<?php if($is404) header('Location: 404.html');?>
	<!DOCTYPE html>
	<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#06899D"/>
		<title>Dragon Capital Center</title>
		<meta name="title" content="Dragon Capital Center | Startup + Fun" />
		<meta name="description" content="It's a place where creative genius people work, laugh, play and grow together to invent something. Something useful for people and life. Something that couldn't be anywhere else.">
		<meta name="keywords" content="dragon,capital,center,startup,dcc,fun,playful,chips,cookie,coco,nano,data,mining"/>

		<meta name="author" content="Dragon Capital Center">
		<link rel="author" href="https://plus.google.com/u/0/110270446180309877178">

		<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="/img/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon-57.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/favicon-57.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon-72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon-114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon-120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon-144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon-152.png">
		<meta name="application-name" content="Dragon Capital Center">
		<meta name="msapplication-TileImage" content="/img/favicon-144.png">
		<meta name="msapplication-TileColor" content="#06899D">


		<link rel="canonical" href="http://dragoncapital.center" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Dragon Capital Center | Startup + Fun" />
		<meta property="og:description" content="It's a place where creative genius people work, laugh, play and grow together to invent something. Something useful for people and life. Something that couldn't be anywhere else." />
		<meta property="og:image" content="http://dragoncapital.center/img/dragoncapital.jpg" />
		<meta property="og:url" content="http://dragoncapital.center" />
		<meta property="og:site_name" content="Dragon Capital Center" />
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:description" content="It's a place where creative genius people work, laugh, play and grow together to invent something. Something useful for people and life. Something that couldn't be anywhere else."/>
		<meta name="twitter:title" content="Dragon Capital Center | Startup + Fun"/>
		<meta name="twitter:site" content="@dragoncapitalid"/>
		<meta name="twitter:domain" content="dragoncapitalid"/>

		<script type="text/javascript" src="js/modernizr.js"></script>

		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/fontface.css">
		<link rel="stylesheet" type="text/css" href="css/cframe.min.css">
		<style>.dcc-preloader{top:0;right:0;bottom:0;left:0;z-index:25;background-color:#ebebeb;position:absolute}.dcc-preloader .dp-animate{width:250px}.dcc-preloader .dp-animate,.dcc-preloader .dp-container{top:50%;left:50%;position:absolute;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);z-index:1}.dcc-preloader .dp-container{position:absolute;width:60px}.dcc-preloader .dp-container .dp-progress{height:70px}.dcc-preloader .dp-container .dp-progress .dp-logo{top:0;position:absolute;width:60px;height:70px;z-index:3}.dcc-preloader .dp-container .dp-progress .dp-progressback{top:0;position:absolute;background-color:#b4b4b4;width:60px;height:70px;z-index:2}.dcc-preloader .dp-container .dp-progress .dp-progressfront{bottom:24px;position:absolute;background-color:#6bbcff;width:60px;z-index:2}.dcc-preloader .dp-container .dp-progressval{color:#6bbcff;font-size:16px;font-weight:700}.sub-preloader{top:0;right:0;bottom:0;left:0;z-index:23;background:url(img/sub-preloader.gif) center no-repeat #ebebeb;position:absolute}.sub-preloader span{top:50%;left:50%;position:absolute;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);color:#6bbcff}
		</style>
		<link rel="stylesheet" type="text/css" href="css/app.css">
	</head>
	<body class="home <?php echo $phpstate;?>" data-state="0" data-page="<?php echo ($phpstate) ? array_search($phpstate, $phppage) : '-1';?>">
		
		<div class="dcc-preloader">
			<div class="dp-animate"><img src="img/preload.gif"></div>
			<div class="dp-container">
				<div class="dp-progress">
					<div class="dp-progressback"></div>
					<div class="dp-progressfront"></div>
					<div class="dp-logo"><img src="img/logo-preload.png"></div>
				</div>
				<div class="dp-progressval text-center">0%</div>
			</div>
		</div>

		<header id="header">		
			<div class="logo"><a href="http://www.dragoncapital.center/" title="Dragon Capital Center"><img src="img/logo.png" alt="Dragon Capital Center" width="66" height="98"></a></div>
			<div class="mainmenu">
				<div class="menu-toggle"><a href="#menu" class="menu-button"><span class="lines"></span></a></div>
				<div class="menu-items">
					<div class="top-nav home">
						<ul class="clearfix">
							<li class="f5"><a href="/rooftop" data-page="5" data-max="10" data-value="1"><span class="disabled"></span><span class="enabled"></span><span class="text">Rooftop</span></a></li>
							<li class="f6"><a href="/career" data-page="6" data-max="10" data-value="1"><span class="disabled"></span><span class="enabled"></span><span class="text">Career</span></a></li>						
							<li class="full f4"><a href="/eyes" data-page="4" data-max="10" data-value="2"><span class="disabled"></span><span class="enabled"></span><span class="text">Dragon's Eyes</span></a></li>
							<li class="full f3"><a href="/brains" data-page="3" data-max="10" data-value="5"><span class="disabled"></span><span class="enabled"></span><span class="text">Dragon's Brain</span></a></li>
							<li class="full f2"><a href="/fangs" data-page="2" data-max="10" data-value="9"><span class="disabled"></span><span class="enabled"></span><span class="text">Dragon's Fang</span></a></li>
							<li class="f1"><a href="/about" data-page="1" data-max="10" data-value="9"><span class="disabled"></span><span class="enabled"></span><span class="text">Lobby</span></a></li>
						</ul>
					</div>
					<div class="dcc-socials">
						<h4>Connect with us</h4>
						<ul>
							<li><a href="https://www.facebook.com/dragoncapitalid" target="_blank" title="Follow us on Facebook"><span class="fa fa-facebook"></span></a></li>
							<li><a href="https://twitter.com/@dragoncapitalID" target="_blank" title="Follow us on Twitter"><span class="fa fa-twitter"></span></a></li>
							<li><a href="https://www.youtube.com/channel/UCVlm9kvczsCvGaKcBBqT76g" target="_blank" title="Follow us on Youtube"><span class="fa fa-youtube-play"></span></a></li>
							<li><a href="https://www.linkedin.com/in/dragoncapital" target="_blank" title="Follow us on Linked In"><span class="fa fa-linkedin"></span></a></li>
						</ul>
						<div class="copyright">&copy;2015 Dragon Capital Center.<br>All Rights Reserved.</div>
					</div>
				</div>
			</div>

		</header>

		<section id="content">

			<div class="dcc-page" id="dcc-intro">
				<div id="dcc-home">
					<div class="dcc-building">
						<div class="dragon-building"><img data-src="img/dcc-building.jpg" data-hq="dcc-building-hq.jpg" data-medium="img/dcc-building-1440.jpg" data-tablet="img/dcc-building-1024.jpg" data-mobile="img/dcc-building-640.jpg" alt="Dragon Building" class="bg-lq"></div>
						<div class="dcc-plank">
							<a href="/about" class="start-now">
								<span class="off"><img src="img/start-a.jpg" alt="Click To Play" width="500" height="218"></span>
								<span class="on"><img src="img/start-b.jpg" alt="Click To Play" width="500" height="218"></span>
								<span class="on2x"><img src="img/start-c.jpg" alt="Click To Play" width="500" height="218"></span>
							</a>
						</div>
					</div>
					<div class="predcc-zeppelin">
						<div class="front-zeppelin">
							<div class="zep-img"><img src="img/zeppelin.png" alt="Zeppelin" width="500" height="202"></div>
							<div class="zep-led"><a href="http://www.dragoncapital.center/v1" title="Dragon Capital Center V1a"><span class="monitor"></span></a></div>
						</div>
						<div class="back-zeppelin">
							<img src="img/back-zeppelin.png" alt="Zeppelin" width="200" height="143">
						</div>
					</div>
				</div>
			</div>

			<div id="dcc-content">
				<div class="dcc-container">

					<div class="dcc-page">
						<div class="sub-preloader" id="preload-outspace"><span>50%</span></div>
						<div class="dcc-draggable" id="dcc-outspace">
							<div class="draggable draggable-normal">
								<div class="drag-background"><img data-src="img/outspace.jpg" data-hq="img/outspace-hq.jpg" data-medium="img/outspace-800.jpg" data-tablet="img/outspace-600.jpg" data-mobile="img/outspace-400.jpg" alt="Outspace" class="bg-lq" width="2400" height="1024"></div>
								<div class="drag-content">
									<div id="planet-scene">
										<div class="layer" data-depth="0.40">
											<div class="dcc-space" id="">
												<div class="planet planet-dev">
													<div class="planet-bg">
														<img src="img/planet-developer.png" alt="Developer Planet" width="744" height="744">
													</div>
													<div class="planet-content">

														<div class="dragon-hiring dragon-algorithm">
															<a href="/algorithm-engineer" data-dragon-id="dragon-algorithm">Algorithm Engineers</a>
															<div id="dragon-algorithm" class="reveal">
																<div class="hiring-content">
																	<h3>Algorithm Engineers</h3>
																	<p>You focus on the design, analysis, implementation, optimization, profiling and experimental evaluation of computer algorithms, bridging the gap between algorithm theory and practical applications of algorithms in software engineering.</p>
																	<p>You work in line with our front end - back end developers, search engineers, data scientist and psychologicalists.</p>
																	<h6>Requirement</h6>
																	<p>Mathematics freak | Orthodox | Full Stack | Genius</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-ios-developer">
															<a href="/ios-developer" data-dragon-id="dragon-ios-developer">IOS Developer</a>
															<div id="dragon-ios-developer" class="reveal">
																<div class="hiring-content">
																	<h3>IOS Programmer</h3>
																	<p>If you are an apple geek, then you might be the one we want to hire. Needless to say, we assume you already know what you are doing. It is a religion, it is a way of life, IOS programmers dedicate their life in achieving the best way to build apple apps so that human races can enjoy Job's legacy.</p>
																	<p>You must aware of the new technology around Cupertino, all the time. Your passion to learn is as much as big as your passion to share with others.</p>
																	<h6>Requirement</h6>
																	<p>Max.35 yrs old | Cocoa &amp; Cocoa Touch | Xcode | Swift | Willing to share and learn | Idealistic and conceptive</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-android-developer">
															<a href="/android-developer" data-dragon-id="dragon-android-developer">Android Developer</a>
															<div id="dragon-android-developer" class="reveal">
																<div class="hiring-content">
																	<h3>Android Developer</h3>
																	<p>Talking android, you must have a clear idea of how Android is evolving through different versions. We at DCC believe that Android is first created to make life simple. Therefore becoming an Android Programmer is not only making synchronization with the web layout but also building a better one.</p>
																	<p>We are looking people who can make powerful applications that can change people's life and can see the world from a different perspective.</p>
																	<h6>Requirement</h6>
																	<p>Max.35 yrs old | Android NDK | Android ADT | Eclipse IDE | Willing to share and learn | Idealistic and conceptive</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-system-admin">
															<a href="/system-admin" data-dragon-id="dragon-system-admin">DevOps</a>
															<div id="dragon-system-admin" class="reveal">
																<div class="hiring-content">
																	<h3>Developer Operational</h3>
																	<p>As the guardian angel, of every technical problem. Capable of creating a reliable operation of computer systems.</p>
																	<p>You have to ensure the security, performance, resources, and the specification meet the needs of the users.</p>
																	<h6>Requirement</h6>
																	<p>Max 35 years old | Familiar with Cloud Computing</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-ux-engineers">
															<a href="/ux-engineer" data-dragon-id="dragon-ux-engineers">UX Engineers</a>
															<div id="dragon-ux-engineers" class="reveal">
																<div class="hiring-content">
																	<h3>UX Engineers</h3>
																	<p>You will work in line with Researchers and Designers to define and deliver new features, test new concepts and assist in final implementation. Details are critical as you iterate on complex interactions, animations and pixel-perfect visual designs.</p>
																	<p>The happiness of users is your satisfaction.</p>
																	<h6>Requirement</h6>
																	<p>Max 35 years old | Familiar with development on websites and mobile platforms</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-data-scientists">
															<a href="/data-scientist" data-dragon-id="dragon-data-scientists">Data Scientists</a>
															<div id="dragon-data-scientists" class="reveal">
																<div class="hiring-content">
																	<h3>Data Scientists</h3>
																	<p>Have faith in analytics, computer science and applications, modeling, statistics, and math. Posses strong ability to communicate findings to business divisions and developer team, pick the right problems that have the most value.</p>
																	<p>You are part an analyst and part an artist. Can look data from many different angles; determine what it means, then recommend ways to apply the data.</p>
																	<h6>Requirement</h6>
																	<p>Big Data | Small Data | Meta Data | Micro Data | Nano Data</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-backend-developer">
															<a href="/backend-developer" data-dragon-id="dragon-backend-developer">Back End Developer</a>
															<div id="dragon-backend-developer" class="reveal">
																<div class="hiring-content">
																	<h3>Back End Developer</h3>
																	<p>You primarily develop and maintain the core functional logic and operations of a software or information system. The key job is to ensure that the data or services requested by the front-end system or software are delivered through programmatic means.</p>
																	<p>Experienced in building search engine, social media, online media, portal news, e-commerce, etc. A master on algorithm query of search engine and database.</p>
																	<h6>Requirement</h6>
																	<p>Max.35 yrs old | Laravel framework | AngularJS | PHP | Aware of new programming language | Willing to share as a team</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-frontend-developer">
															<a href="/frontend-developer" data-dragon-id="dragon-frontend-developer">Front End Developer</a>
															<div id="dragon-frontend-developer" class="reveal">
																<div class="hiring-content">
																	<h3>Front End Developer</h3>
																	<p>Understanding of layout aesthetics and a rigor for programming are prerequisites in the front-end web developer job description. have a depth knowledge of web technologies gained from research and professional experience.</p>
																	<p>In addition, understanding of the entire web development process with some back-end knowledge and experience on adaptive, responsive or hybrid design.</p>
																	<h6>Requirement</h6>
																	<p>Max.35 yrs old | HTML5 | CSS3 | Javascript | UI &amp; UX | Adobe skills</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-search-engineers">
															<a href="/search-engineer" data-dragon-id="dragon-search-engineers">Search Engineers</a>
															<div id="dragon-search-engineers" class="reveal">
																<div class="hiring-content">
																	<h3>Search Engineers</h3>
																	<p>Build scalable and distributed search system: content extraction, indexing and query interfaces.></p>
																	<p>Work with complex data structure and apply out of the box thinking to propose creative ways to extract most out of data with various degree of quality. You contribute to the design and architecture of the project.</p>
																	<h6>Requirement</h6>
																	<p>NodeJS | PHP | Laravel Framework| Java | C++ | Elastic Search</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>
													</div>
												</div>
												<div class="planet planet-creative">
													<div class="planet-bg">
														<img src="img/planet-creative.png" alt="Creative Planet" width="550" height="661">
													</div>
													<div class="planet-content">

														<div class="dragon-hiring dragon-2d-animator">
															<a href="/2d-animator" data-dragon-id="dragon-2d-animator">2D Animator</a>
															<div id="dragon-2d-animator" class="reveal">
																<div class="hiring-content">
																	<h3>2D Animator</h3>
																	<p>You would have strong teamwork skills the ability to follow direction and work hands on with our Art Director. Slice assets for the Engineering team. Work closely with the Art team for any user interface art needs.</p>
																	<p>Effectively communicate conceptual ideas and detailed designs both verbally and visually. Good professional graphic design skills including illustration, animation and computer graphic design.</p>
																	<h6>Requirement</h6>
																	<p>After Effects | Photoshop | Flash | Intuos Pro</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-copywriter">
															<a href="/copywriter" data-dragon-id="dragon-copywriter">Copywriter</a>
															<div id="dragon-copywriter" class="reveal">
																<div class="hiring-content">
																	<h3>Copywriter</h3>
																	<p>Eat. Sleep. Type. Repeat. You love to find and write contents knowing the contents you type will change many people's life. Yes correct, life changer. You can fill in our sites with great contents and passion, you are the dictionary and wikipedia God of the universe.</p>
																	<p>You know bahasa Indonesia well while English and Mandarin will also be a great advantage.</p>
																	<h6>Requirement</h6>
																	<p>Max.30 years old | 10 fingers typewriters | Target oriented</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-administrator">
															<a href="/administrator" data-dragon-id="dragon-administrator">Administrator</a>
															<div id="dragon-administrator" class="reveal">
																<div class="hiring-content">
																	<h3>Administrator</h3>
																	<p>Part of the job is to administer and moderate all the little things at our website and app. You decide who win, lose or draw. You decide which is right, which is wrong and which is which.</p>
																	<p>You are the judge when things can really become pre-judgemental and need a life-saving decision making. We don't want you to play God, but in some cases you are.</p>
																	<h6>Requirement</h6>
																	<p>Max.30 years old | Internet Savvy</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-art-director">
															<a href="/art-director" data-dragon-id="dragon-art-director">Art Director</a>
															<div id="dragon-art-director" class="reveal">
																<div class="hiring-content">
																	<h3>Art Director</h3>
																	<p>You will in charge of the overall visual appearance aesthetically and how it communicates visually. As a creative, you also have to use your strong vision of art to develop a great concept on all platforms.</p>
																	<p>You are the art itself.</p>
																	<h6>Requirement</h6>
																	<p>Max 35 years old | Creative Thinker | Never Give Up on Things</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-ui-ux-designer">
															<a href="/ui-ux-designer" data-dragon-id="dragon-ui-ux-designer">UI/UX Designer</a>
															<div id="dragon-ui-ux-designer" class="reveal">
																<div class="hiring-content">
																	<h3>UI/UX Designer</h3>
																	<p>Your main task will be to architect structured sets of views for data-driven applications. You will also be part of the Design Team tasked with eliciting/synthesizing requirements from users and wireframes that can then be implemented by the in-house Dev Team.</p>
																	<p>We rely on you to design the apps interface that is user-friendly, interactive, applicable, and easy-to-use.</p>
																	<h6>Requirement</h6>
																	<p>Max.35 yrs old | Android &amp; IOS | Adobe skills</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

													</div>
												</div>
												<div class="planet planet-illustrator">
													<div class="planet-bg">
														<img src="img/planet-illustrator.png" alt="Illustrator Planet" width="432" height="528">
													</div>
													<div class="planet-content">

														<div class="dragon-hiring dragon-vector-illustrator">
															<a href="/vector-illustrator" data-dragon-id="dragon-vector-illustrator">Vector Illustrator</a>
															<div id="dragon-vector-illustrator" class="reveal">
																<div class="hiring-content">
																	<h3>Vector Artist</h3>
																	<p>There are many kind of Illustration technique this world, which have different meaning. You must be able to create stunning vector artwork, fun and user-friendly. You will be part of the illustrator team.</p>
																	<p>We look for people who have vector drawing skill, the juicy idea, cooperate with a team, and friendly.</p>
																	<h6>Requirement</h6>
																	<p>Max. 35 years old | Great Wacom Skill | Communicative | Creative &amp; Fun</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-2d-illustrator">
															<a href="/2d-illustrator" data-dragon-id="dragon-2d-illustrator">2D Illustrator</a>
															<div id="dragon-2d-illustrator" class="reveal">
																<div class="hiring-content">
																	<h3>Digital Illustrator</h3>
																	<p>Imagination is abstract and unlimited. Through illustration, all dreams and imaginations become true. You should be able to deliver the message with your artwork. You're not alone, you can meet fellow illustrator who share the same passion.</p>
																	<p>We look for people who are ridiculously creative, imaginative, have distinguished drawing skill, and willing to work as a team.</p>
																	<h6>Requirement</h6>
																	<p>Max. 35 years old | Great Wacom Skill | Great sense of Humour | Creative &amp; Fun</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>

														<div class="dragon-hiring dragon-3d-illustrator">
															<a href="/3d-illustrator" data-dragon-id="dragon-3d-illustrator">3D Illustrator</a>
															<div id="dragon-3d-illustrator" class="reveal">
																<div class="hiring-content">
																	<h3>3D Artist</h3>
																	<p>If you like to create an object from different perspective in digital world, then you might be the one we want to hire. You must be able to build 3D characters and environments that are based on the concept art. Create the models' surfaces or skins, paint, wrap 2D textures, and lighting on a digital frame.</p>
																	<p>Don't be afraid to explore your skill or execute great idea into your artwork. You can discover something new for the very first time and share with others who have same passion with you.</p>
																	<h6>Requirement</h6>
																	<p>Max. 35 years old | 3D Max/ Maya | Cinema 4D also be a great advantage | Good at texturing | Innovative</p>
																</div>
																<div class="hiring-footer">
																	<p>Send your CV and resume to: <strong><a href="mailto:join@dragoncapital.center">join@dragoncapital.center</a></strong></p>
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="drag-nav drag-nav-outspace">
								<div class="drag-prev draggie"><span class="fa fa-angle-left"></span></div>
								<div class="drag-next draggie"><span class="fa fa-angle-right"></span></div>
							</div>
							<div class="drag-nav drag-nav-outspace-mobile">
								<div class="drag-prev draggie"><span class="fa fa-angle-left"></span></div>
								<div class="drag-next draggie"><span class="fa fa-angle-right"></span></div>
							</div>
						</div>
					</div>

					<div class="sky-separator"></div>

					<div class="dcc-page">
						<div class="sub-preloader" id="preload-rooftop"><span>50%</span></div>
						<div class="dcc-draggable" id="dcc-rooftop">
							<div class="draggable draggable-normal">
								<div class="drag-background"><img data-src="img/rooftop.jpg" data-hq="img/rooftop-hq.jpg" data-medium="img/rooftop-800.jpg" data-tablet="img/rooftop-600.jpg" data-mobile="img/rooftop-400.jpg" alt="Rooftop" class="bg-lq" width="2400" height="1024"></div>
								<div class="drag-content">
									<div class="rooftop-content">
										<p><span class="launcher-content"></span></p>
									</div>
									<div class="rocket-holder">
										<div class="rocket">
											<div class="rocket-body"><img src="img/rocket.png" alt="Rocket" width="200" height="640"></div>
											<div class="rocket-fire"><div class="fire-animation"></div></div>
											<div class="rocket-smoke"><div class="smoke-animation"></div></div>
											<a href="/career" class="btn-launch rippling"><span><img src="img/launch-button.png" alt="Launch Now" width="102" height="102"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="drag-nav drag-nav-rooftop">
								<div class="drag-prev draggie"><span class="fa fa-angle-left"></span></div>
								<div class="drag-next draggie"><span class="fa fa-angle-right"></span></div>
							</div>
						</div>
					</div>

					<div class="floor-separator"></div>

					<div class="dcc-page">
						<div class="sub-preloader" id="preload-illustrator"><span>50%</span></div>
						<div class="dcc-draggable" id="dcc-illustrator">
							<div class="draggable draggable-wide">
								<div class="drag-background"><img data-src="img/illustrator.jpg" data-hq="img/illustrator-hq.jpg" data-medium="img/illustrator-800.jpg" data-tablet="img/illustrator-600.jpg" data-mobile="img/illustrator-400.jpg" alt="Illustrator" class="bg-lq" width="4000" height="1024"></div>
								<div class="drag-content">
									<div class="mascot-holder mascot-bebek">
										<div class="mascot"></div>
									</div>
									<div class="team-content">

										<div class="dragon dragon-bebek">
											<a href="/chips" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/bebek.png" alt="Chips" width="200" height="200">
												<div class="details">
													<h4>Chips</h4>
													<h5>D'Brainious</h5>
													<p>Duck with banana.. that's it.... well it's an affair, maybe we'll tell you later about his background. Genius, arrogant and always have an evil plan to make people get away from him. He expresses his ingenuity by making an advanced tools to support all the plans he made. With all the advantages, Chips still need one thing to overcome the luck he doesn't have.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Rarest Species, Lack Luck Duck, Genius</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-aji">
											<a href="/aji" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/aji.png" alt="Aji" width="200" height="200">
												<div class="details">
													<h4>Aji</h4>
													<h5>Urban Artist</h5>
													<p>He has been around the art field for years and does not have any intention to leave. He has his own touch in his artworks; urban-style. He likes to explore creating art on various media like mural, sculpting, carpentry, etc.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Metalhead, Softhearted, Cat Lover, Smoke Bender, Gloomy Artist</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-beny">
											<a href="/beny" class="dragon-btn"></a>
											<div class="popup-content">
												<img src="img/dragoners/beny.png" alt="Beny" width="200" height="200">
												<div class="details">
													<h4>Beny</h4>
													<h5>Hardboiled Dreamer</h5>
													<p>A boy who so love the world of scribbles and doodles, that he makes that world his proffession. From illustration to comic, anything related to drawing, he'd do it. An action figure collector and video games nerd. Also, a movie, comic, novel, anime, tokusatsu, superhero, and sci-fi maniac.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Ally of Justice, Cyborg Creator, Burning Fingers</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-hana">
											<a href="/hana" class="dragon-btn"></a>
											<div class="popup-content">
												<img src="img/dragoners/hana.png" alt="Hana" width="200" height="200">
												<div class="details">
													<h4>Hana</h4>
													<h5>Alpha Female</h5>
													<p>A self-taught artist, illustrator, character designer, animation enthusiast, and a huge admirer of Walt Disney's movies. She was a drawing geek in her early childhood, with sketchbook and pen always in her hand, and forever on her journey to be a better artist. She studies theology and has interest in philosophy. She spends her spare time drawing and doodling.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Drawing, Critical thinking</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-mizan">
											<a href="/mizan" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/mizan.png" alt="Mizan" width="200" height="200">
												<div class="details">
													<h4>Mizan</h4>
													<h5>General Secretary of Interface</h5>
													<p>Originated from West Sumatra, he came to DCC and joined the team, with hope for new adventure. He is the perfect guy to talk about branding and business with. He hopped into creative field as a photographer, freelancer, and graphic designer.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Idea Source, Psychology Enthusiast, Run Lover</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-arie">
											<a href="/arie" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/arie.png" alt="Arie" width="200" height="200">
												<div class="details">
													<h4>Arie</h4>
													<h5>Double Agent CIA &amp; KGB</h5>
													<p>He is a mixed-blood, but not a blue blood (unfortunately). All we can say about him is, he loves to be part of this team. He is a fan of anything Japanese, most particular, manga and anime. He is a passionate ping-pong champion amongst the team, loves music, and his wife and child.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Sensitive with color, photo retouch, digital imaging, profound at ping pong and sociable.</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-kun">
											<a href="/kun" class="dragon-btn"></a>
											<div class="popup-content open-bottom-left">
												<img src="img/dragoners/kun.png" alt="Kun" width="200" height="200">
												<div class="details">
													<h4>Kuncoro</h4>
													<h5>Angel of Interface</h5>
													<p>His favorite subject in high school was art class. He then started off from there to get in design world. And now, he happily ended up here with us. To do design is his passion so far, no intention of moving on.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Quick Learner, Dream Chaser, Food Lover</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-frans">
											<a href="/frans" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/frans.png" alt="Frans" width="200" height="200">
												<div class="details">
													<h4>Frans</h4>
													<h5>Dr. Frankenstein</h5>
													<p>Design has changed his life and he is now a part of our team. Starting his career at DCC has grown his interest in printing field and digital design to give visual communication solution. A street-food lover, especially ci cong fan, sports-game player, and Korean variety shows enthusiast. His dream is to spread his vibe to people around the world.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Natural vibrator, basic pingpong skill, pinkie toe claper</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-mogri">
											<a href="/mogri" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/mogri.png" alt="Mogri" width="200" height="200">
												<div class="details">
													<h4>Mogri</h4>
													<h5>Doddle King</h5>
													<p>Here is the one who gets to be asked to draw all the time. He draws funny, silly and brainless things (just like the artist, lol!). This hobby of his becomes his occupation. A passionate lover of 'kupang lontong' and 'tahu campur'. An artbook hoarder.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Super duper ultra mega hyper ultimate digestive organs, Pro karaoke singer</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-dike">
											<a href="/dike" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/dike.png" alt="Dike" width="200" height="200">
												<div class="details">
													<h4>Dike</h4>
													<h5>Prince of Marvel</h5>
													<p>A fabulous person in DCC. He has a passion to draw since in his mother's womb, and is striving to expand his skill. Having so many dreams sure is fun and challenging, but his number one on the list is to be a notable, inspirational figure, like Sir Walt Disney. He is very fond of The Beatles, Bee Gees, and 90's movies.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Intergalactic Worker, Anatomist, Fabulous Hair</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-acai">
											<a href="/acai" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/acai.png" alt="Acai" width="200" height="200">
												<div class="details">
													<h4>Acai</h4>
													<h5>The Highlander</h5>
													<p>The senior amongst the team is 'Acai'. He is the most advanced in experience and age, having been in creative industry for over 17 years. He is one of the most beloved team members for his humility and smiles all around the clock.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Vector Expert, ability in lay outing, digital imaging</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-jesslyn">
											<a href="/jesslyn" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/jesslyn.png" alt="Jesslyn" width="200" height="200">
												<div class="details">
													<h4>Jesslyn</h4>
													<h5>The Keeper of Wonderland</h5>
													<p>With an (peculiarly..) IT background, Jesslyn didn't stop dreaming to become a proffesional illustrator one day. She plays Beethoven, Bach, Mozart and their friends. She is a patient piano teacher to little kiddos, and one of her roles in Dragon is to bring smiles, joy, and rainbows.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Pingpong player, draw cute things, super friendly</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-iqbal">
											<a href="/iqbal" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/iqbal.png" alt="Iqbal" width="200" height="200">
												<div class="details">
													<h4>Iqbal</h4>
													<h5>Emperor of RGB</h5>
													<p>He is passionate in drawing since he was a boy. He has experience working in animation studios. Other from drawing, he loves music and basketball. Happily married, with one wife and one child.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Music Hero, Environment Master</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-fano">
											<a href="/fano" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/fano.png" alt="Fano" width="200" height="200">
												<div class="details">
													<h4>Fano</h4>
													<h5>The Notorious Giant</h5>
													<p>A guy who loves challenges and dislikes monotonous routine, which is why he chose his career in start-up company. His long time passion in physic, math, logic and psychology nurtured him well to face problems which involve attention to details and logic. He is a problem solver who loves to meet new people.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>User Centered Design, Data Collecting, Wireframe Designing, User Interview</p>
												</div>
											</div>
										</div>

										<div class="dragon-bg"></div>

									</div>

								</div>
							</div>
							<div class="drag-nav drag-nav-illustrator">
								<div class="drag-prev draggie"><span class="fa fa-angle-left"></span></div>
								<div class="drag-next draggie"><span class="fa fa-angle-right"></span></div>
							</div>
						</div>
					</div>

					<div class="floor-separator"></div>

					<div class="dcc-page">
						<div class="sub-preloader" id="preload-creative"><span>50%</span></div>
						<div class="dcc-draggable" id="dcc-creative">
							<div class="draggable draggable-wide">
								<div class="drag-background"><img data-src="img/creative.jpg" data-hq="img/creative-hq.jpg" data-medium="img/creative-800.jpg" data-tablet="img/creative-600.jpg" data-mobile="img/creative-400.jpg" alt="Creative" class="bg-lq" width="4000" height="1024"></div>
								<div class="drag-content">
									<div class="mascot-holder mascot-bear">
										<div class="mascot"></div>
									</div>
									<div class="team-content">

										<div class="dragon dragon-bear">
											<a href="/bear" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/bear.png" alt="">
												<div class="details">
													<h4>Coco</h4>
													<h5>The Shoppingticated</h5>
													<p>Coco is a lovely, cheerful and shopaholic bear who came from a wealthy family, raised in an urban environment makes Coco aware about style and fashions. Coco is an independent girl, she doesn't get a lot of money from her parents, so she works as an actress to fulfill her desire to shop.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Talkative, Friendly, Attention Seeker, Magical Purse</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-rajiv">
											<a href="/rajiv" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/rajiv.png" alt="Rajiv" width="200" height="200">
												<div class="details">
													<h4>Rajiv</h4>
													<h5>Digital Vampire</h5>
													<p>An architect of strategy at DCC. He does no ordinary digital marketing strategies, but it ain't a problem because he loves challenges. His passion is still to be a classy propaganda initiator.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Classy Propaganda Maker</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-diaz">
											<a href="/diaz" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/diaz.png" alt="Diaz" width="200" height="200">
												<div class="details">
													<h4>Diaz</h4>
													<h5>The Mind &amp; Mental Rapist</h5>
													<p>The one who sees every person in the room and analyze every behaviour is our psycho-logicalist. She knows what we do even before we do it, she predicts every movement, nothings misses from her eyes. She likes physics, chemistry, politic, philosophy, and culture.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Brainstorming Master, Mind Reader, Psychological Test, Psychology, a bit of this and that</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-asad">
											<a href="/asad" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/asad.png" alt="Asad" width="200" height="200">
												<div class="details">
													<h4>Asad</h4>
													<h5>The Equalizer</h5>
													<p>He was on air broadcasting music to his faithful listener for quite some years. He then landed on DCC, in charge of producing crazy ideas to make things go viral on social media. Also, a walking contradiction of music, books, movies, and football.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Story writer, Social media analyst, Storyteller, MC, Balance holder</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-arip">
											<a href="/arip" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/arip.png" alt="Arip" width="200" height="200">
												<div class="details">
													<h4>Arif</h4>
													<h5>Delusional Ranger</h5>
													<p>He aspires to revive the beauty of 2D animation in the world who is shifting its heart to 3D. He is eager to make short animations in the future. He loves Japanese culture, movies, drama, music, and an otaku freak. He is also a devoted fan of Street Fighter series, not just the game but the whole concept of it. Arif is a toy and action figure collecter, and lover of all cute things.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Digital 2D Animation, Cut-out Animation, 3d Modelling, Vector</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-corry">
											<a href="/corry" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/corry.png" alt="Corry" width="200" height="200">
												<div class="details">
													<h4>Corry</h4>
													<h5>Dot Connector</h5>
													<p>A fresh designer in the world of creative and digital industry. His task is to be the vessel of ideas from around him, and turn them into concepts based on user's necessity. He likes to observe people and life, searching for pattern and asking questions. Outside the office hour, he is a runner and a reader. A few of his favorite things are fringes, wigs, and weird stuff.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Junior Polymath, Growth Mindset, Newbie Listener &amp; Your Lover</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-cynthia">
											<a href="/cynthia" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/cynthia.png" alt="Cynthia" width="200" height="200">
												<div class="details">
													<h4>Cynthia</h4>
													<h5>Sentence Chamber</h5>
													<p>Her background is from DKV Animation, but now she choose to create beautiful words and sentences. She formerly worked at Production House as an designer & copywriter. Cynthia loves creative industry because she can express and explore many things.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Food Lover, Personality Reader, Peace Keeper, Sociable</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-awe">
											<a href="/awe" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/awe.png" alt="Awe" width="200" height="200">
												<div class="details">
													<h4>Awe</h4>
													<h5>The Cyber Hitman</h5>
													<p>Formerly known as Khrisnawan Adhie, basicly is a creative people who turn into the dark side as a marketer. love to identify and promote the goods and services desired by a set of consumers.  First time at cyberspace since MIRC and web 2.0 era. Always follow the information about art, design, movies, technology, internet world, urban culture, and music update.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Art and Design, UI/UX, ecommerce, native + digital marketing, and skateboarding.</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-borton">
											<a href="/borton" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/borton.png" alt="Borton" width="200" height="200">
												<div class="details">
													<h4>Borton</h4>
													<h5>Nano Data Dracula</h5>
													<p>He's the crazy brain behind all of these, he pushes and makes us believe that there is nothing we can't do, he is an optimist who makes us believe that this team can create and invent great things to serve and enhance the way people lives their life. His vision paving the long road we take in this journey. His experiences makes us aware of every obstacles ahead. His presence in this team is so important as he is both our friend and leader who always eat last and make us feel secure to take every risk.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Psychologicalist, Psychedelic, Time Traveller, Telekinesis, Steeple Chase Runner, Nano Data Engineering, User Interface, Experience Engineering, Right Brainer</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-yori">
											<a href="/yori" class="dragon-btn"></a>
											<div class="popup-content open-bottom-left">
												<img src="img/dragoners/yori.png" alt="Yori" width="200" height="200">
												<div class="details">
													<h4>Yori</h4>
													<h5>Creature of Alphabet</h5>
													<p>Yori is a person who in charge to communicating products to mass audience. He incorporates unique concepts, arts and marketing techniques. He creates accurate ways to communicate products using his extensive knowledge. His interest in digital media world enables him to find new and interesting things.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Thinking, Writing, Reading, Gaming, Sleeping</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-stephanie">
											<a href="/stephanie" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/stephanie.png" alt="Stephanie" width="200" height="200">
												<div class="details">
													<h4>Stephanie</h4>
													<h5>Mutant Angel</h5>
													<p>Her favorite activity is to make cute illustrations. She enjoys storytelling, paper craft and photography. Well, she has a whole lot of hobbies, but a few of her favorite things are anime, cosplay, nendoroids, and fashion.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Children Enthusiast, Cosplayer, Game Explorer</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-aci">
											<a href="/aci" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/aci.png" alt="Aci" width="200" height="200">
												<div class="details">
													<h4>Lasty</h4>
													<h5>Director Of Smile and Happiness</h5>
													<p>She is a gorgeous mom blessed with a cute girl. Having a background in Information Technology, she took a role in Dragon team to spread the smile and help transforming the already great content to marvelous, while also make friends with customers.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Fashionable, Dancing, Food Lover, Adventure, Great Driver, Running</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-vic">
											<a href="/vic" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/vic.png" alt="Vic" width="200" height="200">
												<div class="details">
													<h4>Victorio</h4>
													<h5>The Mighty "Tor"</h5>
													<p>Strong and healthy is the first impression when we look at him, deep down inside his calmness lead and guide us to make a great product. From detailing every word to simplify complex technical problems. In a critical condition he is the hero who mediate people and listening on both side of a story. His leadership is what bind us together.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Power Augmentation, Innate Capability, Weather Manipulation, Various Natural Phenomena, Omnipresence</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-mega">
											<a href="/mega" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/mega.png" alt="Mega" width="200" height="200">
												<div class="details">
													<h4>Mega</h4>
													<h5>Queen of Soundsation</h5>
													<p>The dream to become a journalist started in junior high school. Graduating from college, she started a career in TV industry as broadcaster, reporter, and script-writer. Now she is a part of our team. She also loves to sing in the shower, dance in the rain, and let her imagination run wild reading novels.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Voice over, dubbing, announcing, singing, dancing, travelling</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-rudy">
											<a href="/rudy" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/rudy.png" alt="Rudy" width="200" height="200">
												<div class="details">
													<h4>Rudi</h4>
													<h5>Sound Mobster</h5>
													<p>He is the guy who makes sure the shooting process goes smooth. Yep, he is the one of camera master. He loves soccer, photography, and travelling.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Mental time traveler, Idea Source, Mind Reader</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-vinza">
											<a href="/vinza" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/vinza.png" alt="Vinza" width="200" height="200">
												<div class="details">
													<h4>Vinza</h4>
													<h5>Production Captain</h5>
													<p>At DCC, Vinza make sure that all production process went smooth, from schedulling shooting session, gathering crew and post poduction supervision to preparing props and equipment. He also loves to visit beautiful places and frame them.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Playing around, How-if skills, Photo and videographic</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-fadli">
											<a href="/fadli" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/fadli.png" alt="Fadli" width="200" height="200">
												<div class="details">
													<h4>Fadly</h4>
													<h5>Ronin Ninja</h5>
													<p>Fadly has an exploring attitude for unusual and unique concept to make video. Aside from his professional work he also manages an indie band, watches Nat Geo Channel, captures anything through the lens and does family travelling.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Drum Addict</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-adit">
											<a href="/adith" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/adit.png" alt="Adit" width="200" height="200">
												<div class="details">
													<h4>Adith</h4>
													<h5>Graphic Mafioso</h5>
													<p>He is in our post-production team in charge of moving the stillness. He was Involved in indie-movie community in Bandung for some time. An online gamer.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Video editing, Motion graphic specialist</p>
												</div>
											</div>
										</div>

										<div class="dragon-bg"></div>

									</div>

								</div>
							</div>
							<div class="drag-nav drag-nav-creative">
								<div class="drag-prev draggie"><span class="fa fa-angle-left"></span></div>
								<div class="drag-next draggie"><span class="fa fa-angle-right"></span></div>
							</div>
						</div>
					</div>

					<div class="floor-separator"></div>

					<div class="dcc-page">
						<div class="sub-preloader" id="preload-developer"><span>50%</span></div>
						<div class="dcc-draggable" id="dcc-developer">
							<div class="draggable draggable-wide">
								<div class="drag-background"><img data-src="img/developer.jpg" data-hq="img/developer-hq.jpg" data-medium="img/developer-800.jpg" data-tablet="img/developer-600.jpg" data-mobile="img/developer-400.jpg" alt="Developer" class="bg-lq" width="4000" height="1024"></div>
								<div class="drag-content">
									<div class="mascot-holder mascot-cat">
										<div class="mascot"></div>
									</div>
									<div class="team-content">

										<div class="dragon dragon-van">
											<a href="/van" class="dragon-btn"></a>
											<div class="popup-content">
												<img src="img/dragoners/van.png" alt="Ervandra Halim" width="200" height="200">
												<div class="details">
													<h4>Van</h4>
													<h5>S.W.A.G Team Leader</h5>
													<p>He loves both art and social interaction. His mission is to integrate them and bring the best out into this world. Known for his humble-natured ambience who always try to create a mutual working environment. He is not easy to befriend with, but you will love him if you already get to know him.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>UI &amp; UX Designer, Interaction Engineer, Responsive Web Designer, Korean Addicts</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-cat">
											<a href="/cookie" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/cat.png" alt="Cookie" width="200" height="200">
												<div class="details">
													<h4>Cookie</h4>
													<h5>Incredible Cat-fish</h5>
													<p>Eeeee… It's not a hat, it's a fish, his best companion, we'll let you know later why it's there. Experience makes Cookie become a wise cat, he can not refuse people wishes, his love to help people often taken for granted and makes him look like a slavish cat. But he doesn't care about it, he is still positive and sincere.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Heroic, Meditation Master, Loyal</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-daniel">
											<a href="/daniel" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/daniel.png" alt="Daniel" width="200" height="200">
												<div class="details">
													<h4>Daniel</h4>
													<h5>Wonder Boy</h5>
													<p>He started his career as a developer in IT world since graduating high school. He is a technology freak and keen on movie discussion. He is also a music aficionado, with a dream to be part of its realm.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Mentalist, Time Traveler, Walking Calculator, Singer, Part time System Analyst</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-hendra">
											<a href="/hendra" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/hendra.png" alt="Hendra" width="200" height="200">
												<div class="details">
													<h4>Hendra</h4>
													<h5>CSS Enthusiast</h5>
													<p>A young audiophile, a keen user of iPod and Earbud, as well as movie and TV series addict. He is a true Liverpudlian.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>HTML5, CSS3, Part time Android Developer and JavaScript Conqueror</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-imam">
											<a href="/imam" class="dragon-btn"></a>
											<div class="popup-content">
												<img src="img/dragoners/imam.png" alt="Imam" width="200" height="200">
												<div class="details">
													<h4>Imam</h4>
													<h5>Head of Polyglotism</h5>
													<p>Imam plays with various language to search all possible language pattern. He dreamt to create a Natural Language Processing software as he has a huge passion in stemming algorithm. He is also a puzzle maker and loves to create games for Android or iOS platform.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Board games Inventor, Linguist, Translator</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-opan">
											<a href="/opan" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/opan.png" alt="Opan" width="200" height="200">
												<div class="details">
													<h4>Opan</h4>
													<h5>Godfather of Robotics</h5>
													<p>He is a small person with huge dream. Taufan sees himself as a designer of advanced applications for the Android platform and has a big interest on Internet of Things platform. He contributes ideas and continuously discover, evaluate, and implement new technologies to maximize development efficiency. He is also a good singer and guitarist.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Chess Master, Music Composer, Indigo</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-akung">
											<a href="/akung" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/akung.png" alt="Akung" width="200" height="200">
												<div class="details">
													<h4>Akung</h4>
													<h5>Ghost Rider</h5>
													<p>Having given up on science, he shifted his passion to play with codes. He is basically has fallen head over heels with codes! Side hobbies: climbing, camping, and travelling. Guess he is not into codes after all.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Logic, Structure, Artistic, Silence</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-ali">
											<a href="/ali" class="dragon-btn"></a>
											<div class="popup-content">
												<img src="img/dragoners/ali.png" alt="Ali" width="200" height="200">
												<div class="details">
													<h4>Ali</h4>
													<h5>Server Magician</h5>
													<p>A book geek and a loving father with two children. He is interested in new technologies, expecially with all "new kids on the block” technology.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Mind Reader, Full Stacker</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-jannes">
											<a href="/janness" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/jannes.png" alt="Jannes" width="200" height="200">
												<div class="details">
													<h4>Jannes</h4>
													<h5>The Flash</h5>
													<p>A geek programmer who loves to code in Web Based field in Web Development. He is experienced in application development, from a simple company profile to enterprise complex system. He simply a gourmand, who never gets fat.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Table Tennis</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-donny">
											<a href="/donny" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/donny.png" alt="Donny" width="200" height="200">
												<div class="details">
													<h4>Donny</h4>
													<h5>The Philosopher</h5>
													<p>A law alumni but fell in love with design and technology 15 years ago. His personal interests are all about live, social, law, music, and creative industry. Originated from a small, old-fashioned, but lovely town, Yogyakarta. His role is to play around with tons of codes and beauty to make cool apps.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>UX Expert, SEO, Advanced Coder, Logical Warrior, Thinker</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-agung">
											<a href="/agung" class="dragon-btn"></a>
											<div class="popup-content open-bottom-right">
												<img src="img/dragoners/agung.png" alt="Agung" width="200" height="200">
												<div class="details">
													<h4>Agung</h4>
													<h5>McWhopper Full Stacker</h5>
													<p>Loves to do research on data, iOS apps, and in charge of creating ground-breaking sites. He sets his mind on digging his full stack ability in desktop and mobile. His hobbies are watching movies and expanding horizons.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Fast Learner, English Enthusiast, Personality Reader, Expressionist, Go Hard or Go Home kinda person.</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-tom">
											<a href="/tom" class="dragon-btn"></a>
											<div class="popup-content open-top-right">
												<img src="img/dragoners/tom.png" alt="Tom" width="200" height="200">
												<div class="details">
													<h4>Tom</h4>
													<h5>Professor of IOT</h5>
													<p>He fell in love with software and web programming. A simple guy, yet fascinated to complexity. In a midst of his chaotic task, he can manage to get his head inside the game. Aside from all that, he enjoys reading, eating Soto Mie, and listen to music.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Silent Coder, Less-than-10-second-idle-rule</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-yoel">
											<a href="/yoel" class="dragon-btn"></a>
											<div class="popup-content open-top-left">
												<img src="img/dragoners/yoel.png" alt="Yoel" width="200" height="200">
												<div class="details">
													<h4>Yoel</h4>
													<h5>Clone of Einstein</h5>
													<p>This hunk is an avid soccer fan, originated from Cirebon he is a curious folk who eager to learn new and interesting things. He started his career as technical consultant where he solved problems for the client in new efficient way, both in speed and resource. Mathematics and information technology are his expertise, which provide an excellent support in solving complex algorithm and such. A Milanisti, a long admirer of Ricardo 'Kaka'. His favourite gameplay: Football Manager.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Mathematical Optimizers, Winger in Soccer and Futsal, Puzzle solver</p>
												</div>
											</div>
										</div>

										<div class="dragon dragon-erick">
											<a href="/erick" class="dragon-btn"></a>
											<div class="popup-content open-bottom-left">
												<img src="img/dragoners/erick.png" alt="Erick" width="200" height="200">
												<div class="details">
													<h4>Erick</h4>
													<h5>Binary Boss</h5>
													<p>A generalist and entrepreneur by heart. He loves to solve riddles and real world problems with his analytical brain. His endless curiosity drives him to keep expanding his knowledge. You may say he is our Mr. Robert Downey Junior aka Mr. Stark.</p>
													<h6>Skills &amp; Special Attribute</h6>
													<p>Demonic Mnemonics, Idea Bank, Adaptability, Growth Mindset, Polymath</p>
												</div>
											</div>
										</div>

										<div class="dragon-bg"></div>

									</div>

								</div>
							</div>
							<div class="drag-nav drag-nav-developer">
								<div class="drag-prev draggie"><span class="fa fa-angle-left"></span></div>
								<div class="drag-next draggie"><span class="fa fa-angle-right"></span></div>
							</div>
						</div>
					</div>

					<div class="floor-separator"></div>

					<div class="dcc-page">
						<div class="dcc-draggable" id="dcc-lobby">
							<div class="draggable draggable-normal">
								<div class="drag-background"><img data-src="img/lobby.jpg" data-hq="img/lobby-hq.jpg" data-medium="img/lobby-800.jpg" data-tablet="img/lobby-600.jpg" data-mobile="img/lobby-400.jpg" alt="Lobby" class="bg-lq" width="2400" height="1024"></div>

								<div class="drag-content">

									<div class="lobby-assets">
										<div class="centered-content" id="lobby-content">
											<div class="content">
												<h2>The Future is on us.</h2>
												<div class="normal-typed">
													<p><span class="paragraph"></span></p>
												</div>
												<div class="skip-typed">
													<p>Hi, we just came back to mother earth to spread what we have seen back in the future. What we are doing might not be something you have seen before.<br/>We know what you have thought.<br/>No, not that one, and not that one either.<br/>Curious?</p>
												</div>
												<div class="lobby-button-container">
													<a href="/fangs" class="btn-begin btn-meet-us rippling" title="Meet Us"><span><img src="img/meet-us-button.png" alt="Meet Us" width="100" height="100"></span></a>
													<a href="#watch-us" class="btn-begin btn-watch-us rippling" title="Watch Us"><span><img src="img/watch-us-button.png" alt="Watch Us" width="100" height="100"></span></a>
												</div>

											</div>

										</div>

									</div>
									<div class="skip-container">
										<a href="#skip" class="skip-typed-button">Skip Intro <span class="fa fa-fast-forward"></span></a>
									</div>

								</div>
							</div>
							<div class="drag-nav drag-nav-lobby">
								<div class="drag-prev draggie"><span class="fa fa-angle-left"></span></div>
								<div class="drag-next draggie"><span class="fa fa-angle-right"></span></div>
							</div>
						</div>

					</div>

				</div>
			</div>

		</section>

		<footer class="dcc-nav home">
			<div class="nav up"><a href="#next"><span class="fa fa-chevron-up"></span></a></div>
			<div class="nav down"><a href="#prev"><span class="fa fa-chevron-down"></span></a></div>
		</footer>

		<div class="watchus-popup">
			<div class="wp-wrapper">
				<div class="wp-container"></div>
			</div>
		</div>

		<script type="text/javascript" src="js/fastclick.js"></script>
		<script type="application/javascript">
			window.addEventListener('load', function() {
				new FastClick(document.body);
			}, false);
		</script>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.parallax.min.js"></script>
		<script type="text/javascript" src="js/iscroll.js"></script>
		<script type="text/javascript" src="js/typed.min.js"></script>
		<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="js/perfect-scrollbar.jquery.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
		
		<script async="async">
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-67806983-1', 'auto');
			ga('send', 'pageview');

		</script>

	</body>
	</html>