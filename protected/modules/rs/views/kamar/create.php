<?php
$this->breadcrumbs = array(
	'Kamars' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Kamar', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Kamar', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Kamar</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>