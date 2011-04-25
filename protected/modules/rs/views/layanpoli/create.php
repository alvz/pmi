<?php
$this->breadcrumbs = array(
	'Layanpolis' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Layanpoli', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Layanpoli', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Layanpoli</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>