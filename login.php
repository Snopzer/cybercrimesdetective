<?php
	ob_start();
	session_start();
	include_once('include/config.php'); 
	// include_once('include/checklogin.php');
?>	
<!DOCTYPE HTML>
<html ng-app="myApp">
	<head>
		<title>Cybercrimesdetective.com Cyber Crimes - Prevention, Reporting &amp; Detection.</title>
		<meta charset="utf-8" />
		<meta name="description" content="www.cybercrimesdetective.com Cyber Crimes - Prevention, Reporting &amp; Detection.">
		<meta name="keywords" content="www.cybercrimesdetective.com Cyber Crimes - Prevention, Reporting &amp; Detection.">
		<meta name="author" content="B. Ravi Kumar Reddy">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<style>
			* { box-sizing:border-box; }
			
			/* basic stylings ------------------------------------------ */
			
			h2 		 { 
			text-align:center; 
			margin-bottom:50px; 
			}
			h2 small { 
			font-weight:normal; 
			color:#888; 
			display:block; 
			}
			.footer 	{ text-align:center; }
			.footer a  { color:#53B2C8; }
			
			/* form starting stylings ------------------------------- */
			.group 			  { 
			position:relative; 
			margin-bottom:15px;
			max-width: 30 %;
			margin-left:0px;
			}
			input 				{
			font-size:18px;
			padding:10px 10px 10px 5px;
			display:block;
			width:auto;
			border:none;
			border-bottom:1px solid #757575;
			}
			input:focus 		{ outline:none; }
			
			/* LABEL ======================================= */
			label 				 {
			color:#999; 
			font-size:18px;
			font-weight:normal;
			position:absolute;
			pointer-events:none;
			left:5px;
			top:10px;
			transition:0.2s ease all; 
			-moz-transition:0.2s ease all; 
			-webkit-transition:0.2s ease all;
			}
			
			/* active state */
			input:focus ~ label, input:valid ~ label 		{
			top:-20px;
			font-size:14px;
			color:#5264AE;
			}
			
			/* BOTTOM BARS ================================= */
			.bar 	{ position:relative; display:block; width:300px; }
			.bar:before, .bar:after 	{
			content:'';
			height:2px; 
			width:0;
			bottom:1px; 
			position:absolute;
			background:#5264AE; 
			transition:0.2s ease all; 
			-moz-transition:0.2s ease all; 
			-webkit-transition:0.2s ease all;
			}
			.bar:before {
			left:50%;
			}
			.bar:after {
			right:50%; 
			}
			
			/* active state */
			input:focus ~ .bar:before, input:focus ~ .bar:after {
			width:50%;
			}
			
			/* HIGHLIGHTER ================================== */
			.highlight {
			position:absolute;
			height:60%; 
			width:100px; 
			top:25%; 
			left:0;
			pointer-events:none;
			opacity:0.5;
			}
			
			/* active state */
			input:focus ~ .highlight {
			-webkit-animation:inputHighlighter 0.3s ease;
			-moz-animation:inputHighlighter 0.3s ease;
			animation:inputHighlighter 0.3s ease;
			}
			
			/* ANIMATIONS ================ */
			@-webkit-keyframes inputHighlighter {
			from { background:#5264AE; }
			to 	{ width:0; background:transparent; }
			}
			@-moz-keyframes inputHighlighter {
			from { background:#5264AE; }
			to 	{ width:0; background:transparent; }
			}
			@keyframes inputHighlighter {
			from { background:#5264AE; }
			to 	{ width:0; background:transparent; }
			}
		</style>
	</head>
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
						</div>
						<div class="4u 12u(mobile) important(mobile)">
							<article class="box post">
								<section>
									<header>
										<h3 class="blink-tag center">Cyber Crimes - <span class="green">Prevention</span>, <span class="orange">Reporting </span>&amp; <span class="red">Detection</span>.</h3>
									</header>
									<header>
										<h3 class="center">LOGIN</h3>
									</header>
									<div id="success_message" class="alert alert-success" style="display:none;"><strong>Success!</strong> Indicates a successful  </div>
									<div id="warning_message"  class="alert alert-danger" style="display:none;"> <strong>Danger!</strong> Indicates a dangerous </div>
									<form id="loginForm">
										<div class="group">      
											<input type="text" name="phone" id="phone"  required>
											<label>PHONE NUMBER</label>
										</div>
										<a href="register.php">Register Now</a>
										<div class="group" style="text-align: center;">      
											<input type="submit">
										</div>
									</form>
									
								</section>
							</article>
							
						</div>
						<div class="4u 12u(mobile)">
							
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
		<link rel="stylesheet" href="ngDialog-master/css/ngDialog.min.css">
		<link rel="stylesheet" href="ngDialog-master/css/ngDialog-theme-default.min.css">
		<script src="ngDialog-master/js/ngDialog.min.js"></script>
	</body>
</html>


<script type="text/javascript" language="JavaScript">
	$('document').ready(function(){
		$("#success_message").hide();
		$("#warning_message").hide();
		
		$("#loginForm").submit(function () { 
			
			$("#success_message").hide();
			$("#warning_message").hide();
			
			var phone = $("#phone").val();
			if(phone=='') {
				$("#phone").css({"border-style": "solid", "border-color": "red"});
				$("#warning_message").show();
				$("#warning_message").html('Please Enter Phone Number');
				$("#phone").focus();
				return false;
				} else {
				$("#phone").css({"border-style": "solid", "border-color": "#E9E9E9"});
			}
			$.ajax({
				url: "controller.php",
				method: "POST",
				data: { loginData : $("#loginForm").serialize(), 'action':'login'},
				dataType: "json",
				success: function (response) {
					if(response["success"]==true)
					{
						window.location = '<?php echo OFFICER_URL; ?>';
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


<script type="text/javascript">
	var app = angular.module('myApp', ['ngDialog']);
	
	app.controller('MainCtrl', function ($scope, ngDialog) {
		$scope.clickToOpen = function () {
			ngDialog.open({
				
				template:'<div class="ngdialog-message">'+
				'<h3>Andhra Pradesh</h3>'+
				'<p> </p>'+
				'<p>Address : Cyber Crime Police Station,<br /> 3rd Floor, CID Building, <br />AC Guards,<br /> Hyderabad -500 004</p>'+
				'</div>'+
				'<div class="ngdialog-buttons"><button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="closeThisDialog()">Close</button></div>',
				plain: true,
				className: 'ngdialog-theme-default'
			}); 
			
		};
	});
	
	
	$("#statesList").hide();
	$("#showStatesList").on("click",function(){
		$("#statesList").show();
	});
	
</script>				