<?php
$this->breadcrumbs = array(
	'Layanpolis' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Layanpoli', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Layanpoli', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Layanpoli', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Layanpoli', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Layanpoli #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>