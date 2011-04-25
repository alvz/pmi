<?php
$this->breadcrumbs = array(
	'Rujukan Internals' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' RujukanInternal', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' RujukanInternal', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' RujukanInternal', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' RujukanInternal', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> RujukanInternal #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>