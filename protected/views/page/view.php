<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Update Page', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);

if ((int)$model->type === Page::TYPE_SHOW)
	$this->menu[] = array('label'=>'Add Image Show', 'url'=>array('imageShow/create', 'pageid'=>$model->id));

?>

<h1>View Page #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'name',
		'title',
		'path',
		'content',
		'keywords',
		'description',
	),
)); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $imageShowDataProvider,
	'itemView' => '/imageShow/_view',
)); ?>
