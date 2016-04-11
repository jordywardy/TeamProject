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
					<p class="navbar-text pull-left" style="color:white"><?php echo $date;?></p>
					<form class="navbar-form  pull-right" >
						<input class="span2 form-control" type="text" placeholder="✉ Email" name="email">
						<input class="span2 form-control" type="password" placeholder="🔒 Password" name="password">
						<input type="hidden" name="action" value="signin">
						<button type="submit" class="span1 btn btn-success btn-xm" >Sign In</button>
					</form>
				</div>
			</div>
		</div>

		<div class="hero-unit">
			<h1><?php echo $quote;?></h1>
			<div class="container">
				<?php
				
				include ("template_new_user.php");
				
				?>
				</div>

			

			<div id="push"></div>
		</div>
		<!-- <h2>Games biatch:</h2>
		<div class="row">
				<div class="container">
				<?php
				/*$ulList = "<ul>";
				foreach ( $gamesList as $recordNumber => $row ) 
				{
					$ulList .= " <p class=\"text-center\"><h4> $row[title]</h4></p>";
					$ulList .= "<label>Year of release:</label> $row[year] <br>";
					$ulList .= "<label>Genre:</label>  $row[genre]";
					$ulList .= "<br> <label>Age rating:</label> $row[age]";
				}
				$ulList .= "</ul>";
				echo $ulList;*/
				
				?>
				</div>
			
		</div>
		</div>-->
		<div id="footer" style="text-align:right">
			<div class="container"><?php echo $footer;?></div>
		</div>

</body>
</html>