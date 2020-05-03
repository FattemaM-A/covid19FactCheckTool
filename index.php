
<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>INFODEMIC</title>
	<link href="style.css" rel="style" type="text/css">
</head>
<center>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div>
	<img src="logo19.jpg" width="200px" height="170px" align="left">
</div>


<div class="container" id="main-content">
	<h1 class="pb-5 pt-3">Infodemic</h1>
	<h2 class="pb-5 pt-3">COVID-19 Fact-Checking Tool</h2>

</div>
	<hr>		
<div class="main">
	<ul>
		<a href="#">MAIN MENU   |  ABOUT  |  NEWS  |  SERVICE </a>
	</ul>
</div>
    <hr>
    <h1></h1>
<?php 
	if (isset($_GET['search'])) {
		include("includes/search.php");
	} else {
		echo '
	<form class="" method="GET">
		<div class="input-group">
			<input class="form-control" type="text" name="search" placeholder="Paste URL or enter search terms here"></input>
		</div>
		<div class="input-group p-3 ">
			<button type="submit" class="btn btn-primary mx-auto">Submit</button>
		</div>
	</form>
	

</div>

<br />
<br />
<br />

<?php include("includes/footer.php");?>

</body>
</center>
</html>
