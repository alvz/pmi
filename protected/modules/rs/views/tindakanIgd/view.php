<?php
$this->breadcrumbs = array(
	'Tindakan Igds' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' TindakanIgd', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' TindakanIgd', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' TindakanIgd', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' TindakanIgd', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' TindakanIgd', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> TindakanIgd #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'RegisterIgd',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idreg0)), array('registerIgd/view', 'id' => GxActiveRecord::extractPkValue($model->idreg0, true))),
			),
array(
			'label' => 'Datrrwt',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idrwt0)), array('datrrwt/view', 'id' => GxActiveRecord::extractPkValue($model->idrwt0, true))),
			),
array(
			'label' => 'Dattarif',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->kdtindakan0)), array('dattarif/view', 'id' => GxActiveRecord::extractPkValue($model->kdtindakan0, true))),
			),
'qty',
'harga_satuan',
'jns_bayar',
	),
)); ?>

