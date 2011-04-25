<?php
$this->breadcrumbs = array(
	'Reftypes' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Reftype', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftype', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Reftype</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>