<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('page-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
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
			<h1>Manage Pages</h1>
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'page-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					'name',
					'title',
					'path',
					array(
						'class'=>'CButtonColumn',
					),
				),
			)); ?>
		</div><!-- content -->
	</div>
	<div class="span-4 last">
		&nbsp;
	</div>
</div>

