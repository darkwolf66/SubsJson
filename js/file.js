	function isoDecode(text){
		var buffer = iconv.encode(text, "iso-8859-1");
		data = iconv.decode(buffer, 'utf8');
		return data;
	}
	function handleDragOver(evt) {
	    evt.stopPropagation();
	    evt.preventDefault();
	    evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
  	}
  	function handleFileSelect(evt) {
	    evt.stopPropagation();
	    evt.preventDefault();

	    var files = evt.dataTransfer.files;
	    var file = files[0];
		var textType = /text.*/;
			var reader = new FileReader();

			reader.onload = function(e) {
				$.post("./system/encoding.php", {text: reader.result}, function(result){
        			$(fileDisplayArea).val(result);
        			convertToJson();
    			});
			}

			reader.readAsText(file);
		var fileInput = document.getElementById('files');
	    var fileDisplayArea = '#return';

	}
	var dropZone = document.getElementById('drop_zone');
	dropZone.addEventListener('dragover', handleDragOver, false);
	dropZone.addEventListener('drop', handleFileSelect, false);