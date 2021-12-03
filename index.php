<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style type="text/css">
	body{
		background-color: black;

	}
	.container-self
	{
		border:1px solid orange;
		border-radius: 5px;
		margin: 30px;
		padding: 30px;
		height: auto;
		width: 500px;
	}
	input{
		background-color: orange;
	}
	.hub{
		font-size: 30px;
		color:	white;
	}
	.table1{

		background-color:orange;
		border-bottom-right-radius: 12px;
		border-top-right-radius:12px;

	}
	.park{
		background-color: black;
		color:orange;
		font-size:30px;
	}
</style>
<body>
<center>
<div class="container-self">
	<table class="table1" align="center">
					<tr>
						<th class="park">API</th>
						<th class="hub">Activity</th>
					</tr>
				</table>
	<form method="post" action="">	
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
		<button type="submit" name="submit" class="btn btn-warning"> create	</button>
	</form>
</div>
</center>
</body>
</html>