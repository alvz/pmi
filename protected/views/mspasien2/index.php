<?php
$this->breadcrumbs = array(
	'Mspasien2s',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Mspasien2', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Mspasien2', 'url' => array('admin')),
);
?>

<h1>Mspasien2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 