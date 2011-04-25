<?php
$this->breadcrumbs = array(
	'Tindakan Igds',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' TindakanIgd', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' TindakanIgd', 'url' => array('admin')),
);
?>

<h1>Tindakan Igds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 