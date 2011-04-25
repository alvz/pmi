<?php
$this->breadcrumbs = array(
	'Dattindakans' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Dattindakan', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Dattindakan', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Dattindakan</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>