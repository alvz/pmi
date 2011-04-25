<?php
$this->breadcrumbs = array(
	'Reftanggungans' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Reftanggungan', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftanggungan', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Reftanggungan</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>