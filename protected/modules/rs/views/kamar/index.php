<?php
$this->breadcrumbs = array(
	'Kamars',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Kamar', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Kamar', 'url' => array('admin')),
);
?>

<h1>Kamars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 