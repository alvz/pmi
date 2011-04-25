<?php
$this->breadcrumbs = array(
	'Ref Kode Tambahs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' RefKodeTambah', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' RefKodeTambah', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> RefKodeTambah</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>