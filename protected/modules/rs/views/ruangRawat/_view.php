<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ruangan')); ?>:
	<?php echo GxHtml::encode($data->ruangan); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kdruang')); ?>:
	<?php echo GxHtml::encode($data->kdruang); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('peruntukan')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->peruntukan0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kelas')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->kelas0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tarif')); ?>:
	<?php echo GxHtml::encode($data->tarif); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('foto')); ?>:
	<?php echo GxHtml::encode($data->foto); ?>
	<br />

</div>