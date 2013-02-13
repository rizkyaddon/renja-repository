<?php
/* @var $this MasterDataKementrianController */
/* @var $model MasterDataKementrian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_data_kementrian'); ?>
		<?php echo $form->textField($model,'id_data_kementrian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visi'); ?>
		<?php echo $form->textField($model,'visi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'misi'); ?>
		<?php echo $form->textField($model,'misi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sasaran_strategis'); ?>
		<?php echo $form->textField($model,'sasaran_strategis',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->