<?php
$this->breadcrumbs = array(
	'Labrecdetils' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Labrecdetil', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Labrecdetil', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Labrecdetil', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Labrecdetil', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Labrecdetil', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Labrecdetil #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'kd_pasien',
'kd_lab',
'tgl_masuk',
'tgl_lab',
'hasil',
'kd_labh',
'kd_labd',
	),
)); ?>

