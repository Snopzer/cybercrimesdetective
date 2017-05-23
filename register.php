<?php
	ob_start();
	session_start();
	include_once('include/config.php'); 
	include_once('include/header.php'); 
?>	
<body class="left-sidebar">
	<div id="page-wrapper">
		
		<!-- Header -->
		<!--<div id="header-wrapper">
			<div id="header">
			
			<h1><a href="index.html">cybercrimesdetective.com</a></h1>
			<h3 class="blink-tag">Cyber Crimes - <span class="green">Prevention</span>, <span class="orange">Reporting</span>&amp; <span class="red">Detection</span>.</h3>
			
			</div>
		</div>-->
		
		<!-- Main -->
		<div id="main-wrapper">
			<div class="container site-container">
				<div class="eh row">
					<div class="4u 12u(mobile)">
						<!--<section class="box" ng-controller="MainCtrl">
							<header>
							<h3><a id="showStatesList">Cyber Crime Units / Police Stations / Cells in India</a></h3>
							</header>
							<p>The victim of cyber crime can approach a local police station whichever near to him (residence) and seek help by getting a case registered under Information Technology Act, 2000 and also under other relevant statues like Indian Penal code.</p>
							<p>The victim of cyber crime can also approach directly Cyber Crime Units / Police Stations / cells that are operational Indian States and UTs.</p><br />
							<ul class="dates" id="statesList" style="display:none;">
							<li ng-click="clickToOpen();">Andhra Pradesh</li>
							<li class="showDetails">Arunachal Pradesh</li>
							<li>Assam</li>
							<li>Bihar</li>
							<li>Chhattisgarh</li>
							<li>Goa</li>
							<li>Gujarat</li>
							<li>Haryana</li>
							<li>Himachal Pradesh </li>
							<li>Jammu and Kashmir </li>
							<li>Jharkhand</li>
							<li>Karnataka</li>
							<li>Kerala</li>
							<li>Madhya Pradesh</li>
							<li>Maharashtra</li>
							<li>Manipur</li>
							<li>Meghalaya</li>
							<li>Mizoram</li>
							<li>Nagaland</li>
							<li>Odisha</li>
							<li>Punjab</li>
							<li>Rajasthan</li>
							<li>Sikkim</li>
							<li>Tamil Nadu</li>
							<li>Telangana</li>
							<li>Tripura</li>
							<li>Uttar Pradesh</li>
							<li>Uttarakhand</li>
							<li>West Bengal</li>
							</ul>
							<!--<h3>Andhra Pradesh:</h3>
							<ul class="contact">
							
							<p> 
							Address : Cyber Crime Police Station,<br /> 
							3rd Floor, CID Building, <br />
							AC Guards,<br /> 
							Hyderabad -500 004.<br />
							</p>
							
							</ul>
						</section>-->
						
					</div>
					<div class="4u 12u(mobile) important(mobile)">
						
						<!-- Content -->
						<article class="box post">
							<section>
								<header>
									<h3 class="blink-tag center">Cyber Crimes - <span class="green">Prevention</span>, <span class="orange">Reporting </span>&amp; <span class="red">Detection</span>.</h3>
								</header>
								<header>
									<h3 class="center">Register</h3>
								</header>
								<ul style="list-style: none; margin-top: 10px;">
									<!--<li>
										<div class="col-sm-4">
										<div class="input-group" >
										<div class="col-sm-2">	
										<span class="input-group-addon" id="basic-addon1"><strong>Name :</strong></span></div>
										<div class="col-sm-2">
										<input type="text" class="form-control" placeholder="FULL Name" aria-describedby="basic-addon1">
										</div>
										</div>
										</div>
										</li>
										
										
										<li>
										<div class="input-group" >
										<span class="input-group-addon" id="basic-addon1"><strong>Designation :</strong></span>
										<input type="text" class="form-control" placeholder="Designation" aria-describedby="basic-addon1" style="margin-left: 12%;">
										</div>
										</li>
										
										<li>
										<div class="input-group" >
										<span class="input-group-addon" id="basic-addon1"><strong>place of posting :</strong></span>
										<input type="text" class="form-control" placeholder="place of posting" aria-describedby="basic-addon1" style="margin-left: 5%;">
										</div>
										</li>
										
										<li>
										<div class="input-group" >
										<span class="input-group-addon" id="basic-addon1"><strong>e-mail ID :</strong></span>
										<input type="text" class="form-control" placeholder="e-mail ID" aria-describedby="basic-addon1" style="margin-left: 18%;">
										</div>
										</li>
										<li>
										<div class="input-group" >
										<span class="input-group-addon" id="basic-addon1"><strong>Phone number :</strong></span>
										<input type="text" class="form-control" placeholder="Phone number " aria-describedby="basic-addon1" style="margin-left: 7%;">
										</div>
									</li>-->
									<div id="success_message" class="alert alert-success" style="display:none;"><strong>Success!</strong> Indicates a successful  </div>
									<div id="warning_message"  class="alert alert-danger" style="display:none;"> <strong>Danger!</strong> Indicates a dangerous </div>
									<form id="SignUpForm">	
										<div class="group">  
											<label>Name</label>
											<input type="text" name="name"  id="name"  required>
											
										</div>
										
										<div class="group">  
											<label>Email</label>
											<input type="text" name="email"  id="email"  required>
											
										</div>
										<div class="group"> 
											<label>Designation</label>
											<input type="text" name="designation"  id="designation"  required>
											
										</div>
										<div class="group">  
											<label>place of posting</label>
											<input type="text" name="place_of_posting"  id="place_of_posting"  required>
											
										</div>
										<div class="group"> 
											<label>Phone number</label>
											<input type="text" name="phone"  id="phone"  required>
											
										</div>
										<a href="login.php" class="center">Login Here .?</a>
										<div style="text-align:center;">
											<input  type="submit" value="Register" >
										</div>
									</form>
									
								</ul>
								
							</section>
						</article>
						
					</div>
					<div class="4u 12u(mobile)">
						<!--<section class="box">
							
							<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
							<header>
							<h3 class="center">FORUM</h3>
							<h3 class="center">COMING SOON</h3>
							</header>
							
						</section>-->
						
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<!--<div id="footer-wrapper">
			<section id="footer" class="container">
			<div class="row">
			<div class="12u">
			<div id="copyright">
			<ul class="links">
			<li>&copy; 2017 Cybercrimesdetective.com. All rights reserved.</li>
			</ul>
			</div>
			
			</div>
			</div>
			</section>
		</div>-->
	</div>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
	rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-viewport.min.js"></script>
	<script src="assets/js/util.js"></script>
