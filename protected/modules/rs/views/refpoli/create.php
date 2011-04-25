<?php
$this->breadcrumbs = array(
	'Refpolis' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refpoli', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refpoli', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refpoli</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>