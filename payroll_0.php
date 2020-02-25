<?php
	//Initalize variables
	$strHoursOptions = "";
	$strWageOptions = "";
	$intHoursMin = 20;
	$intHoursMax = 50;
	$intHoursIncrement = 5;
	$dblWageMin = 10;
	$dblWageMax = 15;
	$dblWageIncrement = 0.50;
	//Populate Drop Down List
	for ($i=$intHoursMin; $i<=$intHoursMax; $i+=$intHoursIncrement){
		$strHoursOptions .= "<option value=\"$i\">$i hours</options> \n";
	}
	for ($j=$dblWageMin; $j<=$dblWageMax; $j+=$dblWageIncrement) {
		$strWageOptions .= "<option value=\"$j\">$" . number_format($j,2) . " per hour</option> \n";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Simple Payroll Application</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html;charset-utf-8" />
	</head>
	<body>
		<h1>Flybai-Knight Automotive</h1>
		<h2>Payroll Processing -- Version A</h2>
		<form id="frmPayment" method="post" action="payroll_0_proc.php">
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp; Inputs: 
				<ul>
					<li>
						Employee
						<input id="txtEmployee" type="text" name="txtEmployee" size="30" /><br />
					</li>
					<li>
						Status
						&nbsp;&nbsp;&nbsp;
                        <input id="optMarried" type="radio" name="optMarried" value="Yes" /> Married
                        &nbsp;&nbsp;
                        <input id="optMarried" type="radio" name="optMarried" value="No" checked="checked" /> Not married
					</li>
					<li>
						Hours Worked
						<select name="lstHours">
                        	<?php echo $strHoursOptions; ?> 
                        </select>
					</li>
					<li>
						Wage
						 <select name="lstWage">
                        	<?php echo $strWageOptions; ?>
                        </select>
					</li>
				</ul>
			</p>
			<p>
			&nbsp;&nbsp;&nbsp; Outputs: 
                <br /><br />
            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Calculate Net Pay" />
            </p>
		</form>
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