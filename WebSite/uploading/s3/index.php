<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>User Medusa.pys</title>
		<link rel="stylesheet" href="css/flexboxgrid.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<!--Header-->
		<header id="main-header"> 
			<div class="container">
				<div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle- md middle-lg">
					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
						<h1><span class="primary-text">Medusa</span>.pys</h1>
					</div>
					<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
						<nav id="navbar">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="provider.html">Provider</a></li>
								<li class="current"><a href="user.html">User</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="login.html">Login</a></li>
							</ul>
						</nav>						
					</div>
				</div>
			</div>			
		</header>
	
		<section id="subheader">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>User</h1>						
					</div>					
				</div>				
			</div>			
		</section>

	
		<!--user uploads multiple files, add error ta -->
		<section id="multi-upload">
			<form action="./upload-form.php" method="post" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Click to Upload" name="submit">
			</form>
		</section>	

		<!--upload a single file-->
		<section id="single-upload">
			<div class="container">
				<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-lg">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h2><span class="primary-text">Choice 2:</span> Let us segment for you!</h2>
						<p>Please Upload Your File Here:</p>
						<form id="single-upload-place" enctype="multipart/form-data" method="post" action="upload-form.php">
							<input type="file" name="fileToUpload" id="fileToUpload" onchange="fileSelected();"/>
						</form>	
						<button type="sumbit">Upload</button>
						<br>
						<br>
						<br>												
					</div>
				</div>
			</div>
		</section>	


		

		<!--Project-->
		<section id="project">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h4>Contact Us</h4>
						<ul>
							<li><i class="fa fa-phone"></i> (233)518-5918</li>
							<li><i class="fa fa-envelope"></i> support@medusa.test</li> 
							<li><i class="fa fa-map"></i> 8 St Mary's St, Boston, MA 02215</li>  
						</ul>						
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h4>About Us</h4>
						<p>This is the coolest project you've ever heard!</p>				
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h4>Support Us</h4>
						<ul>
							<li><i class="fa fa-paypal"></i> getrich@gmail.com</li>  
						</ul>			
					</div>
				</div>				
			</div>
		</section>

		<!--footer-->
		<footer id="main-footer">
			<div class="container">
				<div class="row center-xs center-sm center-md center-lg">
					<p>Copyright &copy; 2017  |  Medusa.pys</p>
				</div>
			</div>
		</footer>




	</body>