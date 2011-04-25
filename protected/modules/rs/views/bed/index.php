<?php
$this->breadcrumbs = array(
	'Beds',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Bed', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Bed', 'url' => array('admin')),
);
?>

<h1>Beds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 