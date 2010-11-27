<?php
$this->breadcrumbs=array(
	'Honors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Honor', 'url'=>array('index')),
	array('label'=>'Create Honor', 'url'=>array('create')),
	array('label'=>'View Honor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Honor', 'url'=>array('admin')),
);
?>

<h1>Update Honor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>