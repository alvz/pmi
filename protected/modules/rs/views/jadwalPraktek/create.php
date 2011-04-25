<?php
$this->breadcrumbs = array(
	'Jadwal Prakteks' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' JadwalPraktek', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' JadwalPraktek', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> JadwalPraktek</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>