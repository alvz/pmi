<?php
$this->breadcrumbs = array(
	'Mspasien4s' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Mspasien4', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Mspasien4', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Mspasien4</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>