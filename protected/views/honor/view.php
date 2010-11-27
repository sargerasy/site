<?php
$this->breadcrumbs=array(
	'Honors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Honor', 'url'=>array('index')),
	array('label'=>'Create Honor', 'url'=>array('create')),
	array('label'=>'Update Honor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Honor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Honor', 'url'=>array('admin')),
);
?>

<h1>View Honor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'year',
		'image',
		'simage',
	),
)); ?>
