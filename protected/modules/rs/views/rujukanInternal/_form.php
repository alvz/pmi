<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'rujukan-internal-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'idpasien'); ?>
		<?php echo $form->dropDownList($model, 'idpasien', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idpasien'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'idreg'); ?>
		<?php echo $form->dropDownList($model, 'idreg', GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idreg'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'jenis_tanggungan'); ?>
		<?php echo $form->dropDownList($model, 'jenis_tanggungan', GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'jenis_tanggungan'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'poli_pengirim'); ?>
		<?php echo $form->dropDownList($model, 'poli_pengirim', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'poli_pengirim'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'dokter_pengirim'); ?>
		<?php echo $form->dropDownList($model, 'dokter_pengirim', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'dokter_pengirim'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'poli_tujuan'); ?>
		<?php echo $form->dropDownList($model, 'poli_tujuan', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'poli_tujuan'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'dokter_tujuan'); ?>
		<?php echo $form->dropDownList($model, 'dokter_tujuan', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'dokter_tujuan'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'asuransi'); ?>
		<?php echo $form->textField($model, 'asuransi', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'asuransi'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'no_rujuk'); ?>
		<?php echo $form->textField($model, 'no_rujuk', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'no_rujuk'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'catatan_khusus'); ?>
		<?php echo $form->textArea($model, 'catatan_khusus'); ?>
		<?php echo $form->error($model,'catatan_khusus'); ?>
		</div><!-- row -->

                <div class="row"></div>
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('rujukaninternal/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->