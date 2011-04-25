<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'kamar-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idruang'); ?>
		<?php echo $form->dropDownList($model, 'idruang', GxHtml::listDataEx(RuangRawat::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idruang'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nomor'); ?>
		<?php echo $form->textField($model, 'nomor'); ?>
		<?php echo $form->error($model,'nomor'); ?>
		</div><!-- row -->

		<label>Beds</label>
		<?php echo $form->checkBoxList($model, 'beds', GxHtml::encodeEx(GxHtml::listDataEx(Bed::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Datrrwts</label>
		<?php echo $form->checkBoxList($model, 'datrrwts', GxHtml::encodeEx(GxHtml::listDataEx(Datrrwt::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('kamar/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->