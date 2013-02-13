<?php
/* @var $this IkuProgramController */
/* @var $model IkuProgram */

$this->breadcrumbs=array(
	'Iku Programs'=>array('index'),
	$model->id_iku_program=>array('view','id'=>$model->id_iku_program),
	'Update',
);

$this->menu=array(
	array('label'=>'List IkuProgram', 'url'=>array('index')),
	array('label'=>'Create IkuProgram', 'url'=>array('create')),
	array('label'=>'View IkuProgram', 'url'=>array('view', 'id'=>$model->id_iku_program)),
	array('label'=>'Manage IkuProgram', 'url'=>array('admin')),
);
?>

<h1>Update IkuProgram <?php echo $model->id_iku_program; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>