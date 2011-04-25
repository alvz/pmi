<?php
$this->breadcrumbs = array(
	'Refkelasrawats',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refkelasrawat', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refkelasrawat', 'url' => array('admin')),
);
?>

<h1>Refkelasrawats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 