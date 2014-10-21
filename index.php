<!DOCTYPE html>
<html >
  <head>
    <link rel="stylesheet" type="text/css" href="custom.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="script.js"></script>

  </head>	
  <body>	
    <?php include 'left_bar.php'; ?>
	<?php include 'right_bar.php'; ?>
	<div class="content_wrapper">
	  <div class="content">
		<div class="panel" id="home">
			<div id="bookmark">
				  <div id="profile-pic">
					<img src="images/profile_pic.png">
				  </div>
			</div>  
			<div class="home-content">
				
			 <div id="hero-text">Welcome to My Portfolio</div>
			 <br><br>During my last quarter in college, none of the career possibilities of an econ grad interested me. 
			 I spent a month aimlessly looking for possible leads to a more <span id="ital-grey">interesting life</span>.
			 <br><br> Then I got exposed to some really <a href="#"><span id="big-yellow">AWESOME SITES</span></a>.
			 <br><br>As an econ major with no programming or web dev experience, I immediately got to work.
			 I know there's a lot still to learn. But hey, when you start from 0, you can only get better. 
			 <br><br>On the <span style="color:white;">left navbar</span> are a few of my current pet projects.
			</div>  
		 </div>
		 <div class="panel" id="guiwallet">
		    <div class="panel-content">	
			  <div class="previews_wrapper">
			    <br><br>
			    <div class="box" id="box100"><img src="images/guiwallet_1.png"></div><br>
				<div class="hero_title">GuiWallet</div>
			    <div class="description">Welcome to my most recent project. So far, a mock up of what the 
				  app vaguely looks like and how it works has been designed. Similar to Google's Wallet and Apple Pay, 
				  GuiWallet touts digital wallet convenience with an added bonus: a way to merge friends into bill payment groups.
				  <br><br>
				  My current team(partner + I) is currently working on an android prototype. Bombs away!
				
				How it works on the customer side: Users upload either a "wallet" information into the app. When it comes to paying bills, users may select one of several options(either pay total, split bill, or custom). 
				Users may search for peers using NFC or P2P wifi to merge them to a single bill and the app performs all the transactions
				through api calls to the server.
				<br><br>
				A few concept shots. Got the ui running on Android Studio:</div>
				<br>Customer Side:<br><br>
				<div class="box" id="box100"><img src="images/guiwallet_demo1.png"></div>
				<br>Merchant Side:<br><br>
				<div class="box" id="box100"><img src="images/guiwallet_demo2.png"></div>
			  </div>
			</div> 
		 </div>
			
		 <div class="panel" id="odysey">
		    <div class="panel-content">	
			 <div class="previews_wrapper">
			    <br><br>
				<div class="box" id="box100"><img src="images/odysey_long.png"></div>
				 <div class="hero_title">ODYSEY: Future of space exploration = space tourism<br>
				 </div>
				 <div class="description">Web Mockup of potential space tourism site.
				 <a href="sites/odysey/index.html">Click to visit site</a><br><br>
				 I was really amazed my first time coming across the jQuery's "Parallax" effect. My first attempt at  creating it wasn't successful. 
				 My second attempt proved fruitful but I didn't realize that the effect made mobile work too hard. 
				 <br><br>Third and final attempt(for now): Allow parallax to work its magic for large devices and use jQuery to check and disable for smaller devices.
				 <br><br>Desktop Screenshots: </div>
			    <div class="go_link"></div>
			    <div class="box" id="box100"><img src="images/odysey2.png"></div>
				<div class="description"><br><br>Company description is modelled after SpaceX's. I added "scientific" measurements to space shuttle graphic just for a bit of cool flavor.<br></div>
				<div class="box" id="box100"><img src="images/odysey3.png"></div>
				<div class="description"><br>Timeline and program specs added for the credibility factor.
				<br><br>It's important for every company to be able to reinforce their story with facts.				</div>
				<br>
				Mobile Screenshots:<br><br>
				<div class="box" id="box30"><img src="images/odysey_short1.png"></div> 
				<div class="box" id="box30"><img src="images/odysey_short2.png"></div>
				<div class="box" id="box30"><img src="images/odysey_short3.png"></div>
			 </div>
			</div>		
		  </div>
			
		  <div class="panel" id="piefactory">
		    <div class="panel-content">	
			  <div class="hero_title">PIE FACTORY: <a href="sites/piefactory/index.html">Click to visit site</a></div>
			  <div class="go_link"></div>
			  <div class="previews_wrapper">
			    <div class="box" id="box100"><img src="images/pie_long.png"></div>
				<div class="description"><br>Pies pies pies PIESS!!<br><br>
				 A concept I played around with was the "heaving pie in faces" concept.
				 Meant to be interactive(I have yet to activate the clickable links to featured pie pages), 
				 the "pie factory" concept is meant to be frank and in your face bold with..ahem...pies.
				 <br><br>
				</div>
				<div class="box" id="box100"><img src="images/pie3.png"></div>
				<div class="description"><br>Tablet shot of home page:</div>
				<div class="box" id="box70" ><img src="images/pie1.png"></div>
				<div class="description"><br>Tablet shot with menu:</div>
				<div class="box" id="box70"><img src="images/pie4.png"></div>
				
			  </div>	
			</div>  
		  </div>
			
		  <div class="panel" id="stgrammercy">
		     <div class="panel-content">	
			  <div class="hero_title">St. GRAMMERCY: <a href="http://stgrammercy.com">Click to visit site</a></div>
			  <div class="description">One of my first few projects. It was my first time working with a Drupal CMS. 
			  It took a while for me to figure out where everything was. My personal fav part: customizing the css.</div>
			  <div class="previews_wrapper">
			    <div class="box" id="box100" ><img src="images/stgram_long.png"></div>
				<div class="description">Blog: Explore</div>
				<div class="box" id="box100" ><img src="images/stgram_long2.png"></div><br>
				<div class="description">Product Gallery</div>
				<div class="box" id="box100"><img src="images/stgram2.png"></div><br>
				 <div class="description">Mobile Views:</div>
				 <div class="box" id="box30"><img src="images/stgram_short1.png"></div>
				 <div class="box" id="box30"><img src="images/stgram_short2.png"></div>
				 <div class="box" id="box30"><img src="images/stgram_short3.png"></div>
		      </div>
		    </div>
		  </div>
		  <div class="panel" id="oaktree">
			 <div class="panel-content">	
			  <div class="previews_wrapper"> 
				<div class="box" id="box100" ><img src="images/oaktree_long.png"></div>
				<div class="hero_title">OAKTREE: A restaurant concept site.</div>
				<div class="description">One of my first "mock" sites built on php modules. Of course, I used my own images of Westwood's 800 Degrees</div>
				<br><a href="sites/oaktree/index.php">Click to visit site</a><br><br>
				<div class="box" id="box30"><img src="images/oaktree1.png"></div>
				<div class="box" id="box30"><img src="images/oaktree2.png"></div>
				
				<div class="box" id="box30"><img src="images/oaktree4.png"></div>
			  </div>
			</div>  
		  </div>	
		  
	  </div>	  
	</div>
	
  </body>
</html>
