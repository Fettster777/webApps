<?php
	//Initalize variables
	$strHoursOptions = "";
	//$strWageOptions = "";
	$intHoursMin = 20;
	$intHoursMax = 50;
	$intHoursIncrement = 5;
	//$dblWageMin = 10;
	//$dblWageMax = 15;
	//$dblWageIncrement = 0.50;
	$strHost = "localhost";
	$strAdmin = "scrooge_e";
	$strPass = "eben$777";
	$strDBase = "DataFKI_scrooge";
	$strSQL = "SELECT FName,LName,EmpID FROM Employees ORDER BY LName,FName";
	//Connect to the DB server and open DB
	$intConnect = mysqli_connect($strHost,$strAdmin,$strPass,$strDBase);
	//Submit a query
	$intQuery = mysqli_query($intConnect,$strSQL);
	//Process the resulting record set / populate the name dropdown list
	$strOptionBlock = "";
	while ($strRow = mysqli_fetch_array($intQuery)) {
		$strFirst = $strRow['FName'];
		$strLast = $strRow['LName'];
		$intID = $strRow['EmpID'];
		$strEmployee = $strFirst . " " . $strLast . " (" . $intID . ")";
		$strOptionBlock .= "<option value=\"" . $intID . "\">" . $strEmployee . "</options> \n";
	}
	//Populate Drop Down List
	for ($i=$intHoursMin; $i<=$intHoursMax; $i+=$intHoursIncrement){
		$strHoursOptions .= "<option value=\"$i\">$i hours</options> \n";
	}
	//for ($j=$dblWageMin; $j<=$dblWageMax; $j+=$dblWageIncrement) {
		//$strWageOptions .= "<option value=\"$j\">$" . number_format($j,2) . " per hour</option> \n";
	//}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Simple Payroll Application</title>
		<meta http-equiv="Content-Type" content="text/html;charset-utf-8" />
	</head>
	<body>
		<h1>Flybai-Knight Automotive</h1>
		<h2>Payroll Processing -- Version A</h2>
		<form id="frmPayment" method="post" action="payroll_1_proc.php">
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp; Inputs: 
				<ul>
					<li>
						Employee
						<!--<input id="txtEmployee" type="text" name="txtEmployee" size="30" /> --><br />
						<select id="lstEmployee" name="lstEmployee">
						<option value="xxx">Select . . .</option>
						<?php echo $strOptionBlock; ?>
						</select>
					</li>
					<<!--li>
						Status
						&nbsp;&nbsp;&nbsp;
                        <input id="optMarried" type="radio" name="optMarried" value="Yes" /> Married
                        &nbsp;&nbsp;
                        <input id="optMarried" type="radio" name="optMarried" value="No" checked="checked" /> Not married
					</li> -->
					<li>
						Hours Worked
						<select name="lstHours">
							<option value = "xxx">Select . . . </option>
                        	<?php echo $strHoursOptions; ?> 
                        </select>
					</li>
					<!-- <li>
						Wage
						 <select name="lstWage">
                        	<?php //echo $strWageOptions; ?>
							<?php echo $strOptionBlock; ?>
                        </select>
					</li> -->
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