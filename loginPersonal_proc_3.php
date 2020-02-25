<?php
	$strNewPage = "./indexp_3.php";
	$strOldPage = $_SERVER['HTTP_REFERER'];
	$strPassword = "chri$649";
	$strResponse = $_POST['txtPass'];
	if($_COOKIE['salehiOK'] != true){
		if ($strResponse == $strPassword){
			setcookie('salehiOK', true, time() +7200);
		header('Location: ./indexp_3.php');
		}else{
		$strOldPage .= "?badlogin=yes";
		header('Location: ./loginPersonal_3.php');
		} 
	}else{
		header('Location: ./indexp_3.php');
	}
?>