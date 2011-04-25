<?php
$this->breadcrumbs = array(
	'Ref Kode Tambahs',
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' RefKodeTambah', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' RefKodeTambah', 'url' => array('admin')),
);
?>

<h1>Ref Kode Tambahs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 