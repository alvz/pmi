<?php
$this->breadcrumbs = array(
	'Tindakan Igds' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' TindakanIgd', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' TindakanIgd', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> TindakanIgd</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>