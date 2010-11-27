<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?php echo $this->getPage()->keywords ?>" />
	<meta name="description" content="<?php echo $this->getPage()->description ?>" />
	<title>JOYOU·中宇卫浴-<?php echo $this->getPage()->name ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" media="screen, projection" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/object.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/iepngfix_tilebg.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/qm.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js" type="text/javascript"></script>
	<?php if ($this->route === 'about/honor'): ?>
	<script type="text/javascript" src="/demo/js/clearbox.js"></script>
	<?php endif; ?>
</head>

<body>
<div id="wrap">
<div class="container">
	<div class="header">
		<span><a href="/website.htm">网站导航</a> | <a href="http://www.joyou.com/">English Version</a> | <a href="http://www.joyou.de/">Deutsch</a></span>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" />
	</div><!-- header -->

	<div class="navbar"> 
		<div class="nav">
			<div id="qm0" class="qmmc">
			<?php
			$menus=Sitemap::loadAllSiteMap();
			$mainMenus = $menus[0];
			foreach($mainMenus as $menu) {
			?>
				<a href="<?php echo $this->createUrl($menu->path)?>"><img src="<?php echo Yii::app()->request->baseUrl."/images/".$menu->name.".png"?>" width="56" height="14" /></a>
				<?php $children = $menus[$menu->id];
				if (isset($children)) {?>
					<div>
					<?php
					foreach($children as $child) {
					?>
						<a href="<?php echo $this->createUrl($child->path);?>"><?php echo $child->name?></a>
					<?php } ?>
					</div>
				<?php } ?>
			<?php } ?>
			</div>

			<script type="text/JavaScript">qm_create(0,false)</script></div>
			<script type="text/javascript">document.getElementById("qm0").childNodes[0].className='current';</script>
			<div class="search_box">
					<form name="search" action="/module/product/search.asp" method="get" onsubmit="if(this.query.value == '请输入搜索关键字')return false;">
						<input type="hidden" name="space" value="2" />
						<input type="hidden" name="rn" value="8" />
						<input name="query" type="text" value="请输入搜索关键字" class="search" onfocus="if(this.value=='请输入搜索关键字') this.value=''" onblur="if(this.value=='')this.value='请输入搜索关键字'" /><input type="image" src="<?php echo Yii::app()->request->baseUrl; ?>/images/search_icon.png" />
					</form>
            </div>
    </div>

	<?php echo $content; ?>

	<div class="content_bottom"></div>
</div> <!-- container -->
</div><!-- wrap -->

</body>
</html>
