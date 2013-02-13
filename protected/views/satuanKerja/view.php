<?php
/* @var $this SatuanKerjaController */
/* @var $model SatuanKerja */

$this->breadcrumbs=array(
	'Satuan Kerjas'=>array('index'),
	$model->id_satuan_kerja,
);

$this->menu=array(
	array('label'=>'List SatuanKerja', 'url'=>array('index')),
	array('label'=>'Create SatuanKerja', 'url'=>array('create')),
	array('label'=>'Update SatuanKerja', 'url'=>array('update', 'id'=>$model->id_satuan_kerja)),
	array('label'=>'Delete SatuanKerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_satuan_kerja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SatuanKerja', 'url'=>array('admin')),
);
?>

<h1>View SatuanKerja #<?php echo $model->id_satuan_kerja; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_satuan_kerja',
		'kode_satuan_kerja',
		'satuan_kerja',
		'parent_id',
		'level',
	),
)); ?>
