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
                        	<option value="20">20 hours</option> 
							<option value="25">25 hours</option> 
							<option value="30">30 hours</option> 
							<option value="35">35 hours</option> 
							<option value="40">40 hours</option> 
							<option value="45">45 hours</option> 
							<option value="50">50 hours</option> 
                        </select>
					</li>
					<li>
						Wage
						 <select name="lstWage">
                        	<option value="10">$10.00 per hour</option> 
							<option value="10.5">$10.50 per hour</option> 
							<option value="11">$11.00 per hour</option> 
							<option value="11.5">$11.50 per hour</option> 
							<option value="12">$12.00 per hour</option> 
							<option value="12.5">$12.50 per hour</option> 
							<option value="13">$13.00 per hour</option> 
							<option value="13.5">$13.50 per hour</option> 
							<option value="14">$14.00 per hour</option> 
							<option value="14.5">$14.50 per hour</option> 
							<option value="15">$15.00 per hour</option> 
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