<!DOCTYPE HTML>
<html>
	<head>

	<meta name="viewport" content="width=device-width, user-scalable=no">

	<title>Joe Marshall</title>	

	<link rel="shortcut icon" href="{{ paths.theme }}images/brackets.ico">
	<link rel="stylesheet" type="text/css" href="{{ paths.theme }}styles/foundation.css"/>

	<script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
		
	<script type="text/javascript" src="{{ paths.theme }}javascript/jquery.stellar.js"></script>
	<script type="text/javascript" src="{{ paths.theme }}javascript/contact.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Raleway|Nothing+You+Could+Do|La+Belle+Aurore' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" type="text/css" href="{{ paths.theme }}styles/main.css"/>



	{% block head %}
	{% endblock %}

	</head>

	<body>
		
		<div class="header">
			<div class="name"><a href="#homeAnchor">Joe Marshall</a></div>
			<ul class="header-links">
				<li class="links"><a href="#projectsAnchor">PROJECTS</a></li>
				<li class="links"><a href="#experienceAnchor">EXPERIENCE</a></li>
				<li class="links"><a href="#contactAnchor">CONTACT</a></li>
			</ul>

		</div>

			
			{% block splash %}
			{% endblock %}
			
			{% block about %}
			{% endblock %}

			{% block projects %}
			{% endblock %}

			{% block experience %}
			{% endblock %}

			{% block contact %}
			{% endblock %}
			

		</div>

		<div class="footer">
			<div class="footer-text">
				<h4>Copyright &copy; 2014 Joe Marshall</h4>
				<h4>Built with <a href="bolt.cm">Bolt</a></h4>
			</div>
		</div>

		<script type="text/javascript">
		$( document ).ready(function() {
			
			//hover events for projects
			var projectFade = function (element, img_url) {
				$(element).hover(
				function () {
						$(element).css({"background": "", "background-color": "#FF1A39"});
						$(element + " .project-info").fadeIn();
					}, function () {
						$(element + " .project-info").hide();
						$(element).css({"background-color": "", "background": "url(" + img_url + ")"});
					}
				);
			};

			projectFade("#spiceworks", "{{ paths.theme }}images/spiceworks.png");
			projectFade("#prepify", "{{paths.theme }}images/prepify.png");
			projectFade("#sxsw", "{{paths.theme }}images/sxsw.png");
			projectFade("#alcalde", "{{paths.theme }}images/alcalde.png");
			projectFade("#culturemap", "{{ paths.theme }}images/culturemap.png");

			


			//calculates scroll distance on event, tweaks header style
				$(window).scroll(function (e) {
					var y = $(this).scrollTop();

					var headerHeight = $(".header").height();
					var splashHeight = $(".splash").height();
					var storyHeight = $(".story").height();

					var borderRed = splashHeight - headerHeight;
					var borderBlack = borderRed + storyHeight;

					if (y > borderRed) {
						$(".header").css({"background-color": "white", "color": "black"});
						$(".header a").css({"color":"black"});

					} else {
						$(".header").css({"background-color": "#FF1A39", "color": "white"});
						$(".header a").css({"color":"white"});
					}

					if (y > 50) {
						$(".header").css({"border-bottom": "1px solid black"});
					} else {
						$(".header").css({"border-bottom": ""});
					}

					if (y > borderBlack) {
						$(".header").css({"border-bottom": "2px solid white", "background-color": "black", "color": "white"});
						$(".header a").css({"color":"white"});

					};

				});

				//resizes splash image to fit full screen
				$(window).resize(function (e) {
				 	var windowWidth = $(window).width();
				 	var height = $(window).height();

				 	// $(".splash").css({"width": windowWidth, "height": height})
				 });

        //set up anchor tag animate scrolls
        $('a').click(function(){
    			$('html, body').animate({
        		scrollTop: $( $(this).attr('href') ).offset().top
    			}, 500);
    			return false;
				}); 

        // Change text inside send button on submit
				var send = document.getElementById('contact-submit');
				if(send) {
				        send.onclick = function () {
				                this.innerHTML = '...Sending';
				        }
				}



				// stellar.js parallax scrolling plugin configuration
				$("body").stellar({
				  // Set scrolling to be in either one or both directions
				  verticalScrolling: true,
				  horizontalScrolling: true,

				  // Set the global alignment offsets
				  verticalOffset: 50,

				  // Refreshes parallax content on window load and resize
				  responsive: false,

				  // Select which property is used to calculate scroll.
				  // Choose 'scroll', 'position', 'margin' or 'transform',
				  // or write your own 'scrollProperty' plugin.
				  scrollProperty: 'scroll',

				  // Select which property is used to position elements.
				  // Choose between 'position' or 'transform',
				  // or write your own 'positionProperty' plugin.
				  positionProperty: 'position',

				  // Enable or disable the two types of parallax
				  parallaxBackgrounds: true,
				  parallaxElements: true,

				  // Hide parallax elements that move outside the viewport
				  hideDistantElements: true,

				  // Customise how elements are shown and hidden
				  hideElement: function($elem) { $elem.hide(); },
				  showElement: function($elem) { $elem.show(); }
				});

			});
		</script>

	</body>
</html>