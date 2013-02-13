<?php
/* @var $this MasterDataKementrianController */
/* @var $model MasterDataKementrian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-data-kementrian-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_data_kementrian'); ?>
		<?php echo $form->textField($model,'id_data_kementrian'); ?>
		<?php echo $form->error($model,'id_data_kementrian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visi'); ?>
		<?php echo $form->textField($model,'visi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'visi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'misi'); ?>
		<?php echo $form->textField($model,'misi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'misi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sasaran_strategis'); ?>
		<?php echo $form->textField($model,'sasaran_strategis',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sasaran_strategis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->