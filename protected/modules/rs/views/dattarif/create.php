<?php
$this->breadcrumbs = array(
	'Dattarifs' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Dattarif', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Dattarif', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Dattarif</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>