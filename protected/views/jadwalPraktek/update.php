<?php
$this->breadcrumbs = array(
	'Jadwal Prakteks' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' JadwalPraktek', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' JadwalPraktek', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' JadwalPraktek', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Manage') . ' JadwalPraktek', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> JadwalPraktek #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>