<?php
$this->breadcrumbs=array(
	'Datregisters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Datregister', 'url'=>array('index')),
	array('label'=>'Manage Datregister', 'url'=>array('admin')),
);
?>

<h1>Create Datregister</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>