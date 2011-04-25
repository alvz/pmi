<?php
$this->breadcrumbs=array(
	'Mspasiens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mspasien', 'url'=>array('index')),
	array('label'=>'Create Mspasien', 'url'=>array('create')),
	array('label'=>'View Mspasien', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mspasien', 'url'=>array('admin')),
);
?>

<h1>Update Mspasien <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>