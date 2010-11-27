<?php
$this->breadcrumbs=array(
	'Image Shows'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImageShow', 'url'=>array('index')),
	array('label'=>'Manage ImageShow', 'url'=>array('admin')),
);
?>

<h1>Create ImageShow</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>