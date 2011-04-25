<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="span-8 last">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'idpasien'); ?>
		<?php echo $form->dropDownList($model, 'idpasien', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'idreg'); ?>
		<?php echo $form->dropDownList($model, 'idreg', GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'jenis_tanggungan'); ?>
		<?php echo $form->dropDownList($model, 'jenis_tanggungan', GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'poli_pengirim'); ?>
		<?php echo $form->dropDownList($model, 'poli_pengirim', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'dokter_pengirim'); ?>
		<?php echo $form->dropDownList($model, 'dokter_pengirim', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'poli_tujuan'); ?>
		<?php echo $form->dropDownList($model, 'poli_tujuan', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'dokter_tujuan'); ?>
		<?php echo $form->dropDownList($model, 'dokter_tujuan', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'asuransi'); ?>
		<?php echo $form->textField($model, 'asuransi', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'no_rujuk'); ?>
		<?php echo $form->textField($model, 'no_rujuk', array('maxlength' => 45)); ?>
	</div>

	<div class="span-8 last">
		<?php echo $form->label($model, 'catatan_khusus'); ?>
		<?php echo $form->textArea($model, 'catatan_khusus'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
