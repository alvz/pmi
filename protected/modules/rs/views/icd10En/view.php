<?php
$this->breadcrumbs = array(
	'Icd10 Ens' => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' Icd10En', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' Icd10En', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' Icd10En', 'url'=>array('update', 'id' => $model->diagnosis_code)),
	array('label'=>Yii::t('app', 'Delete') . ' Icd10En', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->diagnosis_code), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' Icd10En', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View'); ?> Icd10En #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'diagnosis_code',
'description',
'class_sub',
'type',
'inclusive',
'exclusive',
'notes',
'std_code',
'sub_level',
'remarks',
'extra_codes',
'extra_subclass',
	),
)); ?>

