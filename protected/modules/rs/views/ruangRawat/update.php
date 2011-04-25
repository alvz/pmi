<?php
$this->breadcrumbs = array(
	'Ruang Rawats' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' RuangRawat', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' RuangRawat', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' RuangRawat', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' RuangRawat', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> RuangRawat #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>