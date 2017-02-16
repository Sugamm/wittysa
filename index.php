<?php

include 'validation.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WittyFeed | Wittyfeed Student Ambassador</title>
	<meta name="google-site-verification" content="7Yl3RiFWes8Uyu07EpXUU0rPm948NNnxGVlwCDRvDjI" />
	 <meta name="viewport" content="width= device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="nav/css/style.css"> <!-- CSS reset -->
	<link rel="icon" href="http://www.wittyfeed.com/assets/image/favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script  language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"> </script> 
   </head>
<body>
<!-- NAVIGATION BAR -->
<div style="background:#e42c39;">
		<header class="cd-main-header" style="background:#e42c39; font-color:#f31e29;">

						<a class="logo" href="index.php"><img src="img/wsA.png" alt="Logo" style=" max-height:150px; max-width:150px;"></a>
						<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
								<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
						</ul> <!-- cd-header-buttons -->

		</header>
	<nav class="cd-nav " style="background:#e42c39; font-color:#f31e29;">
		<ul id="cd-primary-nav" class="cd-primary-nav ">
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="#skill">Skills</a></li>
			<li><a href="#contact">Contact us</a></li>
			<li><a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a></li>	
		</ul>		
	</nav> <!-- cd-nav -->
	<div id="cd-search" class="cd-search" style="background:#e42c39; font-color:#f31e29;">
		<form>
			<input type="search" placeholder="Search...">
		</form>
	</div>
		<script src="nav/js/jquery-2.1.1.js"></script>
		<script src="nav/js/jquery.mobile.custom.min.js"></script>
		<script src="nav/js/main.js"></script> <!-- Resource jQuery -->
</div>
<main class="cd-main-content">
		<!-- your content here -->
	<div style="min-height: 50px;" align="center">	
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>
				 
			  <!-- Wrapper for slides -->
			  
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="img/1.jpg" alt="user" u="slides" style=" width: 1440px;MAX-height: 500px; overflow: hidden;">
					<div class="carousel-caption">
					    <h1 style="font-size:30px;color:#CCC;"></h1>
					    <p></p>
					</div>
			    </div>
			    <div class="item">
			      <img src="img/2.jpg" alt="img2" u="slides" style=" width: 1440px; MAX-height: 500px; overflow: hidden;">
			      <div class="carousel-caption">
			         <h3></h3>
					    <p></p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="img/3.jpg" alt="" u="slides" style=" width: 1440px; MAX-height: 500px; overflow: hidden;">
			    </div>
			    <span>.</span>	 
			  </div>
			 <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
				    <span class="sr-only">Next</span>
				  </a>
			</div>
		
	</div>
	<div  style="background-color:#ffffff;">
	    <div style="text-align:center; font-family: trebuchet MS; font-weight:900;font-size:20px;padding:;">
	        <div class="jumbotron" >
	            <h1>WITTYFEED STUDENT AMBASSADOR</h1><br>
	            <h2>WHAT THE HACK IS THIS?</h2>
	            <p >_________________</p>
	            <p style="padding:20px;line-height: 130%;">
	            <a href="https:/www.wittyfeed.com">Wittyfeed</a>  presents you 
	            the most awaited campus ambassador program for enthusiastic students.<br>
	             Yes you have heard it right we are recruiting campus ambassadors all over the world. 
	             If you are a passionate student and willing<br> to be part of our epic family, 
	             you are just one step away.</p>
	        </div>		           
	    </div><!-- STYLE  -->
	   
