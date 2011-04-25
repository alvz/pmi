<?php
$this->breadcrumbs = array(
	'Refkeluars' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refkeluar', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refkeluar', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refkeluar</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>