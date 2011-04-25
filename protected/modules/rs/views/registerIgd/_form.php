<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'register-igd-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div clas="span-8 ">
		<?php echo $form->labelEx($model,'noreg'); ?>
		<?php echo $form->textField($model, 'noreg', array('maxlength' => 12)); ?>
		<?php echo $form->error($model,'noreg'); ?>
		</div><!-- row -->
		<div clas="span-8 last">
		<?php echo $form->labelEx($model,'idmr'); ?>
		<?php echo $form->dropDownList($model, 'idmr', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idmr'); ?>
		</div><!-- row -->
		<div clas="span-8 ">
		<?php echo $form->labelEx($model,'tgl'); ?>
		<?php echo $form->textField($model, 'tgl'); ?>
		<?php echo $form->error($model,'tgl'); ?>
		</div><!-- row -->
		<div clas="span-8 last">
		<?php echo $form->labelEx($model,'jam_masuk'); ?>
		<?php echo $form->textField($model, 'jam_masuk'); ?>
		<?php echo $form->error($model,'jam_masuk'); ?>
		</div><!-- row -->
		<div clas="span-8 ">
		<?php echo $form->labelEx($model,'jenis_tanggungan'); ?>
		<?php echo $form->dropDownList($model, 'jenis_tanggungan', GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'jenis_tanggungan'); ?>
		</div><!-- row -->
		<div clas="span-8 last">
		<?php echo $form->labelEx($model,'asuransi'); ?>
		<?php echo $form->textField($model, 'asuransi', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'asuransi'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('registerigd/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->