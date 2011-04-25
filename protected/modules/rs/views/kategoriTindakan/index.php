<?php
$this->breadcrumbs = array(
	'Kategori Tindakans',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' KategoriTindakan', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' KategoriTindakan', 'url' => array('admin')),
);
?>

<h1>Kategori Tindakans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 