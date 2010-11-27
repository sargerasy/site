<p>&nbsp;</p>
<?php $jobs = $dataProvider->getData(); ?>
<?php foreach ($jobs as $job){ ?>
<dl class="job">
	<dt><span>发表日期：[<?php echo $job->create_date; ?>]</span><?php echo $job->name; ?></dt>
	<dd>
		<table width="98%" border="0" class="tab">
			<tr>
				<td width="12%">要求性别：</td>
				<td width="37%" align="left"><?php echo $job->getSexText($job); ?></td>
				<td width="12%">年龄段：</td>
				<td width="37%" align="left"><?php echo $job->age; ?></td>
			</tr>
			<tr>
				<td width="12%">学历要求：</td>
				<td width="37%" align="left"><?php echo $job->education; ?></td>
				<td width="12%">工作经验：</td>
				<td width="37%" align="left"><?php echo $job->work_age; ?></td>
			</tr>
			<tr>
				<td width="12%">专业技能：</td>

				<td width="86%" colspan="3" align="left"><?php echo $job->profession; ?></td>
			</tr>
			<tr>
				<td width="12%">职位描述：</td>
				<td width="86%" colspan="3" align="left">
				<?php echo $job->description; ?>
				</td>
			</tr>
		</table>
		<div class="job_btn"><a href="/module/resumes/index.asp?action=产品部经理"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/job_btn.png" width="111" height="36" border="0" ALT="baixing job" /></a></div>
	</dd>
</dl>
<?php } ?>

<div class="pager">
	<?php $num = $dataProvider->pagination->getPageCount() ?>
	<?php $cur = $dataProvider->pagination->getCurrentPage() ?>
	<a href="<?php echo ((int)$cur < 1) ? "###" : $this->createUrl($this->route, array('Job_page'=>$cur)) ?>">上一页</a>&nbsp;&nbsp;&nbsp;
	<?php for ($i = 1; $i <= $num; $i++){ ?>
		<?php if ($i === $cur+1) { ?>
		<a class="bfont"><?php echo $i ?></a>&nbsp;&nbsp;&nbsp;
		<?php  } else { ?>
		<a href="<?php echo $this->createUrl($this->route, array('Job_page'=>$i));?>"><?php echo $i?></a>
		<?php } ?>
	<?php } ?>
	<a href="<?php echo ((int)$cur < $num-1) ? $this->createUrl($this->route, array('Job_page'=>$cur+2)):"###" ?>">下一页</a>
</div>

