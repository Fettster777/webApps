<?php
session_start()
	$strPassword = "chri$649";
	$strResponse = $_POST['txtPass'];
	if($_SESSION['salehiLoggedIn'] != true){
		if ($strResponse == $strPassword){
			$_SESSION['salehiLoggedIn'] = true;
		header('Location: ./indexp_2.php');
		}else{
		header('Location: ../');
		} 
	}else{
		header('Location: ./indexp_2.php');
	}
?>