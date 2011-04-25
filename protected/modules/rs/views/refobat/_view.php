<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('kdobat')); ?>:
	<?php echo GxHtml::encode($data->kdobat); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('namaobat')); ?>:
	<?php echo GxHtml::encode($data->namaobat); ?>
	<br />

</div>