<?php
$this->breadcrumbs = array(
	'Labrecs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Labrec', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Labrec', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Labrec</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>