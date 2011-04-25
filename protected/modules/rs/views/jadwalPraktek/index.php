<?php
$this->breadcrumbs = array(
	'Jadwal Prakteks',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' JadwalPraktek', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' JadwalPraktek', 'url' => array('admin')),
);
?>

<h1>Jadwal Prakteks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 