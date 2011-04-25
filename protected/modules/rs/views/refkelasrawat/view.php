<?php
$this->breadcrumbs = array(
	'Refkelasrawats' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Refkelasrawat', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Refkelasrawat', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Refkelasrawat', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Refkelasrawat', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Refkelasrawat', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Refkelasrawat #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'idkelas',
'kelas',
'lokasi',
'tarif',
	),
)); ?>

