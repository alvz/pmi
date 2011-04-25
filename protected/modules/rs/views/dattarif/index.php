<?php
$this->breadcrumbs = array(
	'Dattarifs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Dattarif', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Dattarif', 'url' => array('admin')),
);
?>

<h1>Dattarifs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 