</main>
		<br />

	  <div class="container">
			<div id="skill"  style="font: New Century Schoolbook, serif ;">
		    	<div> 
		        	<div style="text-align:center;font-family:Charcoal;font-weight:600;font-size:20px;padding-bottom:30px;">
		        	 <h2>SKILL IS BETTER THEN STRENGTH</h2>
		        	 <p >________________________</p>
		        	 </div>
		    	 </div>
		    	 <br />
		    	 <div class="row featurette">
				        <div class="col-md-3 col-sm-6">
				        	<div style="text-align:center;">
				                <img src="img/16.jpg" height="168" width="169"><br>
				                <h3 style="padding:15px;font-weight:600;">CONTENT WRITER</h3>
				              	<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">Content Writer</h4>
									      </div>
									      <div class="modal-body" style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									      <p>  Wittyfeed provides the perfect platform and exposure to anyone who is passionate about writing. 
									         Write your content,
									         publish it and let the whole world experience it. Because, there isn’t a better teacher than experience.
									          So why wait? Join 
									        Wittyfeed SA Programme as a Content Writer and explore the world of knowledge and fandom.</p>
									      </div>
									      <div class="modal-footer">
									      	<a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
								
				            </div>
				        </div>
				         <div class="col-md-3 col-sm-6">
				         	<div style="text-align:center;">
				                <img src="img/17.jpg" class="img-circle" height="168" width="169"><br>
				                <h3 style="padding:20px;font-weight: 600;">GRAPHIC DESIGNER</h3>
				                 <!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">Graphic Designer</h4>
									      </div>
									      <div class="modal-body" style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									        Like to play with pictures ? Like to showcase your creativity? Why wait then? 
									        Wittyfeed invites you to showcase your talent. It is going to be beneficial for both of us. 
									        But remember, We at Wittyfeed believe that Experience is the Best Teacher. So why worry, 
									        when you have Witty to showcase your Designing Skills. We surely will help you nurture it. Come, 
									        Join the Wittyfeed Student Ambassador program.
									      </div>
									      <div class="modal-footer">
									        <a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
				            </div>
				        </div>
				         <div class="col-md-3 col-sm-6">
				             <div style="text-align:center;">
					                <img src="img/18.jpg" height="168"  class="img-circle"  width="169"><br>
					                <h3 style="padding:20px;font-weight: 600;">HARDCORE CODER</h3>
					                 <!-- Button trigger modal -->
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">Hardcore Coder</h4>
									      </div>
									      <div class="modal-body"  style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									        Zuckerberg followers out there!! Donot forget that everything he has achieved comes 
									        second to his hardcore coding skills.
											We at  wittyfeed take pleasure in inviting Hardcore and Dynamic Coders. 
											Coding is a world in itself, 
											a world far better and interesting than ours.
											We help you to explore the unexplored parts of coding 
											and help make Wittyfeed better. So why hesitate? Apply Now.
									      </div>
									      <div class="modal-footer">
									      	<a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
				             </div>
				        </div>
				         <div class="col-md-3 col-sm-6">
				             	<div style="text-align:center;">
					                <img src="img/19.jpg" class="img-circle" height="168"  width="169"><br>
					                <h3 style="padding:20px;font-weight: 600;">WITTYFEED LOVERS</h3>
					                 <!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal3">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">Wittyfeed Lovers</h4>
									      </div>
									      <div class="modal-body"  style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									        There is a long story behind it. Before we started wittyfeed.com in October last year,
									         we failed at various attempts of creating similar websites. The whole idea of having a 
									         content website and making the content go viral on social media originated in our mind in 
									         early 2012 when one of the  Facebook page we created, out of pure interest went viral. This 
									         Facebook page (Amazing Things In The World) introduced us to the possibilities of social media 
									         and gave us an idea of what could we achieve if we do it properly. From there on we started and 
									         failed with 2-3 different website in the same industry. We were able to generate traffic, but we
									          were not able to generate the brand value that should come with it. With WittyFeed, we have struck 
									          the right chords in almost all areas. We have been able to rank among the top 800 websites in India 
									          and 5000 website globally within six months of our launch. We have been recognized by Facebook and got
									           a verified badge recently, and 
									        we have generated much more traffic that we were to generate on any of the earlier website we had.
									      </div>
									      <div class="modal-footer">
									      	<a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
 									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
				                </div>
				        </div>
		        </div>	        
			 </div><br /><br />
			 <div style="max-width:1440px;font:New Century Schoolbook, serif ;">
			 	<div class="row featurette">
					<div class="col-md-3 col-sm-6">
						<div style="text-align:center;">
							<img src="img/20.jpg " class="img-circle"  height="168" width="169"><br>
							<h3 style="padding:20px;font-weight: 600;"><strong>UI/UX DESIGN</strong></h3>
							 <!-- Button trigger modal -->
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal7">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">UI/UX Design</h4>
									      </div>
									      <div class="modal-body"  style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									        Think of a world where every single machine is user friendly, working on gestures and voice commands. 
									        Doesn't the imagination feel bliss. We present you an oppurtunity to make Wittyfeed even better, 
									        so that we can be loved even more. And trust me ! Its gonna be very useful for you. Because you know what? 
									        Experience Counts. Dont waste your time. Come, Join us at the UI/UX Design domain. Lets make Wittyfeed better.
									      </div>
									      <div class="modal-footer">
									      	<a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
						</div>
					</div><br />
				    <div class="col-md-3 col-sm-6">
				     	<div style="text-align:center;">
				            <img src="img/22.jpg" class="img-circle"  height="168" width="169"><br>
				            <h3 style="padding:20px;font-weight: 600;">LEADERSHIP ROLES</h3>
				             <!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">Leadership Roles</h4>
									      </div>
									      <div class="modal-body"  style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									        A TEAM IS INCOMPLETE WITHOUT A LEADER. Showcase your Leadership Skills. 
									        Guide people, increase your fandom and as a result Wittyfeed grows. Yeah!
									         That's right.  We at Wittyfeed offer you a chance to be a part of Wittyfeed Student 
									         Ambassador Programme and most importantly a chance to be a leader. Always remember -
									          Team Is What Its Leader Is. And Yeah!! Experience Matters... We help you grow and so do you. 
									        So, feel free and join Wittyfeed Student Ambassador Programme.
									      </div>
									      <div class="modal-footer">
									    	<a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
				        </div>
				   	</div>
			        <div class="col-md-3 col-sm-6 col-xm-6">
			         <div style="text-align:center;">
			            <img src="img/23.jpg" class="img-circle"  height="168"    width="169"><br>
			            <h3 style="padding:20px;font-weight: 600;">CREATIVE AND ARTISTIC MIND</h3>
			             <!-- Button trigger modal -->
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">Creative and Artistic Mind </h4>
									      </div>
									      <div class="modal-body"  style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									       You know the best ideas and plans come from a mind which is Creative and Artistic.
									        If you think you have a mind which is Creative and Artistic,then Wittyfeed invites you to its Student 
									        Ambassador Programme. Help us get better and attract more traffic with your ideas, we help you get recognition. 
									        Because never forget that we at Wittyfeed believe that Experience Is The Best Teacher. 
									       Feel free and join the Wittyfeed Student Ambassador Programme and you never know, you may be the next Da Vinci.
									      </div>
									      <div class="modal-footer">
									      <a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
			          </div>
			        </div>
			        <div class="col-md-3 col-sm-6">
				         <div style="text-align:center;">
				            <img src="img/24.jpg" class="img-circle"  height="168"  width="169"><br>
				            <h3 style="padding:20px;font-weight: 600;">MARKETING AND STATISTICAL ENTHUSIASTIC</h3>
				             <!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal6">
								  More Info
								</button>
								<!-- Modal -->
									<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel" style="font-family:courier new;font-weight: 600;font-size:20px;line-height:30px">Marketing And Statistical Enthusiastic</h4>
									      </div>
									      <div class="modal-body"  style="font-family:trebuchet MS;font-size:18px;line-height:30px;">
									        Love marketing things? Fascinated about business? Then trust me, 
									        you are at the right place now. Wittyfeed invites the Marketing and Business minds 
									        to join its Student Ambassador Programme. A perfect place to nurture and hone your skills. 
									        With the growing virality of Wittyfeed, your marketing skills and management skills will s
									        urely add to both of ours benefits. So, Hurry up and join the Wittyfeed Student Ambassador 
									        Programme.Love marketing things? Fascinated about business? Then trust me, you are at the 
									        right place now. Wittyfeed invites the Marketing and Business minds to join its Student Ambassador 
									        Programme. A perfect place to nurture and hone your skills. With the growing virality of Wittyfeed, 
									        your marketing skills and management skills will surely add to both of ours benefits. 
									        So, Hurry up and join the Wittyfeed Student Ambassador Programme.
									      </div>
									      <div class="modal-footer">
									      	 <a href="apply.php" ><button class="btn btn-warning" >Apply Now</button></a>
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
				         </div>
			        </div>
		        </div>	    
			</div>

		</div>


		<hr class="featurette-divider"> 

		
	    <div  style="text-align:center; font-family: Charcoal;font-weight:600;font-size:20px;padding:;">
	       	 <div class="jumbotron">
	            <h2>&#x1f518; WHY SHOULD I JOIN??? AND WHAT I GET BEING A STUDENT AMBASSADOR ?</h2>
	           		 <p >________________________</p>
	           		 <p style="padding:20px;line-height:130%;">
	          		 Don’t worry each and every single contribution matters to us,
	          		  you will be rewarded with loads of swags, opportunities,<br> 
	          		  learning experience and what not!! So what are you waiting for, 
	          		  apply as a Wittyfeed student ambassador and <br> the following 
	          		  privileges will be provided to you <a href="wsa.php">see more...</a> </p>
	         </div>	               
	    </div>		      
	</div>

		        

		    
