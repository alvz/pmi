<?php
$this->breadcrumbs = array(
	'Refkecs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refkec', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refkec', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refkec</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>