<?php
$this->breadcrumbs = array(
	'Labds' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Labd', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Labd', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Labd</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>