<?php
/* @var $this SatuanKerjaController */
/* @var $model SatuanKerja */

$this->breadcrumbs=array(
	'Satuan Kerjas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SatuanKerja', 'url'=>array('index')),
	array('label'=>'Manage SatuanKerja', 'url'=>array('admin')),
);
?>

<h1>Create SatuanKerja</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>