<?php
$this->breadcrumbs = array(
	'Ruang Rawats',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' RuangRawat', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' RuangRawat', 'url' => array('admin')),
);
?>

<h1>Ruang Rawats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 