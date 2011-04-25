<?php
$this->breadcrumbs=array(
	'Datregisters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Datregister', 'url'=>array('index')),
	array('label'=>'Create Datregister', 'url'=>array('create')),
	array('label'=>'Update Datregister', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Datregister', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Datregister', 'url'=>array('admin')),
);
?>

<h1>View Datregister #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'noreg',
		'idmr',
		'tgl',
		'jam_masuk',
		'jenis_tanggungan',
		'no_rujuk',
		'ref_rujuk',
		'asuransi',
		'poli',
		'nosjp',
		'biaya_admin',
		'dokter',
		'type',
		'tglplg',
		'jamplg',
		'alasankeluar',
	),
)); ?>
