<?php
$this->breadcrumbs = array(
	'Refpembayarans' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refpembayaran', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refpembayaran', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refpembayaran</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>