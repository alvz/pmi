<?php
$this->breadcrumbs = array(
	'Tindakan Igds' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' TindakanIgd', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' TindakanIgd', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' TindakanIgd', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' TindakanIgd', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> TindakanIgd #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>