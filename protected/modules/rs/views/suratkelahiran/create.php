<?php
$this->breadcrumbs = array(
	'Suratkelahirans' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Suratkelahiran', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Suratkelahiran', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Suratkelahiran</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>