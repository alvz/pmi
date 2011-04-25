<?php
$this->breadcrumbs = array(
	'Ref Kode Tambahs' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' RefKodeTambah', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' RefKodeTambah', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' RefKodeTambah', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' RefKodeTambah', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> RefKodeTambah #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>