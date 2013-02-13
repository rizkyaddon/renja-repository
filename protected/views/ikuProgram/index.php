<?php
/* @var $this IkuProgramController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Iku Programs',
);

$this->menu=array(
	array('label'=>'Create IkuProgram', 'url'=>array('create')),
	array('label'=>'Manage IkuProgram', 'url'=>array('admin')),
);
?>

<h1>Iku Programs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
