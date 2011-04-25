<?php
$this->breadcrumbs = array(
	'Refperuntukans' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refperuntukan', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refperuntukan', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refperuntukan</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>