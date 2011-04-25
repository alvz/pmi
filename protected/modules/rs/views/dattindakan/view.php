<?php
$this->breadcrumbs = array(
	'Dattindakans' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Dattindakan', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Dattindakan', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Dattindakan', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Dattindakan', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Dattindakan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Dattindakan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'Datregister',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idreg0)), array('datregister/view', 'id' => GxActiveRecord::extractPkValue($model->idreg0, true))),
			),
array(
			'label' => 'Dattarif',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->kdtindakan0)), array('dattarif/view', 'id' => GxActiveRecord::extractPkValue($model->kdtindakan0, true))),
			),
'qty',
'harga_satuan',
	),
)); ?>

