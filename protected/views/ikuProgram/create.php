<?php
/* @var $this IkuProgramController */
/* @var $model IkuProgram */

$this->breadcrumbs=array(
	'Iku Programs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IkuProgram', 'url'=>array('index')),
	array('label'=>'Manage IkuProgram', 'url'=>array('admin')),
);
?>

<h1>Create IkuProgram</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>