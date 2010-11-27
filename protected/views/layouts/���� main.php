<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=",淋浴柱和花洒,陶瓷洁具,浴室柜,浴缸,浴室挂件,感应产品,五金配件" />
	<meta name="description" content="中宇建材集团有限公司位于海峡西岸经济区内的古城泉州，是中国最大的卫浴水暖产品及配件制造商之一，也是亚洲最具规模的水龙头及铜阀门配件出口企业之一，同时是中国卫浴水暖产品多项国家标准主要起草单位。" />
	<title>JOYOU·中宇卫浴</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" media="screen, projection" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/object.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/iepngfix_tilebg.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/qm.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js" type="text/javascript"></script>
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
<!--
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home.png" width="55" height="14" /></a>
			<a href="<?php echo $this->createUrl('about/index')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about.png" width="56" height="14" /></a>
				<div>
					<a href="<?php echo $this->createUrl('about/index')?>">集团简介</a>
					<a href="<?php echo $this->createUrl('about/management')?>">管理团队</a>
					<a href="<?php echo $this->createUrl('honor/index')?>">企业荣誉</a>
					<a href="<?php echo $this->createUrl('about/strategy')?>">发展战略</a>
					<a href="<?php echo $this->createUrl('about/history')?>">成长历程</a>
					<a href="<?php echo $this->createUrl('about/organization')?>">组织架构</a>
					<a href="<?php echo $this->createUrl('about/cultrue')?>">企业文化</a>
					<a href="<?php echo $this->createUrl('about/quality')?>">生产与质量</a>
					<a href="<?php echo $this->createUrl('jobs/index')?>">招贤纳士</a>
					<a href="<?php echo $this->createUrl('about/video')?>">视频展播</a>
					<a href="<?php echo $this->createUrl('about/contact')?>">联系我们</a>
				</div>
				<a href="<?php echo $this->createUrl('news/index')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/news.png" width="56" height="14" /></a>
				<div>
					<a href="<?php echo $this->createUrl('news/index')?>">公司新闻</a>
					<a href="<?php echo $this->createUrl('news/industry')?>">行业新闻</a>
				</div>
				<a href="<?php echo $this->createUrl('product/index')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pro.png" width="56" height="14" /></a>
				<div>
					<a href="<?php echo $this->createUrl('product/index')?>">产品目录</a>
					<a href="<?php echo $this->createUrl('product/new')?>">新品推荐</a>
					<a href="<?php echo $this->createUrl('product/experience')?>">产品体验</a>
				</div>
				<a href="<?php echo $this->createUrl('sales/index')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sale.png" width="55" height="14" /></a>
				<div>
					<a href="<?php echo $this->createUrl('sales/index')?>">销售网络</a>
					<a href="<?php echo $this->createUrl('sales/terminal_show')?>">终端展示</a>
					<a href="<?php echo $this->createUrl('sales/case')?>">工程案例</a>
					<a href="<?php echo $this->createUrl('sales/brand')?>">品牌优势</a>
					<a href="<?php echo $this->createUrl('sales/join_conditions')?>">加盟条件</a>
					<a href="<?php echo $this->createUrl('sales/join_process')?>">加盟流程</a>
				</div>
				<a href="<?php echo $this->createUrl('knowledge/index')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/service.png" width="56" height="14" /></a>
				<div>
					<a href="<?php echo $this->createUrl('knowledge/index')?>">保养常识</a>
				</div>
				<a href="<?php echo $this->createUrl('dealer/index')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/dealer.png" width="69" height="14" /></a>
				<div>
					<a href="<?php echo $this->createUrl('dealer/index')?>">经销商风采</a>
					<a href="<?php echo $this->createUrl('dealer/login')?>">经销商登录</a>
				</div>
			</div> <!-- should be generated by server -->
-->
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
