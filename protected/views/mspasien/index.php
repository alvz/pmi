<?php
$this->breadcrumbs=array(
	'Mspasiens',
);

$this->menu=array(
	array('label'=>'Create Mspasien', 'url'=>array('create')),
	array('label'=>'Manage Mspasien', 'url'=>array('admin')),
);
?>

<h1>Mspasiens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
