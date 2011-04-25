<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('tgldp')); ?>:
	<?php echo GxHtml::encode($data->tgldp); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nokwitansi')); ?>:
	<?php echo GxHtml::encode($data->nokwitansi); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nilai')); ?>:
	<?php echo GxHtml::encode($data->nilai); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('via')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->via0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bank')); ?>:
	<?php echo GxHtml::encode($data->bank); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nokartu')); ?>:
	<?php echo GxHtml::encode($data->nokartu); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('pcharge')); ?>:
	<?php echo GxHtml::encode($data->pcharge); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rpcharge')); ?>:
	<?php echo GxHtml::encode($data->rpcharge); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jumlah')); ?>:
	<?php echo GxHtml::encode($data->jumlah); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('pasien')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->pasien0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('uraian1')); ?>:
	<?php echo GxHtml::encode($data->uraian1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('uraian2')); ?>:
	<?php echo GxHtml::encode($data->uraian2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('atasnama')); ?>:
	<?php echo GxHtml::encode($data->atasnama); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('penerima')); ?>:
	<?php echo GxHtml::encode($data->penerima); ?>
	<br />
	*/ ?>

</div>