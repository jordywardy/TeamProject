<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $title;?>">
<meta name="author" content="Mark and Jordan">

<!-- CSS -->
<link href="styles/bootstrap-3.3.5-dist/css/bootstrap.css"
	rel="stylesheet">
<link href="styles/bootstrap-3.3.5-dist/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="styles/web_app_style.css" rel="stylesheet">
</head>
<body>
<div id="wrap">
		<div class="navbar navbar-fixed-top navbar-dark bg-primary">
			<div class="navbar-inner">
				<div class="container">
					<form class="navbar-form pull-left" action="index.php" method="post">
					
						<input class="span2 form-control"  type="text" name="search" placeholder="Search"> 
						<input type='hidden' name='action' value='search'> 
						
					</form>
					<p class="navbar-text pull-left" style="color:white"><?php echo $date;?></p>
					
					<form class='navbar-form pull-right' action='index.php' method='post'>
						<button type="submit" class="span1 btn btn-danger btn-xm">Logout</button>
						<input type='hidden' name='action' value='logout'>
					</form>
					
					<form class='navbar-form pull-right' action='index.php' method='post'>
						<button type="submit" class="span1 btn btn-success btn-xm">New</button>
						<input type='hidden' name='action' value='insertgames'>
					</form>
					<p class ="navbar-text pull-right" style="color:white" >
						
						<?php echo "Welcome ",($_SESSION["name"]) ?>
					</p>
				</div>
			</div>
		</div>
	
		
		<div class="container">
				<?php
				if ($this->model->showerrormsg==true)
				{
					echo "<h4>",$err_msg,"</h4><br><br>";
				}
				$cList = "<ul>";
				foreach ( $gamesList as $recordNumber => $row ) 
				{
					$cList .= "<div>";
					
					$cList .= " <p class=\"text-center\"><h4> $row[title]</h4></p>";
					
					$cList .= " <form class='pull-right' action='index.php' method='post'>";
					$cList .= " <input type='submit' class='btn btn-warning btn-xm' value='Delete'>";
					$cList .= " <input type='hidden' name='action' value='delete'>";
					$cList .= " <input type='hidden' name='gamesid' value='$row[id]'>";
					$cList .= "</form>";
					
					$cList .= "<form  class='pull-right' action='index.php' method='post'>";
					$cList .= "<input type='submit' class='btn btn-info btn-xm' value ='Update'>";
					$cList .= " <input type='hidden' name='action' value='updateGames'>";
					$cList .= " <input type='hidden' name='gamesid' value='$row[id]'>";
					$cList .= "</form>";
					
					$cList .= "<label>Year of release:</label> $row[year] <br>";
					$cList .= "<label>Genre:</label>  $row[genre]";
					$cList .= "<br> <label>Age rating:</label> $row[age]";
					
					$cList .= "</div>";
				}
				$cList .= "</ul>";
				echo $cList;
				?>
		</div>
	</div>
	<br>
	<br>
	<br>
	
	<div id="footer">
		<div class="container ">
		<br>
			<p class="text-center">
			<?php echo $footer;?>
			</p>
		</div>
	</div>

</body>
</html>