<?php
$this->breadcrumbs = array(
	'Refobats',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Refobat', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Refobat', 'url' => array('admin')),
);
?>

<h1>Refobats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 