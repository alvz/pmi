<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nomr')); ?>:
	<?php echo GxHtml::encode($data->nomr); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nama')); ?>:
	<?php echo GxHtml::encode($data->nama); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sex')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->sex0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:
	<?php echo GxHtml::encode($data->tempat_lahir); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:
	<?php echo GxHtml::encode($data->tgl_lahir); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alamat')); ?>:
	<?php echo GxHtml::encode($data->alamat); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('agama')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->agama0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('hp')); ?>:
	<?php echo GxHtml::encode($data->hp); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pekerjaan')); ?>:
	<?php echo GxHtml::encode($data->pekerjaan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pendidikan')); ?>:
	<?php echo GxHtml::encode($data->pendidikan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->status0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('penanggung_jawab')); ?>:
	<?php echo GxHtml::encode($data->penanggung_jawab); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('hub_dgn_pasien')); ?>:
	<?php echo GxHtml::encode($data->hub_dgn_pasien); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dati')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->dati0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kec')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->kec0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tarif')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tarif0)); ?>
	<br />
	*/ ?>

</div>