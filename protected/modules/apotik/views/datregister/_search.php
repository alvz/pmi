<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noreg'); ?>
		<?php echo $form->textField($model,'noreg',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmr'); ?>
		<?php echo $form->textField($model,'idmr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl'); ?>
		<?php echo $form->textField($model,'tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jam_masuk'); ?>
		<?php echo $form->textField($model,'jam_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_tanggungan'); ?>
		<?php echo $form->textField($model,'jenis_tanggungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rujuk'); ?>
		<?php echo $form->textField($model,'no_rujuk',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_rujuk'); ?>
		<?php echo $form->textField($model,'ref_rujuk',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asuransi'); ?>
		<?php echo $form->textField($model,'asuransi',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poli'); ?>
		<?php echo $form->textField($model,'poli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nosjp'); ?>
		<?php echo $form->textField($model,'nosjp',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_admin'); ?>
		<?php echo $form->textField($model,'biaya_admin',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokter'); ?>
		<?php echo $form->textField($model,'dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglplg'); ?>
		<?php echo $form->textField($model,'tglplg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jamplg'); ?>
		<?php echo $form->textField($model,'jamplg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alasankeluar'); ?>
		<?php echo $form->textField($model,'alasankeluar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->