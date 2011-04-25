<?php
$this->breadcrumbs = array(
	'Kategori Tindakans' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' KategoriTindakan', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' KategoriTindakan', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> KategoriTindakan</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>