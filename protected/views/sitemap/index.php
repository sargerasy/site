<?php
$this->breadcrumbs=array(
	'Sitemaps',
);

$this->menu=array(
	array('label'=>'Create Main Sitemap', 'url'=>array('create', 'pid'=>0)),
	//array('label'=>'Manage Sitemap', 'url'=>array('admin')),
);
?>

<h1>Sitemaps</h1>

<?php 
$dataProvider = new CActiveDataProvider('Sitemap', array(
    'criteria'=>array(
        'condition'=>'parent=0',
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
