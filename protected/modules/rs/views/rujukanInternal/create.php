<?php
$this->breadcrumbs = array(
	'Rujukan Internals' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' RujukanInternal', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' RujukanInternal', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> RujukanInternal</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>