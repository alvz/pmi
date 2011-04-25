<?php
$this->breadcrumbs = array(
	'Mspasien2s' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Mspasien2', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Mspasien2', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Pasien</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>