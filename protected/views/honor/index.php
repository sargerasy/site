<?php
$this->breadcrumbs=array(
	'Honors',
);

$this->menu=array(
	array('label'=>'Create Honor', 'url'=>array('create')),
	array('label'=>'Manage Honor', 'url'=>array('admin')),
);
?>

<h1>Honors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
