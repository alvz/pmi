<?php
$this->breadcrumbs = array(
	'Obats' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Obat', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Obat', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Obat', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Obat', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Obat', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Obat #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'nomor',
'sub',
array(
			'label' => 'Refobat',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idobat0)), array('refobat/view', 'id' => GxActiveRecord::extractPkValue($model->idobat0, true))),
			),
'kode',
'obatcol',
	),
)); ?>

