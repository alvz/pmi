<?php
$this->breadcrumbs = array(
	'Refkeluars' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Refkeluar', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Refkeluar', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Refkeluar', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Refkeluar', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Refkeluar #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>