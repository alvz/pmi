<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tindakan-igd-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idreg'); ?>
		<?php echo $form->dropDownList($model, 'idreg', GxHtml::listDataEx(RegisterIgd::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idreg'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idrwt'); ?>
		<?php echo $form->dropDownList($model, 'idrwt', GxHtml::listDataEx(Datrrwt::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idrwt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'kdtindakan'); ?>
		<?php echo $form->dropDownList($model, 'kdtindakan', GxHtml::listDataEx(Dattarif::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'kdtindakan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model, 'qty', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'qty'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'harga_satuan'); ?>
		<?php echo $form->textField($model, 'harga_satuan', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'harga_satuan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'jns_bayar'); ?>
		<?php echo $form->textField($model, 'jns_bayar'); ?>
		<?php echo $form->error($model,'jns_bayar'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('tindakanigd/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->