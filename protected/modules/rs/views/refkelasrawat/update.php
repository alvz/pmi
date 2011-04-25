<?php
$this->breadcrumbs = array(
	'Refkelasrawats' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Refkelasrawat', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Refkelasrawat', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Refkelasrawat', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Refkelasrawat', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Refkelasrawat #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>