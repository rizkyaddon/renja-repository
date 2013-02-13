<?php
/* @var $this MasterDataKementrianController */
/* @var $model MasterDataKementrian */

$this->breadcrumbs=array(
	'Master Data Kementrians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterDataKementrian', 'url'=>array('index')),
	array('label'=>'Manage MasterDataKementrian', 'url'=>array('admin')),
);
?>

<h1>Create MasterDataKementrian</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>