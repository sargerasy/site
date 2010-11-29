<?php $this->beginContent('//layouts/main'); ?>
<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/honor_banpic.png" width="960" height="215" /></div>
<div class="procontent">
	<div class="sprocontent">
		<div class="leftbar">
			<ul class="leftnav" id="leftmenu" >
				<?php $menus = Sitemap::getSubMenus($this->route) ?>
				<?php foreach ($menus as $menu) { ?>
				<li><a <?php echo ($this->route === $menu->path) ? 'class="current"':'' ?> href="<?php echo $this->createUrl($menu->path)?>"><?php echo $menu->name?></a></li>
				<?php }?>
			</ul>
		</div>

		<div class="maincontent">
			<div class="aboutxt">
				<h5 class="tit">&nbsp;</h5>
				<?php echo $content; ?>
			</div>
		</div>
		<div class="footer">
			<span>版权所有 © 2009—2010 中宇卫浴 <a href="http://www.joyou.com.cn" target="_blank">www.joyou.com.cn</a> 闽ICP备05001132号 技术支持：<a href="http://www.woncent.net" target="_blank">中国网讯</a> <a href=" http://www.shoes.net.cn" target="_blank" title="环球鞋网">鞋网</a></span>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/freehotline_pic.gif" />
		</div> <!-- footer -->
	</div>
</div>
<?php $this->endContent(); ?>
