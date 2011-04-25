<?php
$this->breadcrumbs=array(
	'Datregisters',
);

$this->menu=array(
	array('label'=>'Create Datregister', 'url'=>array('create')),
	array('label'=>'Manage Datregister', 'url'=>array('admin')),
);
?>

<h1>Datregisters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
