<?php
$this->breadcrumbs = array(
	'Mspasien2s' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Mspasien2', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Mspasien2', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Mspasien2', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Mspasien2', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Mspasien2 #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>