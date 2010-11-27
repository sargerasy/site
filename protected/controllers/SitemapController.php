<?php

class SitemapController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	private $_parent = null;
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'parentContext + create',
		);
	}

	public function loadParent($id)
	{
		if ($this->_parent === null) {
			$this->_parent = Sitemap::model()->findByPk($id);
			if ($this->_parent === null) {
			   throw new CHttpException(404, 'The requested sitemap does not exist.');
			} else if ((int)$this->_parent->parent !== 0) {
				throw new CHttpException(404, $this->_parent->id.'You can create level 2 sitemap only');
			}
		}
		return $this->_parent;
	}

	public function filterParentContext($filterChain)
	{
		$parentId = 0;
		if (isset($_GET['pid'])) {
			$parentId = (int)$_GET['pid'];
		} else if (isset($_POST['pid'])) {
			$parentId = (int)$_POST['pid'];
		}

		if ($parentId !== 0) {
			$this->_parent = $this->loadParent($parentId);
		}
		$filterChain->run();
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	private function _saveAndRedirect($model)
	{
		if($model->save()) {
			if ((int)$model->parent === 0) {
				$this->redirect(array('view','id'=>$model->id));
			}
			else {
				$this->redirect(array('view', 'id'=>$model->parent));
			}
		}
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Sitemap;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sitemap']))
		{
			$model->attributes=$_POST['Sitemap'];
			$this->_saveAndRedirect($model);
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sitemap']))
		{
			$model->attributes=$_POST['Sitemap'];
			$this->_saveAndRedirect($model);
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Sitemap('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sitemap']))
			$model->attributes=$_GET['Sitemap'];

		$dataProvider=new CActiveDataProvider('Sitemap');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Sitemap('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sitemap']))
			$model->attributes=$_GET['Sitemap'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Sitemap::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sitemap-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function getParentId()
	{
		return $this->_parent ? $this->_parent->id : 0;
	}
}
