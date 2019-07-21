<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://sourcecodester.com">Sourcecodster</a>
" rel="nofollow">https://eliasngumbipro.com">eliasngumbipro</a>
</a>		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Basic Money Converter</h3>
		<hr style="border-top:1px dotted #000;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="">
				<div class="form-inline">
					<select name="val" class="form-control">
						<option value="PHP">PHP</option>
						<option value="USD">USD</option>
					</select>
					<input class="form-control" type="number" name="digit"/>
				</div>	
				<br />
				<div class="form-inline">
					<label>Select Currency: </label>
					<select name="currency" required="required" class="form-control">
						<option value="">Select an option</option>
						<option value="USD">USD</option>
						<option value="Euro">Euro</option>
						<option value="PHP">PHP</option>
						<option value="Japanese Yen">Japanese Yen</option>
					</select>
					<br /><br />
					<center><button type="submit" name="convert" class="btn btn-primary form-control" style="width:30%;">Convert</button></center>
					<br />
				</div>	
					<?php require 'convert.php'?>
			</form>
		</div>
	</div>
</body>
</html>
