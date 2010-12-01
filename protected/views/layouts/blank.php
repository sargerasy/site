<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

	<span id="uploader-wrapper">
		<span id="uploaderOverlay" style="position:absolute; z-index:2"></span>
		<span id="selectFilesLink" style="z-index:1"><a id="selectLink" href="#">Select File</a></span>
	</span>
	<input type="button" id="upload" value="upload"/>
	<input type="button" id="clear" value="clear"/>
	<div id="file-progress" style="display:inline;">
		<input type="text" id="filename" value="123.txt" style="background:transparent;"/>
		<span id="progressBar"></span>
	</div>
	<?php echo $content; ?>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		var ui = $("#selectLink");
		var im = $("#uploaderOverlay");
		im.width(ui.width());
		im.height(ui.height());
		var uploader = $("#uploaderOverlay").uploader();
		var pb = null;
		//$("#progressBar").progressBar();

		uploader.bind('fileSelect', function(_e, event) {
			var file = event.fileList['file0'];
			console.log(file.size);
			pb = $("#progressBar").progressBar({max: file.size, textFormat: 'fraction'});
		});
		uploader.bind('uploadProgress', function(_e, event) {
			pb.setProgress(event['bytesLoaded']);
		});

		$("#upload").click(function() {
			uploader.uploadAll("/demo/upload.php");
		});

	});
</script>
</html>

