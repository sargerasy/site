<?php
$this->breadcrumbs=array(
	'Sitemaps'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sitemap', 'url'=>array('index')),
	array('label'=>'Create Sitemap', 'url'=>array('create')),
	array('label'=>'View Sitemap', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sitemap', 'url'=>array('admin')),
);
?>

<h1>Update Sitemap <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
