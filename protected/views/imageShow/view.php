<?php
$this->breadcrumbs=array(
	'Image Shows'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ImageShow', 'url'=>array('index')),
	array('label'=>'Create ImageShow', 'url'=>array('create')),
	array('label'=>'Update ImageShow', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ImageShow', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ImageShow', 'url'=>array('admin')),
);
?>

<h1>View ImageShow #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'image',
		'simage',
		'page_id',
	),
)); ?>
