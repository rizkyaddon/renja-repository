<?php
/* @var $this SatuanKerjaController */
/* @var $data SatuanKerja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_satuan_kerja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_satuan_kerja), array('view', 'id'=>$data->id_satuan_kerja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_satuan_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->kode_satuan_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('satuan_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->satuan_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />


</div>