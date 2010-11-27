<?php $this->beginContent('//layouts/main.bak'); ?>
<div class="container">
	<div class="span-4">
		<div id="sidebar">
		<?php 
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Pages',
			)); 
			$this->widget('CTreeView', array(
				'data' => Sitemap::getTreeViewData(),
			));
			$this->endWidget(); 
		?>
		</div><!-- sidebar -->
	</div>
	<div class="span-16">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-4 last">
		&nbsp;
	</div>
</div>
<?php $this->endContent(); ?>
