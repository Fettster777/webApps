<?php
	$strListBlock = "";
	$intYear = $_POST['lstYear'];
	$strCompany = $_POST['lstCompany'];
	$blnConnectOK = mysqli_connect('localhost','scrooge_e','eben$777','DataFKI'); 
	$strSQL = "SELECT Model,Miles,Price FROM UsedCars ";
	$strSQL .= "WHERE Year=$intYear AND Company='$strCompany' ";
	$arrResults = mysqli_query($blnConnectOK,$strSQL);

	while ($arrRow = mysqli_fetch_array($arrResults)) {
			$strModel = $arrRow['Model'];
			$strMiles = $arrRow['Miles'];
			$strPrice = $arrRow['Price'];
			$strListBlock .= "
				<li>$strModel, $strMiles, $strPrice</li>";
		}
	mysqli_close($blnConnectOK);
?>