<div style="background-color:#333333;">
	 <div class="container" class="row">
      	<div id="contact" class="col-md-6">
         	<div style="color:#ffffff;">
		        	<h1 style="font-size:40px;padding:30px;text-align:center;color:#f31e29;">Contact us</h1>
		           <form method="post" action="#">
		           <div class="row featurette">
			           <div class="form-group">
			           		<div class="col-md-4 form-group">
			           			<label for="name" style="font-size:20px;padding:5px;">Name:</label><br>
			           			<input class="form-control" type="text" id="name" name="name" placeholder="Full name" value="<?php echo $name;?>">
			           			<span class="error"><?php echo $namerr;?></span>
			           		</div>
			           		<div class="col-md-4 form-group">
			           			<label for="email" style="font-size:20px;padding:5px;">E-mail:</label><br>
			           			<input class="form-control" type="email" id="email" name="email" placeholder="Email address" value="<?php echo $email;?>">
			           			<span class="error"><?php echo $emailerr;?></span>
			           		</div>
			           		<div class="col-md-4 form-group">
			           			<label  for="number" style="font-size:20px;padding:5px;">Contact No.</label><br>
			           			<input class="form-control" type="tel" placeholder="Contact number" name="contact" value="<?php echo $contact;?>" min="0">
			           			<span class="error"><?php echo $contacterr;?></span>
			           		</div>
			           	</div>
		           	</div>
		           	
		           		<div class="form-group">
							  <label for="message" style="font-size:20px;padding:5px;">Message:</label><br>
							  <textarea class="form-control" rows="5"  id="message" name="message" placeholder="Enter your message"></textarea>
							  <span class="error"><?php echo $messagerr;?></span>
						</div>
						<div>
						
		           		<input style="float:right;"  type="submit" id="submit" onclick="alert();" name="submit" class="btn btn-success btn-lg">
		           		<input style="float:right;margin-right:5px;" type="reset" value="Clear" class="btn btn-success btn-lg">

		           		</div>

		           </form>
		        
		        </div>	
		        <p>___________</p> 
       </div><br>
        <div class="col-md-6" style="color:#ffffff;">
        <h1 style="font-size:40px; padding:30px; text-align:center;color:#f31e29;">Location</h1>
        
          <address  style="line-height:20px;text-align:center;">
          <h3 style="margin:5px;">WITTYFEED</h3>
         616, Shekhar Central, A.B. Road, Palasia Square,<br />

		Indore, Madhya Pradesh India - 452001<br />
      
          </address><br />
          <ul  style="line-height:20px;text-align:center;">
            <li><strong class="title">Tel:</strong>
              (+91) 731 - 4206247</li>
            <br/>
            <li><strong class="title">Career :</strong>
              <a href="#contact"> hr@vatsana.co</a></li>
         <!--    <li><strong class="title">Follow Us</strong>
              </li>
              <a href="#contact"><img src="/img/fb.png"></a> -->
          </ul>
        </div>
      </div>	<br><br>
		           
        
    </div>

 
		 <div style="background-color:#333333; color:#ffffff; padding: 25px 0px;">
		       <div class="container">
			       <div class="row" >
			       			<hr>
			       		<div class="col-md-11  col-xs-10" ><p>&copy; <a href="http://www.wittyfeed.com/">WITTYFEED</a>  
			       		- <?php echo date('Y');?>  &middot; Sugam</p>
			       		</div>
			       		
						<div class="col-md-1 col-xs-2"><a href="#top" class="topOfPage">
							<span style="font-size:40px">&#128285;</span></a>
						</div>
			            
			        </div>	
		        </div>
        </div>      		



</body>
</html>