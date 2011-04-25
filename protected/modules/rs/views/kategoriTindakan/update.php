<?php
$this->breadcrumbs = array(
	'Kategori Tindakans' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' KategoriTindakan', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' KategoriTindakan', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' KategoriTindakan', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' KategoriTindakan', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> KategoriTindakan #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>