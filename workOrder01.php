<!DOCTYPE html>

<html>
	<head>
		<title>CIT 3353 Sample Work Order Form</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>
	<body>
		<h1 align="center"><font color="green"><em>Chris Salehi</em></font></h1>
		<h3 align="center"><em>Technology Services Work Order</em></h3>
		<form method="post" action="workOrder01_proc.php" id="frmOrder">
			<table border="1" align="center">
				<tr>
					<td>Name:&nbsp;&nbsp; <input type="text" name="txtName" size="30" /></td>
					<td>Phone:&nbsp;&nbsp; <input type="text" name="txtPhone" size="20" /></td>
				</tr>
				<tr>
					<td>Platform:<br />
						&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" value="Win" checked="checked" name="optPlatform" />Windows<br />
						&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="optPlatform" value="Linux" />Linux<br />
						&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="optPlatform" value="Mac" />MacIntosh
					</td>
					<td>Problem Type:<br />
						&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chkHdwe" value="Y" />Hardware<br />
						&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chkSftwe" value="Y" />Software<br />
						&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="ChkUnknown" value="Y" />Don't know
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Please describe your problem <strong><em>briefly</em></strong>:<br />
						<div align="center">
                            <span class="blockindent">
                                <textarea rows="2" name="txtProblem" cols="56"></textarea>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            <br />
                            <input type="submit" value="Submit" name="cmdSubmit" />
                            <input type="reset" value="Reset" name="cmdReset" />
						</div>
					</td>
				</tr>
			</table>
		</form>
        <p class="footer" align="center">
            [<a href="../index.php">Home</a>]
		</p>
        <p class="footer" align="center">
		For further information, please email us at
		<br />
		<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
		</p>
	</body>
</html>