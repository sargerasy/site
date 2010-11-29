<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);

$this->menu=array(
);
?>

<div class="container">
	<div class="span-4">
		<div id="sidebar">
		<?php 
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Pages<div style="display:inline;float:right;">'. CHtml::link('Add', array('page/create'), array('style'=>'text-decoration:none')).'</div>',
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
			<h1>Create Page</h1>
			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div><!-- content -->
	</div>
	<div class="span-4 last">
		&nbsp;
	</div>
</div>

