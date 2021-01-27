<!DOCTYPE html>
<html id="topOfThePage">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <!--_____________MAIN CSS_____________-->
    <link rel="stylesheet" type="text/css" href="styles/dist/main.min.css">
		
    <!--_____________ICON IN TITLE_____________-->
    <link rel="shortcut icon" href="images/icons/code.png" type="image/x-icon">

    <!--___________CAROUSEL CSS_____________-->
    <link rel="stylesheet" href="https://npmcdn.com/flickity@2.0/dist/flickity.css" media="screen">

</head>
<body>
	
	<div class="main-page section">
		<header class="main-page-header">
			<!--SITE NAV-->
			<nav class="nav">
				<li class="nav__item"><a class="nav__link" href="#topOfThePage">Home</a></li>
				<li class="nav__item"><a class="nav__link" href="#my-work">My Work</a></li>
				<li class="nav__item"><a class="nav__link" href="#how-i-learn">How I Learn</a></li>
				<li class="nav__item"><a class="nav__link" href="#about">About</a></li>
				<li class="nav__item nav__item_last"><a class="nav__link" href="#contact-section">Contact</a></li>
			</nav>
		</header>
		
		<div class="welcome-wrapper">
			<figure class="photo-of-me">
				<!--_____________PHOTO OF ME_____________-->
				<img src="images/picturesOfMe/me.jpg" alt="Photo of Tamas" class="photo-of-me__img" >			
			</figure>
			<section class="welcome">
				<!--_____________WELCOME SECTION_____________-->
				<h1 class="welcome__typing-js-in-header"><span class="element"></span></h1>
				<p class="welcome__paragraph">This is my front-end developer portfolio</p>
				<a id="view" class="welcome__link" href="#my-work">
					<button class="btn hvr-icon-hang">View my portfolio</button>
				</a>
			</section>
		</div>
	</div>

	<!--_____________MYWORK SECTION_____________-->
	<section class="my-work section" id="my-work">
		<h2 class="offset">My Work</h2>
		<div class="divider-circle-my-work"></div>
			<div class="website-images cfnew carousel" data-flickity='{"cellAlign": "left", "contain": true, "imagesLoaded": true}'>
				
				<a class="home-page-images-of-portfolios carousel-cell" href="#topOfThePage">
					<figure>
						<img src="https://i.postimg.cc/28Lbfn3B/website-portfolio.jpg" alt="Website portfolio">
					</figure>
				</a>

				<a class="home-page-images-of-portfolios carousel-cell" target="blank" href="http://codepen.io/tamasbalint/full/oYOgNb/">
					<figure>
						<img src="https://i.postimg.cc/RVJ90R74/website-fcc-personal-portfolio.jpg" alt="Website fcc personal portfolio">
					</figure>
				</a>

				<a class="home-page-images-of-portfolios carousel-cell" target="blank" href="http://www.tamasbalint.com/websites/RandomQuoteMachine/index.html">
					<figure>
						<img src="https://i.postimg.cc/fTtvgktY/website-fcc-random-quote-machine.jpg" alt="Website fcc random quote machine">
					</figure>
				</a>

				<a class="home-page-images-of-portfolios carousel-cell" target="blank" href="http://codepen.io/tamasbalint/full/ZBwGYy/">
					<figure>
						<img src="https://i.postimg.cc/5NYKzKKK/website-tribute-elon-musk.jpg" alt="Website Elon Musk Tribute">
					</figure>
				</a>
				
				<a class="home-page-images-of-portfolios carousel-cell" target="blank" href="https://github.com/balinttamas87/bookingConfirmation">
					<figure>
						<img src="https://i.postimg.cc/WbDSk8w4/website-booking-confirmation-gif.gif" alt="Website booking confirmation">
					</figure>
				</a>

				<a class="home-page-images-of-portfolios carousel-cell" target="blank" href="http://www.tamasbalint.com/websites/LakeDistrict/index.html">
					<figure>
						<img src="https://i.postimg.cc/WbDB6w1z/website-lake-district.jpg" alt="Website lake district">
					</figure>
				</a>

			</div>
	</section>

	<!--_____________HOW I LEARN SECTION_____________-->
	<section class="how-i-learn section">
		<h2 id="how-i-learn" class="offset">How I Learn</h2>
		<div class="divider-circle-how-i-learn"></div>
		<p class="paragraph">
			I like to attend the meet-up for front-end developers called 

			<a class="link-mcrfred" href="http://www.meetup.com/McrFRED/">McrFRED</a>

			in Manchester, UK.
			There is always a great talk by experienced, professional developers about web technologies, best practices. 
			You can always hear plenty of useful advice.

			Most of my basic knowledge has been obtained through 

			<a class="link-codeschool" href="https://www.codeschool.com/">Code School</a>.

			As a self-taught person, I usually find myself on websites like 

			<a class="link-mdn" href="https://developer.mozilla.org/en-US/">Mozilla Developer Network</a>,

			<a class="link-stackoverflow" href="http://stackoverflow.com/">Stack Overflow</a>

			as there is always some help.

			Of course, I use Google a lot to find solutions if I feel stuck while practicing.

			To keep myself up to date and to find some useful topics I usually visit the website called 
			
			<a class="link-frontendfront" href="https://frontendfront.com/">frontendfront</a>.

		</p>
	</section>

	<!--_____________ABOUT SECTION_____________-->
	<section class="about section">
		<h2 id="about" class="offset">About</h2>
		<div class="divider-circle-about"></div>
		<p class="paragraph">

			Hi, I am Tamas Balint. I created this website to show what I am capable of in terms of building a website using HTML, CSS, Sass, jQuery, Javascript and Gulp.

			I hope this site can convince you that I would be a great asset to a developer team as a junior front-end developer within your company.

			I’m looking for an environment where I can broaden my knowledge and experience in web development.

			I am interested in front-end and back-end as well.
