<?php
$this->breadcrumbs = array(
	'Refdatis' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Refdati', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Refdati', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Refdati</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>