</body>
</html>


<script type="text/javascript" language="JavaScript">
	$('document').ready(function(){
		$("#success_message").hide();
		$("#warning_message").hide();
		$("#SignUpForm").submit(function () { 
			
			$("#success_message").hide();
			$("#warning_message").hide();
			
			
			var email = $("#email").val();
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if((email=='') || (!regex.test(email)))
			{
				$("#email").css({"border-style": "solid", "border-color": "red"});
				$("#warning_message").show();
				$("#warning_message").html('Please Enter Valid Email Address');
				$("#email").focus();
				return false;
				} else {
				$("#email").css({"border-style": "solid", "border-color": "#E9E9E9"});
			}
			var phone = $("#phone").val();
			var phoneregex = /^([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})+$/;
			if((phone=='') || (!phoneregex.test(phone)))
			{
				$("#phone").css({"border-style": "solid", "border-color": "red"});
				$("#warning_message").show();
				$("#warning_message").html('Please Enter Valid Phone Number');
				$("#phone").focus();
				return false;
				} else {
				$("#phone").css({"border-style": "solid", "border-color": "#E9E9E9"});
			}
			$.ajax({
				url: "controller.php",
				method: "POST",
				data: { singupData : $("#SignUpForm").serialize(), 'action':'signup'},
				dataType: "json",
				success: function (response) {
					if(response["success"]==true)
					{
						$("#success_message").show();
						$("#success_message").html(response["message"]);
						}else{
						$("#warning_message").show();
						$("#warning_message").html(response["message"]);
					}
					
				},
				error: function (request, status, error) {
					$("#warning_message").show();
					$("#warning_message").html("OOPS! Something Went Wrong Please Try After Sometime!");
				}
			});
			return false;
			
		});
	});
	
</script>


