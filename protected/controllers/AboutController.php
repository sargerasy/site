<?php

class AboutController extends FrontPageController
{

	public function actionContact()
	{
		$this->loadPage();
	}

	public function actionCulture()
	{
		$this->loadPage();
	}

	public function actionHistory()
	{
		$this->loadPage();
	}

	public function actionIndex()
	{
		$this->loadPage();
	}

	public function actionHonor()
	{
		$this->layout = "//layouts/honor";
		$year = 2006;
		$page = 1;
		if (isset($_GET['year']))
			$year = $_GET['year'];
		else if (isset($_POST['year']))
			$year = $_POST['year'];

		$criteria = new CDbCriteria(array(
			'condition' => 'year='.$year,
		));
		$dataProvider=new CActiveDataProvider('Honor', array(
			'pagination'=>array(
				'pageSize'=>9,
				//'pageVar'=>'page',
			),
			'criteria'=>$criteria,
		));

		$this->loadPage(array(
			'dataProvider'=>$dataProvider,
			'curYear'=>$year,
		));

	}

	public function actionJobs()
	{
		$this->layout = "//layouts/about";
		$criteria = new CDbCriteria(array(
			'order' => 'create_date desc',
		));

		$dataProvider=new CActiveDataProvider('Job', array(
			'pagination'=>array(
				'pageSize'=>5,
			),
			'criteria'=>$criteria,
		));
		$this->loadPage(array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionManagement()
	{
		$this->loadPage();
		/*
		$this->layout = "//layouts/about";
		$this->render('management');
		 */
	}

	public function actionOrganization()
	{
		$this->loadPage();
	}

	public function actionQuality()
	{
		$this->loadPage();
	}

	public function actionStrategy()
	{
		$this->loadPage();
	}

	public function actionVideo()
	{
		$this->loadPage();
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
