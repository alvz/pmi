<?php
$this->breadcrumbs = array(
	'Suratkelahirans' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Suratkelahiran', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Suratkelahiran', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Suratkelahiran', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Suratkelahiran', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Suratkelahiran #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>