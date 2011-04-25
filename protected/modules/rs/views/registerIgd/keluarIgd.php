<?php
$this->breadcrumbs = array(
	'Register Igds' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' RegisterIgd', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' RegisterIgd', 'url' => array('admin')),
    array('label'=>Yii::t('app', 'Keluar') . ' Igd', 'url' => array('keluarIgd')),
);
?>

<h1><?php echo Yii::t('app', 'Keluar'); ?> Igd</h1>

<?php
$this->renderPartial('_formKeluarIgd', array(
		'model' => $model,
		'buttons' => 'create'));
?>