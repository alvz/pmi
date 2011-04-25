<?php
$this->breadcrumbs = array(
	'Obats',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Obat', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Obat', 'url' => array('admin')),
);
?>

<h1>Obats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 