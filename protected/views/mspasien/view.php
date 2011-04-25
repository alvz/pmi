<?php
$this->breadcrumbs=array(
	'Mspasiens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mspasien', 'url'=>array('index')),
	array('label'=>'Create Mspasien', 'url'=>array('create')),
	array('label'=>'Update Mspasien', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mspasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mspasien', 'url'=>array('admin')),
);
?>

<h1>View Mspasien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'tgl_lahir',
		'tempat_lahir',
		'agama',
		'sex',
		'alamat',
		'pekerjaan',
		'pendidikan',
		'status',
		'penanggung_jawab',
		'hub_dgn_pasien',
	),
)); ?>
