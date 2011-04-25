<?php
$this->breadcrumbs = array(
	'Layanpolis' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Layanpoli', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Layanpoli', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Layanpoli', 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' Layanpoli', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Layanpoli', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Layanpoli #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'noreg',
'diag',
'tekanandarahl',
'tekanandarahh',
'denyutnadil',
'denyutnadih',
'suhu',
'tb',
'bb',
'kesadaran',
'respirasi',
'bab',
'bak',
'vomitting',
'ivfd',
'diagdokterp',
'diagdokters1',
'diagdokters2',
'diagdokters3',
'diagdokters4',
'cat_khusus',
	),
)); ?>

