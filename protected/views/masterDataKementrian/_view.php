<?php
/* @var $this MasterDataKementrianController */
/* @var $data MasterDataKementrian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_data_kementrian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_data_kementrian), array('view', 'id'=>$data->id_data_kementrian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visi')); ?>:</b>
	<?php echo CHtml::encode($data->visi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('misi')); ?>:</b>
	<?php echo CHtml::encode($data->misi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sasaran_strategis')); ?>:</b>
	<?php echo CHtml::encode($data->sasaran_strategis); ?>
	<br />


</div>