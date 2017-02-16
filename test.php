<?php

include 'validation.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	 <meta name="viewport" content="width= device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="nav/css/style.css"> <!-- CSS reset -->
	<link rel="icon" href="http://www.wittyfeed.com/assets/image/favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script  language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"> </script> 
    <style type="text/css">
    .error{
    	color: red;
       }
    </style>
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
			<li><img src="http://dioxaz.free.fr/download/art/betaversion.png" style=" max-height:80px; max-width:80px;"></li>
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
<main>
		<!-- your content here -->
	<div style="min-height: 50px;">	
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
	    <div style="text-align:center; font-family: Charcoal;font-weight:600;font-size:20px;padding:;">
	        <div class="jumbotron" >
	            <h1>WITTYFEED STUDENT AMBASSADOR</h1><br>
	            <h2>WHAT THE HACK IS THIS?</h2>
	            <p >_________________</p>
	            <p style="padding:20px;line-height: 130%;">
	            <a href="https:/www.wittyfeed.com">Wittyfeed</a> present you 
	            the most awaited campus ambassador program for enthusiastic students.<br>
	             Yes you have heard it right we are recruiting campus ambassadors all over the world. 
	             If you are a passionate student and willing<br> to be part of our epic family, 
	             you are just one step away.</p>
	        </div>		           
	    </div><!-- STYLE  -->
	   

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
									        <h4 class="modal-title" id="myModalLabel">Content Writer</h4>
									      </div>
									      <div class="modal-body">
									        this is the body..
									      </div>
									      <div class="modal-footer">
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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Graphic Designer</h4>
									      </div>
									      <div class="modal-body">
									        this is body...
									      </div>
									      <div class="modal-footer">
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
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Hardcore Coder</h4>
									      </div>
									      <div class="modal-body">
									        this is body...
									      </div>
									      <div class="modal-footer">
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
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Wittyfeed Lovers</h4>
									      </div>
									      <div class="modal-body">
									        this is body...
									      </div>
									      <div class="modal-footer">
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
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">UI/UX Design</h4>
									      </div>
									      <div class="modal-body">
									        this is body...
									      </div>
									      <div class="modal-footer">
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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Leadership Roles</h4>
									      </div>
									      <div class="modal-body">
									        this is body...
									      </div>
									      <div class="modal-footer">
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
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
								  More Info
								</button><br><br>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Creative and Artistic Mind </h4>
									      </div>
									      <div class="modal-body">
									        this is body...
									      </div>
									      <div class="modal-footer">
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
				            <h3 style="padding:20px;font-weight: 600;">MARKETING AND STATISTICAL ENTHUDIASTIC</h3>
				             <!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
								  More Info
								</button>
								<!-- Modal -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Marketing And Statistical Enthudiastic</h4>
									      </div>
									      <div class="modal-body">
									        this is body...
									      </div>
									      <div class="modal-footer">
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
</main>
		        

		    
<div style="background-color:#333333;">
	 <div class="container" class="row">
      	<div id="contact" class="col-md-6">
         	<div style="color:#ffffff;">
		        	<h1 style="font-size:40px;padding:30px;text-align:center;color:#f31e29;">Contact us</h1>
		           <form method="post" action="#">
		           <div class="row featurette">
			           <div class="form-group">
			           <?php 
			           	$succ = isset($_POST['succ'])?$_POST['succ']:'';
			           echo $succ;?>
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
			           			<input class="form-control" type="text" maxlength="10" id="contact" name="contact" placeholder="Contact number" value="<?php echo $contact;?>" min="0">
			           			<span class="error"><?php echo $contacterr;?></span>
			           		</div>
			           	</div>
		           	</div>
		           	
		           		<div class="form-group">
							  <label for="message" style="font-size:20px;padding:5px;">Message:</label><br>
							  <textarea class="form-control" rows="5"  id="message" name="message" placeholder="Enter your message" value="<?php echo $message;?>"></textarea>
							  <span class="error"><?php echo $messagerr;?></span>
						</div>
						<div>
						
		           		<input style="float:right;"  type="submit" id="submit" name="submit" class="btn btn-success btn-lg">
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

		 <br />

		Career : hr@vatsana.co<br />
          
          </address><br />
          <ul  style="line-height:20px;text-align:center;">
            <li><strong class="title">Tel:</strong>
              (+91) 731 - 4206247</li>
            <br/>
           
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