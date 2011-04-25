<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'kategori-tindakan-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'parent'); ?>
		<?php echo $form->dropDownList($model, 'parent', GxHtml::listDataEx(KategoriTindakan::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'parent'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php echo $form->textField($model, 'kategori', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'kategori'); ?>
		</div><!-- row -->

		<label>Kategori Tindakans</label>
		<?php echo $form->checkBoxList($model, 'kategoriTindakans', GxHtml::encodeEx(GxHtml::listDataEx(KategoriTindakan::model()->findAllAttributes(null, true)), false, true)); ?>
		<label>Reftindakans</label>
		<?php echo $form->checkBoxList($model, 'reftindakans', GxHtml::encodeEx(GxHtml::listDataEx(Reftindakan::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('kategoritindakan/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->