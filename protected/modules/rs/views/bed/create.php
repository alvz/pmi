<?php
$this->breadcrumbs = array(
	'Beds' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Bed', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Bed', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Bed</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>