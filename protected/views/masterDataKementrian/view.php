<?php
/* @var $this MasterDataKementrianController */
/* @var $model MasterDataKementrian */

$this->breadcrumbs=array(
	'Master Data Kementrians'=>array('index'),
	$model->id_data_kementrian,
);

$this->menu=array(
	array('label'=>'List MasterDataKementrian', 'url'=>array('index')),
	array('label'=>'Create MasterDataKementrian', 'url'=>array('create')),
	array('label'=>'Update MasterDataKementrian', 'url'=>array('update', 'id'=>$model->id_data_kementrian)),
	array('label'=>'Delete MasterDataKementrian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_data_kementrian),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterDataKementrian', 'url'=>array('admin')),
);
?>

<h1>View MasterDataKementrian #<?php echo $model->id_data_kementrian; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_data_kementrian',
		'visi',
		'misi',
		'sasaran_strategis',
	),
)); ?>
