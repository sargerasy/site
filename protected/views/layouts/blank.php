<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div id="uploader-wrapper">
		<div id="uploaderOverlay" style="position:absolute; z-index:2"></div>
		<div id="selectFilesLink" style="z-index:1"><a id="selectLink" href="#">Select File</a></div>
	</div>
	<input type="button" id="test" value="test"/>
	<input type="button" id="upload" value="upload"/>
	<input type="file" id="file"/>
	<?php echo $content; ?>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		var uploader = null;
		$("#test").click(function() {
			var ui = $("#selectLink");
			var im = $("#uploaderOverlay");
			im.width(ui.width());
			im.height(ui.height());
			uploader = $("#uploaderOverlay").uploader()
			uploader.bind('swfReady', function() {
				uploader.setAllowMultipleFiles(true);
				console.log("test:"+'swfReady');
			});
			uploader.bind('fileSelect', function(_e, event) {
				console.log("event");
				console.log(event.fileList);
			});
			var i;
			//uploader = new FlashAdapter("/demo/swf/uploader.swf", "uploaderOverlay");
		});
		$("#upload").click(function() {
			uploader.destroy();
			//uploader._swf.upload("file0", "/demo/upload.php", "POST");
		});

	});
</script>
</html>

