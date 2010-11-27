<?php
$this->breadcrumbs=array(
	'Image Shows',
);

$this->menu=array(
	array('label'=>'Create ImageShow', 'url'=>array('create')),
	array('label'=>'Manage ImageShow', 'url'=>array('admin')),
);
?>

<h1>Image Shows</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
