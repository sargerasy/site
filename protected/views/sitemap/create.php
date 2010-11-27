<?php
$this->breadcrumbs=array(
	'Sitemaps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sitemap', 'url'=>array('index')),
	array('label'=>'Manage Sitemap', 'url'=>array('admin')),
);
?>

<h1>Create Sitemap</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>