<?php
/* @var $this SatuanKerjaController */
/* @var $model SatuanKerja */

$this->breadcrumbs=array(
	'Satuan Kerjas'=>array('index'),
	$model->id_satuan_kerja=>array('view','id'=>$model->id_satuan_kerja),
	'Update',
);

$this->menu=array(
	array('label'=>'List SatuanKerja', 'url'=>array('index')),
	array('label'=>'Create SatuanKerja', 'url'=>array('create')),
	array('label'=>'View SatuanKerja', 'url'=>array('view', 'id'=>$model->id_satuan_kerja)),
	array('label'=>'Manage SatuanKerja', 'url'=>array('admin')),
);
?>

<h1>Update SatuanKerja <?php echo $model->id_satuan_kerja; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>