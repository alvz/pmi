<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('idreg')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idreg0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tglmasuk')); ?>:
	<?php echo GxHtml::encode($data->tglmasuk); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jammasuk')); ?>:
	<?php echo GxHtml::encode($data->jammasuk); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ruang')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->ruang0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('kamar')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->kamar0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('bed')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->bed0)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('byhari')); ?>:
	<?php echo GxHtml::encode($data->byhari); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tglklr')); ?>:
	<?php echo GxHtml::encode($data->tglklr); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('jamklr')); ?>:
	<?php echo GxHtml::encode($data->jamklr); ?>
	<br />
	*/ ?>

</div>