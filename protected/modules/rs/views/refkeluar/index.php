<?php
$this->breadcrumbs = array(
	'Refkeluars',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refkeluar', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refkeluar', 'url' => array('admin')),
);
?>

<h1>Refkeluars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 