</p>
	</section>
	<!--_____________CONTACT SECTION_____________-->
	<section class="contact-section">
		<h2 id="contact-section" class="offset contact-section__header">Contact Me</h2>
		<div class="divider-circle-contact-section"></div>
		<div class="wrapper-contact"> 
			<!--_____________CONTACT FORM_____________-->
			<form class="ajax-form" method="POST" action="form.php" novalidate="true">
			  <span class="message ajax-form-message"></span>
			  <span class="error ajax-form-error"></span>

			  <label for="name"></label>
			  <input id="name" type="text" name="name" placeholder="Your full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your full name'" required />
			  <span class="error error-name"></span>

			  <label for="email"></label>
			  <input id="email" type="email" name="email" placeholder="Your e-mail address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your e-mail address'" required/>
			  <span class="error error-email"></span>

			  <label for="message"></label>
			  <textarea rows="5" col="50" id="message" name="message" class="textarea" placeholder="Your message goes here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your message goes here'" required /></textarea>
			  <input type="submit" name="submit" value="Send message" class="send-message">

			</form>
	    </div> 
	</section>

	<!--_____________MOBILE MENU_____________-->
	<header class="hamburger-header">
		<nav class="hamburger-nav">
			<li class="nav__item">
				<a class="nav__link nav__link_icon" href="tel:07984305222">
					<i class="fa fa-phone fa-2x"></i>
				</a>
			</li>
				
			<li class="nav__item">
					
				<button class="hamburger hamburger--spring" type="button">
	  				<span class="hamburger-box">
	   					<span class="hamburger-inner"></span>
	  				</span>
				</button>  
					
			</li>
				
			<li class="nav__item nav__item_last">
				<a class="nav__link nav__link_icon" href="mailto:mail@tamasbalint.com">
					<i class="fa fa-envelope fa-2x"></i>
				</a>
			</li>
		</nav>
	</header>						

	<div class="mobile-menu">
		<a class="mobile-menu__link" href="#topOfThePage">Home</a>
		<a class="mobile-menu__link" href="#my-work">My Work</a>
		<a class="mobile-menu__link" href="#how-i-learn">How I Learn</a>
		<a class="mobile-menu__link" href="#about">About</a>
		<a class="mobile-menu__link" href="#contact-section">Contact</a>
	</div>
	
	<!--_____________FOOTER_____________-->
	<footer class="footer">
		<ul class="footer-contact-list">

			<li>
				<ul class="footer-contact-list-social">
					
					<li class="footer-contact-list-social-item facebook">
						<a href="https://www.facebook.com/hardtoguessit">
							<span class="fa-stack fa-sm">
	  							<i class="fa fa-square-o fa-stack-2x"></i>
	  							<i class="fa fa-facebook fa-stack-1x"></i>
							</span>
						</a>	
					</li>
					
					<li class="footer-contact-list-social-item twitter">
						<a href="https://twitter.com/hardtoguessit">	
							<span class="fa-stack fa-sm">
	  							<i class="fa fa-square-o fa-stack-2x"></i>
	  							<i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>	
					</li>
					
					<li class="footer-contact-list-social-item mail">
						<a href="mailto:mail@tamasbalint.com">	
							<span class="fa-stack fa-sm">
	  							<i class="fa fa-square-o fa-stack-2x"></i>
	  							<i class="fa fa-envelope fa-stack-1x"></i>
							</span>
						</a>
					</li>
					
					<li class="footer-contact-list-social-item linkedin">
						<a href="https://www.linkedin.com/in/tamasbalint">
							<span class="fa-stack fa-sm">
	  							<i class="fa fa-square-o fa-stack-2x"></i>
	  							<i class="fa fa-linkedin fa-stack-1x"></i>
							</span>
						</a>
					</li>

					<li class="footer-contact-list-social-item free-code-camp">
						<a href="https://www.freecodecamp.com/balinttamas87">
							<span class="fa-stack fa-sm">
	  							<i class="fa fa-square-o fa-stack-2x"></i>
	  							<i class="fa fa-free-code-camp fa-stack-1x"></i>
							</span>
						</a>
					</li>

					<li class="footer-contact-list-social-item github">
						<a href="https://www.github.com/balinttamas87">
							<span class="fa-stack fa-sm">
	  							<i class="fa fa-square-o fa-stack-2x"></i>
	  							<i class="fa fa-github fa-stack-1x"></i>
							</span>
						</a>
					</li>
				</ul>
			</li>
			<li>Tamas Balint</li>
			<li><a class="tel" href="tel:07984305222">07984 305 222</a></li>
			<li><a class="mail" href="mailto:mail@tamasbalint.com">balint.tamas87@gmail.com<a></li>
		</ul>
	</footer>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.4/typed.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.2/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="js/dist/main.min.js"></script>

</body>
</html>





