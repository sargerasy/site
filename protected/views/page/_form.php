<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model, 'type', $model->getTypeOptions(), array('id'=>'type-select')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->textField($model,'path',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row" id="content-field">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php $this->widget('application.extensions.fckeditor.FCKEditorWidget', array(
			"model" => $model,
			"attribute" => 'content',
			"height" => '400px',
			"toolbarSet" => 'Default',
			"width" => '100%',
			"fckeditor" => Yii::app()->basePath."/../fckeditor/fckeditor.php",
			"fckBasePath" => Yii::app()->baseUrl."/fckeditor/",
			"config" => array('ToolbarStartExpanded'=>true),
		));
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textArea($model,'keywords',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'layout'); ?>
		<?php echo $form->textField($model,'layout',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'layout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view'); ?>
		<?php echo $form->textField($model,'view',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'view'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
$(document).ready(function($) {
	if ($("#type-select").val() == 2) {
		$("#content-field").hide();
	}

	$("#type-select").change(function() {
		if ($("#type-select").val() == 2){
			$("#content-field").hide();
		} else {
			$("#content-field").show();
		};
	});
});
</script>
