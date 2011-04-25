<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'datregister-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>
        <div class="row">
            <input type="text" id="cari-mr-text" /> <input id="cari-mr-button" class="button" type="button" value="Cari MR" />
        </div>

        
		<div class="row">
		<?php echo $form->labelEx($model,'noreg'); ?>
		<?php echo $form->textField($model, 'noreg', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'noreg'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'idmr'); ?>
		<?php echo $form->dropDownList($model, 'idmr', GxHtml::listDataEx(Mspasien2::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idmr'); ?>
		</div><!-- row -->

                
		<div class="row">
		<?php echo $form->labelEx($model,'tgl'); ?>
		<?php echo $form->textField($model, 'tgl'); ?>
		<?php echo $form->error($model,'tgl'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'jenis_tanggungan'); ?>
		<?php echo $form->dropDownList($model, 'jenis_tanggungan', GxHtml::listDataEx(Reftanggungan::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'jenis_tanggungan'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'no_rujuk'); ?>
		<?php echo $form->textField($model, 'no_rujuk', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'no_rujuk'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ref_rujuk'); ?>
		<?php echo $form->textField($model, 'ref_rujuk', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_rujuk'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'hak_kls_rwt'); ?>
		<?php echo $form->textField($model, 'hak_kls_rwt', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'hak_kls_rwt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'poli'); ?>
		<?php echo $form->dropDownList($model, 'poli', GxHtml::listDataEx(Refpoli::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'poli'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nosjp'); ?>
		<?php echo $form->textField($model, 'nosjp', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nosjp'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'biaya_admin'); ?>
		<?php echo $form->textField($model, 'biaya_admin', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'biaya_admin'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dokter'); ?>
		<?php echo $form->dropDownList($model, 'dokter', GxHtml::listDataEx(Refdokter::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'dokter'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('datregister/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->
<?php Yii::app()->clientScript->registerScriptFile(
        Yii::app()->request->baseUrl . '/js/jquery.validate.min.js', CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jadwal-praktek.js', CClientScript::POS_END); ?>