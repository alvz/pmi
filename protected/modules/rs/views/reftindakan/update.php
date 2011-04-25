<?php
$this->breadcrumbs = array(
	'Reftindakans' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Reftindakan', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Reftindakan', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Reftindakan', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Reftindakan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Reftindakan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>