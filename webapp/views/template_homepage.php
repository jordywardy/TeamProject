<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<div align = "center">
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $title;?>">
<meta name="author" content="Jordan">

<!-- CSS -->
<link href="styles/bootstrap-3.3.5-dist/css/bootstrap.css"
	rel="stylesheet">
<link href="styles/bootstrap-3.3.5-dist/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="styles/web_app_style.css" rel="stylesheet">
</head>

<body>
	<div id="wrap">
		<div class="navbar navbar-fixed-top navbar-light" style="background-color: #7AA9DD;">
			<div class="navbar-inner">
				<div class="container">
					
					<form class="navbar-form pull-left" action="index.php" method="post">
						<input class="span2 form-control"  type="text" name="search" placeholder="Search 🔍"> 
						<input type='hidden' name='action' value='search'> 
					</form>
					
					<form class="navbar-form pull-right" action="index.php" method="post">
						<button type="submit" class="span1 btn btn-danger btn-xm">Logout</button>
						<input type='hidden' name='action' value='logout'>
					</form>
					
					<p class ="navbar-text pull-right" style="color:white" >
						
						<?php echo "Welcome ",($_SESSION["name"]) ?>
					</p>
					
					<p class="navbar-text pull-left" style="color:white"><?php echo $date;?></p>
				</div>
			</div>
		</div>
		
		<div class="hero-unit">
			<div class="container">
			
				<font size = "4">
					<p style="position:absolute; top:375px; right:690px;"><b> Me </b></p>
				</font>
				 <a href="http://localhost/TeamProject/webapp/views/me_page_html.php">
				<img src="\TeamProject\webapp\Icons\ColourIcons\MeIcon.jpg" alt="Me Icon" 
					style="position:absolute; top:250px; right:650px; width:104px; height:128px;">
				</a>
				
				<font size = "4">
					<p style="position:absolute; top:225px; left:480px;"><b> My Communication  </b></p>
				</font>
				<img src="\TeamProject\webapp\Icons\ColourIcons\CommunicationIcon.jpg" alt="Communication Icon" 
					style="position:absolute; top:100px; left:500px; width:109px;height:128px;">
				
				<font size = "4">
					<p style="position:absolute; top:380px; left:365px;"><b> Tools for Success </b></p>
				</font>
				<img src="\TeamProject\webapp\Icons\ColourIcons\SuccessIcon.png" alt="Success Icon" 
					style="position:absolute; top:250px; left:380px; width:104px;height:128px;">
				
				<font size = "4">
					<p style="position:absolute; top:375px; right:420px;"><b> Assets </b></p>
				</font>
				<img src="\TeamProject\webapp\Icons\ColourIcons\AssetsIcon.jpg" alt="Assets Icon" 
					style="position:absolute; top:250px; right:400px; width:105px;height:128px;">
				
				<font size = "4">
					<p style="position:absolute; top:550px; left:470px;"><b> My Relationships </b></p>
				</font>
				<img src="\TeamProject\webapp\Icons\ColourIcons\RelationshipsIcon.jpg" alt="Relationship Icon" 
					style="position:absolute; top:425px; left:490px; width:104px;height:128px;">
				
				<font size = "4">
					<p style="position:absolute; top:555px; right:510px;"><b> Skills and Talents </b></p>
				</font>
				<img src="\TeamProject\webapp\Icons\ColourIcons\SkillsIcon.jpg" alt="Skills Icon" 
					style="position:absolute; top:425px; right:530px ;width:104px;height:128px;">
				
				<font size = "4">
					<p style="position:absolute; top:225px; right:535px;"><b> Healthcare </b></p>
				</font>
				<img src="\TeamProject\webapp\Icons\ColourIcons\HealthIcon.jpg" alt="Healthcare Icon" 
					style="position:absolute; top:115px; right:530px; width:105px;height:105px;">
				
			</div>
			
			<div id="push"></div>
</body>
</html>