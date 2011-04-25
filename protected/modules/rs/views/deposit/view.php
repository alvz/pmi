<?php
$this->breadcrumbs = array(
	'Deposits' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Deposit', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Deposit', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Deposit', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Deposit', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Deposit', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Deposit #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'tgldp',
'nokwitansi',
'nilai',
array(
			'label' => 'Refpembayaran',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->via0)), array('refpembayaran/view', 'id' => GxActiveRecord::extractPkValue($model->via0, true))),
			),
'bank',
'nokartu',
'pcharge',
'rpcharge',
'jumlah',
array(
			'label' => 'Mspasien2',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->pasien0)), array('mspasien2/view', 'id' => GxActiveRecord::extractPkValue($model->pasien0, true))),
			),
'uraian1',
'uraian2',
'atasnama',
'penerima',
	),
)); ?>

