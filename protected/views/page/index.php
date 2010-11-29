<?php
$this->breadcrumbs=array(
	'Pages',
);

$this->menu=array(
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Pages</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'content',
		'keywords',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


