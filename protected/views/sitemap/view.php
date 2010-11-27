<?php
$this->breadcrumbs=array(
	'Sitemaps'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Sitemap', 'url'=>array('index')),
	array('label'=>'Create Sitemap', 'url'=>array('create', 'pid'=>$model->id)),
	array('label'=>'Update Sitemap', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sitemap', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sitemap', 'url'=>array('admin')),
);
?>

<h1>View Sitemap <?php echo $model->name; ?></h1>
<?php 
$dataProvider = new CActiveDataProvider('Sitemap', array(
    'criteria'=>array(
        'condition'=>"parent=$model->id",
    ),
));
$this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'name',
		'path',
		array(
			'class'=>'CButtonColumn',
		),
	)
)); ?>
