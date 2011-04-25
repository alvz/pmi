<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	
	<div class="span-6">
		<div id="sidebar">
		<?php
		/*
                $this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
*/
                        //$this->beginWidget('zii.widgets.CPortlet', array(
			//	'title'=>'Operations',
			//));


            $this->menuzrs = array(
            //'items'=>array(
                array('label'=>'RJ', 'url'=>array('#'), 'htmlOptions'=>array('class'=>'head'),'items'=>array(
                    array('label'=>Yii::t('app', 'Reg RJ') , 'url'=>array('/rs/datregister')),
                    array('label'=>Yii::t('app', 'Detil RJ') , 'url'=>array('/rs/dattindakan')),
                )),
                array('label'=>'IGD', 'url'=>array('#'), 'htmlOptions'=>array('class'=>'head'), 'items'=>array(
                    array('label'=>Yii::t('app', 'Register IGD') , 'url'=>array('/rs/registerIgd')),
                    array('label'=>Yii::t('app', 'Detil IGD') , 'url'=>array('/rs/tindakanIgd')),
                    array('label'=>Yii::t('app', 'Keluar IGD') , 'url'=>array('/rs/refpoli')),
                )),
                array('label'=>'RI', 'url'=>array('#'), 'htmlOptions'=>array('class'=>'head'), 'items'=>array(
                    array('label'=>Yii::t('app', 'Deposit') , 'url'=>array('/rs/deposit')),
                    array('label'=>Yii::t('app', 'Jadwal Praktek') , 'url'=>array('/rs/jadwalPraktek')),
                    array('label'=>Yii::t('app', 'Pasien') , 'url'=>array('/rs/mspasien2')),
                    array('label'=>Yii::t('app', 'Kamar') , 'url'=>array('/rs/kamar')),
                    array('label'=>Yii::t('app', 'rawat') , 'url'=>array('/rs/datrrwt')),
                    array('label'=>Yii::t('app', 'refobat') , 'url'=>array('/rs/refobat')),
                    array('label'=>Yii::t('app', 'obat') , 'url'=>array('/rs/obat')),
                    array('label'=>Yii::t('app', 'Surat Kelahiran') , 'url'=>array('/rs/suratkelahiran')),
                )),
            //),
            );
			/*$this->widget('zii.widgets.CMenu', array(
                            'id'=>'navigation',
				'items'=>$this->menuzrs,
				'htmlOptions'=>array('class'=>'operations'),
			));*/
			//$this->endWidget();
include('menu.php');
            ?>


		</div><!-- sidebar -->
	</div>
        <div class="span-19 last">
            <div id="submenu">
            <?           $this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
			));
            ?>
            </div>
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>