<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('dokter')); ?>:
	<?php echo GxHtml::encode($data->dokter); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('spesialis')); ?>:
	<?php echo GxHtml::encode($data->spesialis); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alamat')); ?>:
	<?php echo GxHtml::encode($data->alamat); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nohp')); ?>:
	<?php echo GxHtml::encode($data->nohp); ?>
	<br />

</div>