<?php
$this->breadcrumbs = array(
	'Mspasien2s' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Mspasien2', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Mspasien2', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Mspasien2', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Mspasien2', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Mspasien2', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Mspasien2 #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'nomr',
'nama',
'sex',
'tempat_lahir',
'tgl_lahir',
'alamat',
array(
			'label' => 'Refagama',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->agama0)), array('refagama/view', 'id' => GxActiveRecord::extractPkValue($model->agama0, true))),
			),
'hp',
'pekerjaan',
'pendidikan',
'status',
'penanggung_jawab',
'hub_dgn_pasien',
array(
			'label' => 'Refdati',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->dati0)), array('refdati/view', 'id' => GxActiveRecord::extractPkValue($model->dati0, true))),
			),
	),
)); ?>

