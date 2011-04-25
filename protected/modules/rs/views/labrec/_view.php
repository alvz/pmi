<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('kd_pasien')); ?>:
	<?php echo GxHtml::encode($data->kd_pasien); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kd_lab')); ?>:
	<?php echo GxHtml::encode($data->kd_lab); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tgl_masuk')); ?>:
	<?php echo GxHtml::encode($data->tgl_masuk); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tgl_lab')); ?>:
	<?php echo GxHtml::encode($data->tgl_lab); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jenis')); ?>:
	<?php echo GxHtml::encode($data->jenis); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('register')); ?>:
	<?php echo GxHtml::encode($data->register); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('kd_dokter')); ?>:
	<?php echo GxHtml::encode($data->kd_dokter); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('keterangan')); ?>:
	<?php echo GxHtml::encode($data->keterangan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nm_dokter')); ?>:
	<?php echo GxHtml::encode($data->nm_dokter); ?>
	<br />
	*/ ?>

</div>