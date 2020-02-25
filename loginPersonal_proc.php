<?php
	$strPassword = "chri$649";
	$strResponse = $_POST['txtPass'];
	if($strResponse == $strPassword){
		header('Location: ./');
	}else{
		header('Location: ../');
	}
?>