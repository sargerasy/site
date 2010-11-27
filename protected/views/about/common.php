<?php $page = $this->getPage(); ?>
<?php echo $page->content; ?>

<?php if ((int)$page->type === Page::TYPE_SHOW): ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.galleryview-1.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.timers-1.1.2.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#photos').galleryView({
			panel_width: 600,
			panel_height: 350,
			frame_width: 100,
			frame_height: 100,
			 frame_width: 100,
             frame_height: 36,
            border: 'none',
			background_image: 'transparent',
            easing: 'easeOutBounce',
            nav_theme: 'light'
			
		});
	});
</script>
<div id="page">
	<div id="body" class="wrapper">
		<div id="introduction">
			<div id="photos" class="galleryview"> 
				<?php $images = $page->images ?>
				<?php foreach ($images as $item): ?>
				<div class="panel">
					<img src="<?php echo Yii::app()->request->baseUrl."/upload/show/".$item->image; ?>" >
					<div class="panel-overlay">
						<h2><?php echo $item->name ?></h2>
					</div>
				</div>
				<?php endforeach ?>
				<ul class="filmstrip">
					<?php foreach ($images as $item): ?>
					<li><img src="<?php echo Yii::app()->request->baseUrl."/upload/show/".$item->simage ?>"  alt="<?php echo $item->name ?>"></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="showcase"></div>
		</div>
	</div>
</div>
<?php endif ?>
