<?php
$this->breadcrumbs = array(
	'Labhs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Labh', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Labh', 'url' => array('admin')),
);
?>

<h1>Labhs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 