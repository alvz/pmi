<?php
$this->breadcrumbs = array(
	'Refpembayarans' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Refpembayaran', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Refpembayaran', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Refpembayaran', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' Refpembayaran', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Refpembayaran #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>