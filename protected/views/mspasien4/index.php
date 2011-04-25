<?php
$this->breadcrumbs = array(
	'Mspasien4s',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Mspasien4', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Mspasien4', 'url' => array('admin')),
);
?>

<h1>Mspasien4s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 