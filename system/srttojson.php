<?php
	require('./utflib.php');
	//header("Content-Disposition: attachment; filename=subtitle.json");
	if(!empty($_POST['texto'])){
		$text = $_POST['texto'];
	}else{
		exit();
	}
	$srt = file_get_contents("../the.flash.2014.216.hdtv-lol.srt");
	$srt = codify($srt);
	$subtitle = array();
	$subtitles = array();
	$linhas = explode("\n", $srt);

	$p = 0;
	$tp = 0;

	foreach ($linhas as $linha) {
		$linha = preg_replace("/\r\n|\r|\n/", '', $linha);
		if(preg_match('/-->/',$linha)){
			$p++;
			$tp = 0;
			$subtitles[$p] = array();
			$subtitles[$p]['tempo'] = $linha;
			$subtitles[$p]['texto'] = array();
		}else if(preg_match('/</',$linha) && preg_match('/>/',$linha) 
			|| !preg_match('/[0-9]/',$linha) && preg_match('%[a-zA-Z]%',$linha) && !empty($linha)){
			$subtitles[$p]['texto'][$tp] = $linha;
			$tp++;
		}
	}
	
	echo json_encode($subtitles);


?>