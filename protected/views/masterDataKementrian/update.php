<?php
/* @var $this MasterDataKementrianController */
/* @var $model MasterDataKementrian */

$this->breadcrumbs=array(
	'Master Data Kementrians'=>array('index'),
	$model->id_data_kementrian=>array('view','id'=>$model->id_data_kementrian),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterDataKementrian', 'url'=>array('index')),
	array('label'=>'Create MasterDataKementrian', 'url'=>array('create')),
	array('label'=>'View MasterDataKementrian', 'url'=>array('view', 'id'=>$model->id_data_kementrian)),
	array('label'=>'Manage MasterDataKementrian', 'url'=>array('admin')),
);
?>

<h1>Update MasterDataKementrian <?php echo $model->id_data_kementrian; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>