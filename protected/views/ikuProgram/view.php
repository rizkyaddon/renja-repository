<?php
/* @var $this IkuProgramController */
/* @var $model IkuProgram */

$this->breadcrumbs=array(
	'Iku Programs'=>array('index'),
	$model->id_iku_program,
);

$this->menu=array(
	array('label'=>'List IkuProgram', 'url'=>array('index')),
	array('label'=>'Create IkuProgram', 'url'=>array('create')),
	array('label'=>'Update IkuProgram', 'url'=>array('update', 'id'=>$model->id_iku_program)),
	array('label'=>'Delete IkuProgram', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_iku_program),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IkuProgram', 'url'=>array('admin')),
);
?>

<h1>View IkuProgram #<?php echo $model->id_iku_program; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_iku_program',
		'id_sasaran_program',
		'iku_program',
	),
)); ?>
