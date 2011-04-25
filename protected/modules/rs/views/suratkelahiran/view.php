<?php
$this->breadcrumbs = array(
	'Suratkelahirans' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Suratkelahiran', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Suratkelahiran', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Suratkelahiran', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Suratkelahiran', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Suratkelahiran', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Suratkelahiran #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'tgl',
'nosurat',
'nama',
'ibu',
'ayah',
'alamat1',
'alamat2',
'tgllahir',
'jam',
'berat',
'panjang',
'hidupmati',
'dokter',
'bidan',
	),
)); ?>

