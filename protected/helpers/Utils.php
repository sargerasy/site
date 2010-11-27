<?php

class Utils
{
	public static function getFileExt($name)
	{
		$parts = explode(".", $name);
		$len = count($parts) - 1;
		return $parts[$len];
	}

	public static function generateName($image)
	{
		$ext = self::getFileExt($image->name);

		$time = time();
		return array(
			'name'=>$time.".".$ext,
			'sname'=>$time."_s.".$ext,
		);
	}

	public static function uploadImage($image, $dir, $names, $thumbnail)
	{
		if (!is_dir($dir))
			mkdir($dir, 0777, true);
		
		$path = $dir.$names['name'];
		$image->saveAs($path);

		if (isset($thumbnail)) {
			$simage = Yii::app()->image->load($path);
			$simage->resize($thumbnail['width'], $thumbnail['height'], Image::NONE);
			$simage->save($dir.$names['sname']);
		}
		return $ret;
	}

	public static function honorImageDir($model)
	{
		return Yii::app()->basePath."/../upload/honor/".$model->year."/";
	}

	public static function showImageDir()
	{
		return Yii::app()->basepath."/../upload/show/";
	}

	public function upload($model, $image, $dir, $redirect, $thumbnail)
	{
		if($image !== null) {
			$names = Utils::generateName($image);
			$model->image = $names['name'];
			$model->simage = $names['sname'];
			if ($model->save()) {
				Utils::uploadImage($image, $dir, $names, $thumbnail);
				$this->redirect($redirect);
			}
		} else {
			throw new CHttpException(400,'The Image upload failed!');
		}
	}
}
?>
