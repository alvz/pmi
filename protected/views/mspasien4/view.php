<?php
$this->breadcrumbs = array(
	'Mspasien4s' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Mspasien4', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Mspasien4', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Mspasien4', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Mspasien4', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Mspasien4', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Mspasien4 #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'nama',
array(
			'label' => 'Refagama',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->agama0)), array('refagama/view', 'id' => GxActiveRecord::extractPkValue($model->agama0, true))),
			),
	),
)); ?>

