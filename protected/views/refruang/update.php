<?php
$this->breadcrumbs = array(
	'Refruangs' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Refruang', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Refruang', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Refruang', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Refruang', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Refruang #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>