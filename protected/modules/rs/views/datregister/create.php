<?php
$this->breadcrumbs = array(
	'Datregisters' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'dList') . ' Datregister', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Datregister', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Datregister</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>