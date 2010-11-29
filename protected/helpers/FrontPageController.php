<?php

class FrontPageController extends Controller
{
	protected $_page = null;

	protected function loadPage() 
	{
		$this->_page = Page::model()->findByAttributes(array('path' => $this->route));
		$this->layout='//layouts/'.$this->_page->layout;
		$this->render($this->_page->view);
	}

	public function getPage()
	{
		return $this->_page;
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
