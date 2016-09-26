<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Recover Password</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="../Mail/YourBase">
						
						<div class="form-group"> 
							<label for="email" class="cols-sm-2 control-label">Adres Email</label>
							<br><br>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Adres Email"/>
								</div>
								
							</div>
						</div>
<br>
						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Dodaj</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>