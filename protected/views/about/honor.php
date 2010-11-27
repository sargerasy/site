<div class="aboutxt">
	<div class="tabchange">
		<div id="tb_" class="tb_">
			<ul>
				<?php $years = Honor::getYears(); ?>
				<?php foreach ($years as $year) { ?>
					<li class="<?php echo ($year===$curYear)?"hovertab":"normaltab" ?>"> <a href="<?php echo $this->createUrl('about/honor', array('year'=>$year)) ?>"><?php echo $year ?>年</a></li>
				<?php } ?>
			</ul>
		</div>

		<div class="tabcontent">
			<div class="dis" id="tbc_(woncent:listid/)">
				<ul class="honorlist clearfix"> 
					<?php $data = $dataProvider->getData(); ?>
					<?php foreach ($data as $item): ?>
					<li>
						<div class="honor_tit"><a href="<?php echo Yii::app()->request->baseUrl."/upload/honor/".$item->year."/".$item->image;?>" rel="clearbox[gallery=honor]"><?php echo $item->name ?></a></div>
						<div ><img src="<?php echo Yii::app()->request->baseUrl."/upload/honor/".$item->year."/".$item->simage; ?>" /></div>
					</li>
					<?php endforeach;?>
				</ul>
			</div>      
		</div>
	</div>
</div>
<div class="pager">
	<?php $num = $dataProvider->pagination->getPageCount() ?>
	<?php $cur = $dataProvider->pagination->getCurrentPage() ?>
	<a href="<?php echo ((int)$cur < 1) ? "#" : $this->createUrl($this->route, array('year'=>$curYear, 'Honor_page'=>$cur)) ?>">上一页</a>&nbsp;&nbsp;&nbsp;
	<?php for ($i = 1; $i <= $num; $i++){ ?>
		<?php if ($i === $cur+1) { ?>
		<a class="bfont"><?php echo $i ?></a>&nbsp;&nbsp;&nbsp;
		<?php  } else { ?>
		<a href="<?php echo $this->createUrl($this->route, array('year'=>$curYear, 'Honor_page'=>$i));?>"><?php echo $i?></a>
		<?php } ?>
	<?php } ?>
	<a href="<?php echo ((int)$cur < $num-1) ? $this->createUrl($this->route, array('year'=>$curYear, 'Honor_page'=>$cur+2)):"#" ?>">下一页</a>
</div>

