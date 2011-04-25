<?php
$this->breadcrumbs = array(
	'Obats' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Obat', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Obat', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Obat</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>