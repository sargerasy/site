<?php

class Uploader extends CWidget
{
	public $path;
	public $url;

	public function init()
	{
		$baseUrl = Yii::app()->request->baseUrl;
		$cs = Yii::app()->getClientScript();
		$cs->registerCoreScript("jquery");
		$cs->registerScriptFile($baseUrl.'/js/swfobject.js');
		$cs->registerScriptFile($baseUrl.'/js/jquery.uploader.js');
		$cs->registerScriptFile($baseUrl.'/js/jquery.progressbar.js');
		$cs->registerScriptFile($baseUrl.'/js/jquery.boxy.js');
		$cs->registerCssFile($baseUrl.'/css/boxy.css');

		$html = <<<EOD
<div id="uploader-wrapper">
	<span id="uploaderOverlay" style="position:absolute; z-index:2"></span>
	<span id="selectFilesLink" style="z-index:1"><a id="selectLink" href="#">Select File</a></span>
	<input type="button" id="upload" value="upload"/>
	<input type="button" id="clear" value="clear"/>
	<input type="hidden" id="path" value="$this->path"/>
	<div id="file-progress" style="display:inline;">
		<input type="text" id="filename" value="" disabled="disabled" style="background:transparent;"/>
		<span id="progressBar"></span>
	</div>
</div>
EOD;
		echo $html;

		$js = <<<EOD
$(document).ready(function() {
	var ui = $("#selectLink");
	var im = $("#uploaderOverlay");
	im.width(ui.width());
	im.height(ui.height());
	var uploader = $("#uploaderOverlay").uploader();
	var pb = null;
	//$("#progressBar").progressBar();

	uploader.bind("swfReady", function(_e, event) {
		var ff = new Array({description:"Images", extensions:"*.jpg;*.png;*.gif"},
		                   {description:"Videos", extensions:"*.avi;*.mov;*.mpg"});
		uploader.setFileFilters(ff);
	});
	uploader.bind('fileSelect', function(_e, event) {
		var file = event.fileList['file0'];
		$("#filename").val(file.name);
		pb = $("#progressBar").progressBar({prefix: "K", max: Math.round(file.size/1024), textFormat: 'fraction'});
	});
	uploader.bind('uploadProgress', function(_e, event) {
		pb.setProgress(Math.round(event['bytesLoaded']/1024));
	});
	uploader.bind('uploadError', function(_e, event) {
		$("#progressBar").html("Upload Error");
	});
	uploader.bind('uploadComplete', function(_e, event) {
		$("#progressBar").html('<input type="button" id="preview" value="preview"/><input type="button" id="delete" value="delete"/>');
		$("#preview").click(function() {
			//new Boxy('<img src="$baseUrl/' + $("#path").val() + $("#filename").val() + '"' + '/>');
			new Boxy('<h1>ABCDE</h1>');
		});
	});

	$("#upload").click(function() {
		uploader.uploadAll("$this->url", "POST", {
			'path': $("#path").val(),
			'filename': $("#filename").val()
		});
	});
});
EOD;
		$cs->registerScript("", $js);
	}

	public function run()
	{
	}
}
?>
