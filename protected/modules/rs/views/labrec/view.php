<?php
$this->breadcrumbs = array(
	'Labrecs' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Labrec', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Labrec', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Labrec', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Labrec', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Labrec', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Labrec #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'kd_pasien',
'kd_lab',
'tgl_masuk',
'tgl_lab',
'jenis',
'register',
'kd_dokter',
'keterangan',
'nm_dokter',
	),
)); ?>

