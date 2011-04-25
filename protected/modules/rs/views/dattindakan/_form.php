<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'dattindakan-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'idreg'); ?>
		<?php echo $form->dropDownList($model, 'idreg', GxHtml::listDataEx(Datregister::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'idreg'); ?>
		</div><!-- row -->
		<div class="row">		
                <?php echo $form->labelEx($model, 'kdtindakan');
                         $this->widget('EJuiAutoCompleteFkField', array(
                              'model'=>$model,
                              'attribute'=>'kdtindakan', //the FK field (from CJuiInputWidget)
                              // controller method to return the autoComplete data (from CJuiAutoComplete)
                              'sourceUrl'=>$this->createUrl('dattarif/aclist'),
                              // defaults to false.  set 'true' to display the FK field with 'readonly' attribute.
                              'showFKField'=>false,
                               // display size of the FK field.  only matters if not hidden.  defaults to 10
                              'FKFieldSize'=>15,
                              'relName'=>'kdtindakan0', // the relation name defined above
                              'displayAttr'=>'tindakan',  // attribute or pseudo-attribute to display
                              // length of the AutoComplete/display field, defaults to 50
                              'autoCompleteLength'=>15,
                              // any attributes of CJuiAutoComplete and jQuery JUI AutoComplete widget may
                              // also be defined.  read the code and docs for all options
                              'upField'=>array('harga_satuan'=>'tarif'),
                              'options'=>array(
                                  // number of characters that must be typed before
                                  // autoCompleter returns a value, defaults to 2
                                  'minLength'=>3,
                                  //'select'=>"js:function(event, ui) {
                                  //      $('#Dattindakan_harga_satuan').val(ui.item.id);
                                  // }"
                              ),
                         ));
                         echo $form->error($model, 'kdtndakan');?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model, 'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'harga_satuan'); ?>
		<?php echo $form->textField($model, 'harga_satuan', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'harga_satuan'); ?>
		</div><!-- row -->


<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('dattindakan/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->