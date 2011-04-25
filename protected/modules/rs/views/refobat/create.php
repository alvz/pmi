<?php
$this->breadcrumbs = array(
	'Refobats' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refobat', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refobat', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refobat</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>