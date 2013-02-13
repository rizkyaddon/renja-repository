<?php
/* @var $this IkuProgramController */
/* @var $model IkuProgram */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_iku_program'); ?>
		<?php echo $form->textField($model,'id_iku_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sasaran_program'); ?>
		<?php echo $form->textField($model,'id_sasaran_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iku_program'); ?>
		<?php echo $form->textField($model,'iku_program',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->