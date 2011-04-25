<?php
$this->breadcrumbs = array(
	'Refruangs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refruang', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refruang', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refruang</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>