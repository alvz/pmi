<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'mspasien2-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'nomr'); ?>
		<?php echo $form->textField($model, 'nomr', array('maxlength' => 16)); ?>
		<?php echo $form->error($model,'nomr'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model, 'nama', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nama'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->dropDownList($model, 'sex', GxHtml::listDataEx(Refsex::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'sex'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model, 'tempat_lahir', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'tgl_lahir',
			'value' => $model->tgl_lahir,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model, 'alamat', array('maxlength' => 200)); ?>
		<?php echo $form->error($model,'alamat'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->dropDownList($model, 'agama', GxHtml::listDataEx(Refagama::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'agama'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'hp'); ?>
		<?php echo $form->textField($model, 'hp', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'hp'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'pekerjaan'); ?>
		<?php echo $form->textField($model, 'pekerjaan', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'pekerjaan'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'pendidikan'); ?>
		<?php echo $form->textField($model, 'pendidikan', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'pendidikan'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model, 'status', GxHtml::listDataEx(Refstatusnikah::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'penanggung_jawab'); ?>
		<?php echo $form->textField($model, 'penanggung_jawab', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'penanggung_jawab'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'hub_dgn_pasien'); ?>
		<?php echo $form->textField($model, 'hub_dgn_pasien', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'hub_dgn_pasien'); ?>
		</div><!-- row -->
		<div class="span-9 last">
		<?php echo $form->labelEx($model,'dati'); ?>
		<?php //echo $form->dropDownList($model, 'dati', GxHtml::listDataEx(Refdati::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->dropDownList($model,'dati',
                        CHtml::listData( Refdati::model()->findAll(), 'id', 'NMDATI2','KDDATI2' ),
                        array('prompt'=>'--Pilih Dati--',
                              'ajax' => array(
                                    'type'=>'POST',
                                    'url'=>CController::createUrl('ajax/dati2'),
                                     'beforeSend' => 'function(){
                                          $("#boxLoading").toggleClass("hide");}',
                                     'complete' => 'function(){
                                          $("#boxLoading").toggleClass("hide");}',
                                    'update'=>'#Mspasien2_kec',

                                    )
                            )); ?>

                <?php echo $form->error($model,'dati'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'kec'); ?>
		<?php //echo $form->dropDownList($model, 'kec', GxHtml::listDataEx(Refkec::model()->findAllAttributes(null, true))); ?>
		<?php if($model->dati): ?>
                    <?php echo $form->dropDownList($model,'kec',
                        CHtml::listData( Refkec::model()->findAll('iddati = :kddati2',
                            array(':kddati2' => $model->dati)),
                            'id', 'NMKEC' ), array('prompt'=>'--Pilih Kecamatan--')); ?>
                <?php else: ?>
                     <?php echo $form->dropDownList($model,'kec',
                        array(), array('prompt'=>'--Pilih Kecamatan--')); ?>
                <?php endif; ?>
                <?php echo $form->error($model,'kec'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'tarif'); ?>
		<?php echo $form->dropDownList($model, 'tarif', GxHtml::listDataEx(RefKodeTambah::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'tarif'); ?>
		</div><!-- row -->
<!-- june -->
<div class="row"></div>
<!-- june -->
		<!--label--><!--/label-->
		                
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('mspasien2/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->