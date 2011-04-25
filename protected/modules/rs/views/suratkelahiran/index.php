<?php
$this->breadcrumbs = array(
	'Suratkelahirans',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' Suratkelahiran', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Suratkelahiran', 'url' => array('admin')),
);
?>

<h1>Suratkelahirans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 