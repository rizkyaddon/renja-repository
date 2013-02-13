<?php
/* @var $this SatuanKerjaController */
/* @var $model SatuanKerja */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_satuan_kerja'); ?>
		<?php echo $form->textField($model,'id_satuan_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_satuan_kerja'); ?>
		<?php echo $form->textField($model,'kode_satuan_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satuan_kerja'); ?>
		<?php echo $form->textField($model,'satuan_kerja',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->