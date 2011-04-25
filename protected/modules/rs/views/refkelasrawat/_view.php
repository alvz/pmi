<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idkelas')); ?>:
	<?php echo GxHtml::encode($data->idkelas); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kelas')); ?>:
	<?php echo GxHtml::encode($data->kelas); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lokasi')); ?>:
	<?php echo GxHtml::encode($data->lokasi); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tarif')); ?>:
	<?php echo GxHtml::encode($data->tarif); ?>
	<br />

</div>