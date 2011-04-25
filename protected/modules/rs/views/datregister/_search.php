<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'noreg'); ?>
		<?php echo $form->textField($model, 'noreg', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'idmr'); ?>
		<?php echo $form->dropDownList($model, 'idmr', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tgl'); ?>
		<?php echo $form->textField($model, 'tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'jenis_tanggungan'); ?>
		<?php echo $form->dropDownList($model, 'jenis_tanggungan', GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'no_rujuk'); ?>
		<?php echo $form->textField($model, 'no_rujuk', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_rujuk'); ?>
		<?php echo $form->textField($model, 'ref_rujuk', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'asuransi'); ?>
		<?php echo $form->textField($model, 'asuransi', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'poli'); ?>
		<?php echo $form->dropDownList($model, 'poli', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nosjp'); ?>
		<?php echo $form->textField($model, 'nosjp', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'biaya_admin'); ?>
		<?php echo $form->textField($model, 'biaya_admin', array('maxlength' => 10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'dokter'); ?>
		<?php echo $form->dropDownList($model, 'dokter', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'type'); ?>
		<?php echo $form->dropDownList($model, 'type', GxHtml::listDataEx(Reftype::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
