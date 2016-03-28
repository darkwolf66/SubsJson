<!DOCTYPE html>
<html>
<head>
	<meta charset="uft8">
	<title>SubsJson</title>
	<link rel="stylesheet" type="text/css" href="./styles/style.css"></style>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/encoding.js"></script>
	<script type="text/javascript">
		function convertToJson(){
			var converter = $("#return").val();
			$.post("./system/srttojson.php", { texto: converter}, function(result){
        		$('.json_exit').val(JSON.stringify(result, null, 4));
    		});
			
		}
	</script>
</head>
<body>
<div class="main">
	<textarea class="srt_input" id="return" oninput="convertToJson()"></textarea>
	<div class="center">
		<div class="srt_load" id="drop_zone">
		<img src="./imagens/upload.png">
		</div>
	</div>
	<textarea class="json_exit"></textarea>
</div>

<script src="./js/file.js"></script>
</body>
</html>