<?php
/* @var $this IkuProgramController */
/* @var $data IkuProgram */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_iku_program')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_iku_program), array('view', 'id'=>$data->id_iku_program)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sasaran_program')); ?>:</b>
	<?php echo CHtml::encode($data->id_sasaran_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iku_program')); ?>:</b>
	<?php echo CHtml::encode($data->iku_program); ?>
	<br />


</div>