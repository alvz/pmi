<?php
$this->breadcrumbs=array(
	'Mspasiens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mspasien', 'url'=>array('index')),
	array('label'=>'Manage Mspasien', 'url'=>array('admin')),
);
?>

<h1>Create Mspasien</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>