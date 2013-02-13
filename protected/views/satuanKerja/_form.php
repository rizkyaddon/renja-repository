<?php
/* @var $this SatuanKerjaController */
/* @var $model SatuanKerja */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'satuan-kerja-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_satuan_kerja'); ?>
		<?php echo $form->textField($model,'kode_satuan_kerja'); ?>
		<?php echo $form->error($model,'kode_satuan_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'satuan_kerja'); ?>
		<?php echo $form->textField($model,'satuan_kerja',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'satuan_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->