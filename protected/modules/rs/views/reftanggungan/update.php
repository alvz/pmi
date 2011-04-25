<?php
$this->breadcrumbs = array(
	'Reftanggungans' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Reftanggungan', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Reftanggungan', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Reftanggungan', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Reftanggungan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Reftanggungan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>