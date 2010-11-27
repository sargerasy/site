<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'honor-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
		'enctype'=>'multipart/form-data',
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo CHtml::activeFileField($model, 'image'); ?>
		<?php echo CHtml::linkButton('upload', array('href'=>$this->createUrl('honor/upload'))); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<?php echo $form->hiddenField($model, 'simage') ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
