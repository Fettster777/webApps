<?php
//initialization
$strHost = "localhost";
$strUser = "scrooge_e";
$strPass = "eben$777";
$strDB = "HENRY09";
//get data from html form
$dblMaxPrice = $_POST['lstPrice'];
$strName = $_POST['txtName'];
//build sql string based on form data
$strSQL = "SELECT Title,Price FROM BOOK WHERE Price<$dblMaxPrice ORDER BY Title";
//create dbms connection and open db
//include("home/duck_d/includes/credentials.php)"
$strConn = mysqli_connect($strHost,$strUser,$strPass,$strDB);
//submit a query
$strResult= mysqli_query($strConn,$strSQL);
//process query
$arrRow = mysqli_fetch_assoc($strResult);
/*echo "<br />$strResult<br />";*/
while($arrRow != false) {
	$strTitle = $arrRow['Title'];
	$dblPrice = "$" . money_format("%n",$arrRow['Price']);
	$strListBlock .= "
					<li>$strTitle --- $dblPrice</li>";
	$arrRow = mysqli_fetch_assoc($strResult);
}
//wrapup database processing
mysqli_free_result($strResult);
mysqli_close($strConn);
//output formatting
$strMaxPrice = "$" . money_format("%n",$dblMaxPrice);
?>

<!DOCTYPE hmtl>
<html xmlns="http://w3.org/1999/xhtml">
	<head>
		<title>Chris Books Listing: The Processor</title>
		<!-- Link style sheet link rel="stylesheet" href="../styles/styleDefault.css" /> -->
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<!--<style type="text/css">
			table{
					//margin:auto;
					margin-left:auto;
					margin-right:auto;
					background-color:white;
			}
			.rightaling{
					text-align:right;
			}
		</style>-->
	</head>
	<body>
<?php //include ("../includes/header_henry.php"); ?>
		<h1>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Chris Books <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="../images/hBooks01.gif" alt="Book logo" width="68" height="60" />
		</h1>
		<h2> Book Available Under <?php echo $strMaxPrice; ?> for <?php echo $strName; ?>:</h2>
			<ul>
					<?php echo $strListBlock; ?>
			</ul>
<?php //include ("../includes/footer_henry.php"); ?>
		<br />&nbsp;
		<hr />
		<p><small>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>Chris Books</strong>
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			P.O. Box 130 &bull; State University, AR 72467
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			(870) 972-3416
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			[<?php echo "$strDB Database";?>]
		</small></p>
		<p class="footer" align="center">
			[<a href="../index.php">Home</a>]
		</p>
		<p class="footer" align="center">
			For further information, please email us at
			<br />
			<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
		</p>
	<body>
<html>
		