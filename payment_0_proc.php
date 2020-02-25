<?php
	//Get form data
	$dblAmount = doubleval($_POST['txtLoan']);
	$intYears = $_POST['lstTerm'];
	$intPercent = $_POST['lstInterest'];
	//Perform calculations
	$intMonthTerm = $intYears * 12;
	$dblMonthRate = $intPercent / 100 / 12;
	$dblPower = pow(1 + $dblMonthRate, $intMonthTerm);
	$dblPayment = $dblAmount * (($dblMonthRate * $dblPower) / ($dblPower - 1));
	//Form output
	$strAmount = number_format($dblAmount);
	$strPayment = number_format($dblPayment,2);
?>
<!DOCTYPE html>
<hmtl>
	<head>
		<title>Payment Calculator</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html:charset=utf-8" />
	</head>
	<body>
		<h1>Flybai-Knight Automotive</h1>
		<h2>Loan Payment Calculator</h2>
			<p>
				<img src="https://www.clipartwiki.com/clipimg/detail/17-172527_government-clipart-business-loan.png" alt="Loan" style="width:200px;height:150px;border:0;">
				<br />
				<br />
				&nbsp;&nbsp;&nbsp; Inputs:
				<ul>
					<li>
						Loan Amount =
						$<?php echo ($strAmount); ?>
					</li>
					<li>
						Term =
						<?php echo($intYears); ?> years
					</li>
					<li>
						Interest rate = 
						<?php echo($intPercent); ?>%
					</li>
				</ul>
			</p>
			<p>
				&nbsp;&nbsp;&nbsp; Outputs:
				<br /><br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Monthly Payment =
						$<?php echo($strPayment); ?>
			</p>
			<p class="footer" align="center">
				[<a href="../index.php">Home</a>]
			</p>
			<hr />
			<p class="footer" align="center">
				For further information, please email us at
				<br />
				<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
			</p>
	</body>
</html>
	