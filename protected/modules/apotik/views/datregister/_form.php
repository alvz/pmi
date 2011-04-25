<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datregister-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'noreg'); ?>
		<?php echo $form->textField($model,'noreg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'noreg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idmr'); ?>
		<?php echo $form->textField($model,'idmr'); ?>
		<?php echo $form->error($model,'idmr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl'); ?>
		<?php echo $form->textField($model,'tgl'); ?>
		<?php echo $form->error($model,'tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jam_masuk'); ?>
		<?php echo $form->textField($model,'jam_masuk'); ?>
		<?php echo $form->error($model,'jam_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_tanggungan'); ?>
		<?php echo $form->textField($model,'jenis_tanggungan'); ?>
		<?php echo $form->error($model,'jenis_tanggungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_rujuk'); ?>
		<?php echo $form->textField($model,'no_rujuk',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'no_rujuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_rujuk'); ?>
		<?php echo $form->textField($model,'ref_rujuk',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ref_rujuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asuransi'); ?>
		<?php echo $form->textField($model,'asuransi',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'asuransi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poli'); ?>
		<?php echo $form->textField($model,'poli'); ?>
		<?php echo $form->error($model,'poli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nosjp'); ?>
		<?php echo $form->textField($model,'nosjp',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nosjp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biaya_admin'); ?>
		<?php echo $form->textField($model,'biaya_admin',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'biaya_admin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokter'); ?>
		<?php echo $form->textField($model,'dokter'); ?>
		<?php echo $form->error($model,'dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglplg'); ?>
		<?php echo $form->textField($model,'tglplg'); ?>
		<?php echo $form->error($model,'tglplg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jamplg'); ?>
		<?php echo $form->textField($model,'jamplg'); ?>
		<?php echo $form->error($model,'jamplg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alasankeluar'); ?>
		<?php echo $form->textField($model,'alasankeluar'); ?>
		<?php echo $form->error($model,'alasankeluar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->