<?php
$this->breadcrumbs = array(
	'Ruang Rawats' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' RuangRawat', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' RuangRawat', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> RuangRawat</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>