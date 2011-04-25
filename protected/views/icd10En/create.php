<?php
$this->breadcrumbs = array(
	'Icd10 Ens' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Icd10En', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Icd10En', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Icd10En</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>