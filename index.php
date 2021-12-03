<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="assets/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:black;">
<center>
<div class="container-self">
	<table class="table1" align="center">
		<tr>
			<th class="api">API</th>
			<th class="activity">Activity</th>
		</tr>
	</table>
	<form method="post" action="http://localhost/win_api_activity_1.0/create/create_data.php">	
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label"></label>
	 		<input type="text" class="form-control" id="exampleFormControlInput1" name="first_name" placeholder="First Name" required>
		</div>
		<div class="mb-3">
		  	<label for="exampleFormControlInput1" class="form-label"></label>
		  	<input type="text" class="form-control" id="exampleFormControlInput1" name="last_name" placeholder="last name" required>
		</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label"></label>
 		 	<input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
		</div>
		<button name="save_btn" type="submit" class="btn btn-warning"> create	</button>
	</form>
</div>
<p>You find ways!</p>
</center>
</body>
</html>