<?php
/* @var $this SatuanKerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Satuan Kerjas',
);

$this->menu=array(
	array('label'=>'Create SatuanKerja', 'url'=>array('create')),
	array('label'=>'Manage SatuanKerja', 'url'=>array('admin')),
);
?>

<h1>Satuan Kerjas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
