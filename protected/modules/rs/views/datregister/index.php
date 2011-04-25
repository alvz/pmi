<?php
$this->breadcrumbs = array(
	'Datregisters',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Datregister', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Datregister', 'url' => array('admin')),
);
?>

<h1>Datregisters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 