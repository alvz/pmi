<?php
$this->breadcrumbs = array(
	'Refpembayarans',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refpembayaran', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refpembayaran', 'url' => array('admin')),
);
?>

<h1>Refpembayarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 