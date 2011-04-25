<?php
$this->breadcrumbs = array(
	'Labds' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Labd', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Labd', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Labd', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Labd', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Labd', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Labd #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
array(
			'label' => 'Labh',
			'type' => 'raw',
			'value' => GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idlabh0)), array('labh/view', 'id' => GxActiveRecord::extractPkValue($model->idlabh0, true))),
			),
'kd_labh',
'kd_labd',
'ur_labd',
'norm_value',
	),
)); ?>

