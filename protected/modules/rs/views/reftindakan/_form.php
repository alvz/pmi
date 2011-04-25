<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'reftindakan-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idkategori'); ?>
		<?php echo $form->dropDownList($model, 'idkategori', GxHtml::listDataEx(KategoriTindakan::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idkategori'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tindakan'); ?>
		<?php echo $form->textField($model, 'tindakan', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'tindakan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'harga_dasar'); ?>
		<?php echo $form->textField($model, 'harga_dasar', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'harga_dasar'); ?>
		</div><!-- row -->

		<label>Dattarifs</label>
		<?php echo $form->checkBoxList($model, 'dattarifs', GxHtml::encodeEx(GxHtml::listDataEx(Dattarif::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('reftindakan/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->