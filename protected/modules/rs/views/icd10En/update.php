<?php
$this->breadcrumbs = array(
	'Icd10 Ens' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Icd10En', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Icd10En', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Icd10En', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Icd10En', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Icd10En #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>