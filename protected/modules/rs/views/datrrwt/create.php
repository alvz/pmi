<?php
$this->breadcrumbs = array(
	'Datrrwts' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Datrrwt', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Datrrwt', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Datrrwt</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>