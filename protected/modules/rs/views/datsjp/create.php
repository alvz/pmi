<?php
$this->breadcrumbs = array(
	'Datsjps' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Datsjp', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Datsjp', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Datsjp</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>