<?php
$this->breadcrumbs = array(
	'Mspasien4s' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Mspasien4', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Mspasien4', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Mspasien4', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Mspasien4', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Mspasien4 #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>