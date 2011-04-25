<?php
$this->breadcrumbs = array(
	'Datrrwts',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Datrrwt', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Datrrwt', 'url' => array('admin')),
);
?>

<h1>Datrrwts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 