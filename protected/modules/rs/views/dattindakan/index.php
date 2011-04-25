<?php
$this->breadcrumbs = array(
	'Dattindakans',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Dattindakan', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Dattindakan', 'url' => array('admin')),
);
?>

<h1>Dattindakans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 