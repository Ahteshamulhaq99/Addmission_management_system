<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registeration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
  
    
</head>
<body class="form-v9">

	<div class="page-content">
	 <div class="form-v9-content" style="background-color: white;" >
		
		
			<form class="form-detail" action="form.php" method="post">
				<h1 style="color: navy; text-align: center;">Registeration Form</h1>
				<br><br>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-row">
						<!-- <input type="" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required> -->
						<input type="text" name="father" id="father" class="input-text" placeholder="Father Name" required>
					</div>
					
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="number" name="number" id="number" class="input-text" placeholder="Mobile No" required>
					</div>
					<div class="form-row">
						<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				
				<div class="form-row-total">
					<div class="form-row">
						<input type=text name="address" placeholder="Address" class="input-text" required></textarea>
						<!-- <input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required> -->
					</div>
					
					
					
					<div class="sel">
					<select class="field"  name="field" id="field" value="null" required>
  					<option value="computer science">Computer Science</option>
  					<option value="enviromental science">Enviromental Science</option>
 					 <option value="bba">BBA</option>
					  <option value="software engineer">Software Engineering</option>
						</select>
						</div>
						</div> 
				
				<h3 style="color: navy; font-size: 25px;">Gender</h3>
				<div class="form-row-total" style="color: navy;">
				<label for="">Male</label>	<div class="form-row" style="color: navy ; ">
						<input type="radio" name="gender" value="male" id="male" class="gender"required>
						
					</div>
					<label for="">Female</label><div class="form-row" style="color: navy;">
					<input type="radio" name="gender" value="female" id="female" class="gender"  required>
					</div>
				</div>
				
				<h3 style="color: navy; font-size: 25px;">Previuos Record</h3>
				<table name="table">
				
					
					<tbody style="line-break: normal;"><tr>
						
						<td><input class="inupt-text" name="standard" type="text" required="" placeholder="Standard"></td>
						<td> <input class="inupt-text" name="roll" type="text" required="" placeholder="Roll No"> </td>
						<td> <input class="inupt-text" name="board" type="text" required="" placeholder="Board"> </td>
						<td> <input class="inupt-text" name="percentage" type="percentage" required="" placeholder="Percentage"> </td>
						<td> <input class="inupt-text" name="year" type="year" required="" placeholder=" Year"></td>
					</tr>
					
					
				</tbody></table>
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="submit">
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>


