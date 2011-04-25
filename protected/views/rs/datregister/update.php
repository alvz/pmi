<?php
$this->breadcrumbs=array(
	'Datregisters'=>array('index'),
	$model->idregister=>array('view','id'=>$model->idregister),
	'Update',
);

$this->menu=array(
	array('label'=>'List Datregister', 'url'=>array('index')),
	array('label'=>'Create Datregister', 'url'=>array('create')),
	array('label'=>'View Datregister', 'url'=>array('view', 'id'=>$model->idregister)),
	array('label'=>'Manage Datregister', 'url'=>array('admin')),
);
?>

<h1>Update Datregister <?php echo $model->idregister; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>