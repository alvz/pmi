<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'ref-kode-tambah-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'kodetambah'); ?>
		<?php echo $form->textField($model, 'kodetambah', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'kodetambah'); ?>
		</div><!-- row -->

		<label>Dattarifs</label>
		<?php echo $form->checkBoxList($model, 'dattarifs', GxHtml::encodeEx(GxHtml::listDataEx(Dattarif::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('refkodetambah/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->