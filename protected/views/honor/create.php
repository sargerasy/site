<?php
$this->breadcrumbs=array(
	'Honors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Honor', 'url'=>array('index')),
	array('label'=>'Manage Honor', 'url'=>array('admin')),
);
?>

<h1>Create Honor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php //echo CHtml::form('', 'post', array('enctype'=>'multipart/form-data')); ?>
<?php //echo CHtml::activeFileField($model, 'image'); ?>
<?php //echo CHtml::endForm(); ?>
