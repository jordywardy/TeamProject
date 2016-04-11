<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
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

	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form>
			<div id="push"></div>
</body>
</html>