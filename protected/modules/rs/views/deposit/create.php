<?php
$this->breadcrumbs = array(
	'Deposits' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Deposit', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Deposit', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Deposit</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>