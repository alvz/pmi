<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refpoli-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'poli'); ?>
		<?php echo $form->textField($model, 'poli', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'poli'); ?>
		</div><!-- row -->

		<label>Datregisters</label>
		<?php echo $form->checkBoxList($model, 'datregisters', GxHtml::encodeEx(GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refpoli/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->