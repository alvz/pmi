<?php
$this->breadcrumbs = array(
	'Reftindakans' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Reftindakan', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftindakan', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Reftindakan</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>