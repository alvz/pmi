<?php
$this->breadcrumbs = array(
	'Labhs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Labh', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Labh', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Labh</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>