<?php
$this->breadcrumbs = array(
	'Dattindakans' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Dattindakan', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Dattindakan', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Dattindakan', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Dattindakan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Dattindakan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>