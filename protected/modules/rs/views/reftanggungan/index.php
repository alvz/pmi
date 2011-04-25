<?php
$this->breadcrumbs = array(
	'Reftanggungans',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Reftanggungan', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Reftanggungan', 'url' => array('admin')),
);
?>

<h1>Reftanggungans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 