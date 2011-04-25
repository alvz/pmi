<?php
$this->breadcrumbs = array(
	'Refperuntukans' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Refperuntukan', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Refperuntukan', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Refperuntukan', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Refperuntukan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Refperuntukan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>