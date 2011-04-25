<?php
$this->breadcrumbs = array(
	'Beds' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Bed', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Bed', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Bed', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Bed', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Bed', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Bed #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'Kamar',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idkamar0)), array('kamar/view', 'id' => GxActiveRecord::extractPkValue($model->idkamar0, true))),
			),
'nomor',
'terisi',
	),
)); ?>

