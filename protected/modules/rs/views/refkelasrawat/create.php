<?php
$this->breadcrumbs = array(
	'Refkelasrawats' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refkelasrawat', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refkelasrawat', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refkelasrawat</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>