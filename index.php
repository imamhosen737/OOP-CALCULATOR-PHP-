<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OOP-Calculator</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="row">
	<div class="container mt-3">
		<h3 class="text-center">OOP-PHP</h3>	
	<form action="" method="post">
		<div class="form-row">
			<div class="col">
		       <label for="fnum">Enter First Number</label>
		       <input type="number" class="form-control" name="fnum">
			</div>
			<div class="col">
				<label for="snum">Enter Second Number</label>
				<input type="number" class="form-control" name="snum">
			</div>
		</div>
		<label for="">&nbsp;</label>
		<input type="submit" class="btn btn-success btn-block" name="submit" value="Sumbit">
	</form>
		<div class="text-center">

		<?php
		if(isset($_POST['submit'])){
			$numOne = $_POST['fnum'];
			$numTwo = $_POST['snum'];
			if (empty($numOne) or empty($numTwo)) {
				echo "<span style='color:red'>Fields should not be emplty</span>";
			}else{
				
			class Calculation {

				public function add($a, $b){
					echo "<strong style='color:green'>Sumation is = ".($a+$b)."<br></strong>";
				}
				public function sub($a, $b){
					echo "<strong style='color:green'>Subtraction is = ".($a-$b)."<br></strong>";
				}
				public function mul($a, $b){
					echo "<strong style='color:green'>Multification is = ".($a*$b)."<br></strong>";
				}
				public function div($a, $b){
					echo "<strong style='color:green'>Division is = ".($a/$b)."<br></strong>";
				}
			}
				$cal = new Calculation();
				$cal->add($numOne,$numTwo);
				$cal->sub($numOne,$numTwo);
				$cal->mul($numOne,$numTwo);
				$cal->div($numOne,$numTwo);
			}

		}
	?>
	
		</div>
	</div>
	</div>
	
</body>
</html>