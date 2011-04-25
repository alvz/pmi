<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Beranda', 'url'=>array('default/index')),
                array('label'=>'Master', 'url'=>array(''), 'items'=>array(
                            array('label'=>'Plan',  'url'=>array('plan/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                            array('label'=>'Kepemilikan',  'url'=>array('pemilik/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                            array('label'=>'Pelayanan', 'url'=>array('pelayanan/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                            array('label'=>'Spesialis', 'url'=>array('spesialis/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                            array('label'=>'Fasilitas', 'url'=>array('fasilitas/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                            array('label'=>'Contact Person', 'url'=>array('contactperson/index')),
                            array('label'=>'Jenis Contact Person', 'url'=>array('contact/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                            array('label'=>'Jenis Provider', 'url'=>array('catprovider/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                            array('label'=>'Tipe', 'url'=>array('category/index'), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                        )),
                array('label'=>'Wilayah', 'url'=>array(''), 'items'=>array(
                            array('label'=>'Provinsi',  'url'=>array('provinsi/index')),
                            array('label'=>'Kabupaten/Kota', 'url'=>array('kabkota/index')),
                        ), 'visible'=> (Yii::app()->user->role == 'surveyor')? false : true),
                array('label'=>'Provider', 'url'=>array('provider/index')),
                array('label'=>'Jadwal', 'url'=>array(''), 'items'=>array(
                            array('label'=>'Jadwal Praktek', 'url'=>array('jadwalpraktek/index')),
                            array('label'=>'Jadwal Jam Kerja', 'url'=>array('jadwaljamkerja/index')),
                        )),               
				array('label'=>'User', 'url'=>array('user/index'), 'visible'=> (Yii::app()->user->role == 'admin')? true : false),
			),
		)); ?>
</div><!-- mainmenu -->