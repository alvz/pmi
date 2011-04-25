<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'refpembayaran-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'via'); ?>
		<?php echo $form->textField($model, 'via', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'via'); ?>
		</div><!-- row -->

		<label>Deposits</label>
		<?php echo $form->checkBoxList($model, 'deposits', GxHtml::encodeEx(GxHtml::listDataEx(Deposit::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refpembayaran/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->