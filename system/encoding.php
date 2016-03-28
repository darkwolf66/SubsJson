<?php 
	if(!empty($_POST['text'])){
		$text = $_POST['text'];
	}else{
		exit();
	}

	require('./utflib.php');

	echo codify($text);
?>