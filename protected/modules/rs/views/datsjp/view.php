<?php
$this->breadcrumbs = array(
	'Datsjps' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Datsjp', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Datsjp', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Datsjp', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Datsjp', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Datsjp', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Datsjp #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'nosjp',
'tglsjp',
array(
			'label' => 'Mspasien2',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->nokapst0)), array('mspasien2/view', 'id' => GxActiveRecord::extractPkValue($model->nokapst0, true))),
			),
	),
)); ?>

