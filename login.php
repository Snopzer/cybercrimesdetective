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
										<label>PHONE NUMBER</label>
										<div class="group">      
											<input type="text" name="phone" id="phone"  required>
										</div>
										<a href="register.php">Register Now</a>
										<div class="group" style="text-align: center;">      
											<input type="submit" value="Login">
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