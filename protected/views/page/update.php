<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'View Page', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>
<div class="container">
	<div class="span-4">
		<div id="sidebar">
		<?php 
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Pages',
			)); 
			$this->widget('CTreeView', array(
				'data' => Utils::getSitemapTreeViewData($model),
			));
			$this->endWidget(); 
		?>
		</div><!-- sidebar -->
	</div>
	<div class="span-16">
		<div id="content">
			<h1>Update Page <?php echo $model->name; ?></h1>
			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div><!-- content -->
	</div>
	<div class="span-4 last">
		&nbsp;
	</div>
</div>

