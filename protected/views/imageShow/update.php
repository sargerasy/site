<?php
$this->breadcrumbs=array(
	'Image Shows'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ImageShow', 'url'=>array('index')),
	array('label'=>'Create ImageShow', 'url'=>array('create')),
	array('label'=>'View ImageShow', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ImageShow', 'url'=>array('admin')),
);
?>

<h1>Update ImageShow <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>