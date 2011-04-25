<?php
$this->breadcrumbs=array(
	'Datregisters'=>array('index'),
	$model->idregister,
);

$this->menu=array(
	array('label'=>'List Datregister', 'url'=>array('index')),
	array('label'=>'Create Datregister', 'url'=>array('create')),
	array('label'=>'Update Datregister', 'url'=>array('update', 'id'=>$model->idregister)),
	array('label'=>'Delete Datregister', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idregister),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Datregister', 'url'=>array('admin')),
);
?>

<h1>View Datregister #<?php echo $model->idregister; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idregister',
		'idmr',
		'tgl',
		'jenis_tanggungan',
		'no_rujuk',
		'ref_rujuk',
		'hak_kls_rwt',
		'poli',
		'nosjp',
		'biaya_admin',
	),
)); ?>
