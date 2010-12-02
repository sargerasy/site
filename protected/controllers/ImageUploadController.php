<?php

class ImageUploadController extends Controller
{
	public $layout = "//layouts/blank";

	public function actionIndex()
	{
		$baseUrl = Yii::app()->request->baseUrl;
		Yii::app()->getClientScript()->registerCoreScript("jquery");
		Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/js/jquery.boxy.js');
		Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/js/swfobject.js');
		Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/js/jquery.uploader.js');
		Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/js/jquery.progressbar.min.js');
		Yii::app()->getClientScript()->registerCssFile($baseUrl.'/css/boxy.css');

		$this->render('index');
	}

	public function actionUpload()
	{
		echo "uploading!";
		if (isset($_POST['path']))
			$path = getcwd().$_POST['path'];
		if (!is_dir($path))
			mkdir($path, 0777, true);
		echo str_replace("\\", "/", $_POST['path']);

		if (isset($_POST['filename']))
			$filename = $_POST['filename'];

		foreach ($_FILES as $fieldName => $file) {
			$name = iconv('utf-8', 'gbk', $file["name"]); ;//md5(microtime());
			move_uploaded_file($file['tmp_name'], $path . $name);
			echo $file['name'] . ' uploaded!';
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
