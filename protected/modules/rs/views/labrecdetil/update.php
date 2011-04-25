<?php
$this->breadcrumbs = array(
	'Labrecdetils' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Labrecdetil', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Labrecdetil', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Labrecdetil', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Labrecdetil', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Labrecdetil #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>