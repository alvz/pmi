<?php
$this->breadcrumbs = array(
	'Labrecdetils' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Labrecdetil', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Labrecdetil', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Labrecdetil</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>