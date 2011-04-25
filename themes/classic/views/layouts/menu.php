
<div class="fl boxshad">
<div class="menubar txshad">MENU</div>    	
    <ul id="navigation" >
        <li><a href="/pmi/site/index">Home</a></li>
        <li><a href="/pmi/rs/mspasien2">Medical Record</a></li>
        <li><a href="/pmi/rs/refdokter">Dokter</a></li>
        <li><a class="head" href="#">Master</a>
            <ul>
                <li><a href="/pmi/rs/refdati">Kabupaten</a></li>
                <li><a href="/pmi/rs/refkec">Kecamatan</a></li>
                <li><a href="/pmi/rs/refKodeTambah">Kode Tambah</a></li>                
                <li><a href="/pmi/rs/reftanggungan">Tanggungan</a></li>
                <li><a href="/pmi/rs/KategoriTindakan">Kategori Tindakan</a></li>
                <li><a href="/pmi/rs/reftindakan">Tindakan</a></li>
                <li><a href="/pmi/rs/reftype">Type</a></li>
                <li><a href="/pmi/rs/dattarif">Tarif</a></li>
                <li><a href="/pmi/rs/refkeluar">Alasan Kelar</a></li>
                <li><a href="/pmi/rs/refpembayaran">Bayar Via</a></li>
                

                <li><a href="/pmi/rs/refruang">Ruang</a></li>
                <li><a href="/pmi/rs/refperuntukan">Peruntukant</a></li>

            </ul>
        </li>
        <li><a class="head" href="#">Rawat Jalan</a>
            <ul>
            <li><a href="/pmi/rs/datregister">Register Rawat Jalan</a></li>            
            <li><a href="/pmi/rs/refpoli">Poli</a></li>
            <li><a href="/pmi/rs/rujukanInternal">Rujukan Internal</a></li>
            </ul>
        </li>
        <li><a class="head" href="#">Rawat Inap</a>
            <ul>
            <li><a href="/pmi/rs/registerIgd">Register Rawat Inap</a></li>
            <li><a href="/pmi/rs/deposit">Deposit</a></li>
            <li><a href="/pmi/rs/rujukanInternal">Rujukan Internal</a></li>
            <li><a href="/pmi/rs/refkelasrawat">Kelas Rwt</a></li>
            <li><a href="/pmi/rs/ruangRawat">Ruang Rawat</a></li>
            <li><a href="/pmi/rs/kamar">Kamar</a></li>
            <li><a href="/pmi/rs/Bed">Bed</a></li>
            <li><a href="/pmi/rs/suratkelahiran">Surat Kelahiran</a></li>            
            </ul>
        </li>
        <li><a class="head" href="#">Lab</a>
            <ul>
            <li><a href="/pmi/rs/datregister">Register Lab</a></li>            
            </ul>
        </li>
        <li><a class="head" href="#">Radiologi</a>
            <ul>
            <li><a href="/pmi/rs/datregister">Register Radiologi</a></li>
            </ul>
        </li>
        <li><a class="head" href="#">RI</a>
            <ul>
            
            <li><a href="/pmi/rs/jadwalPraktek">Jadwal Praktek</a></li>
            <li><a href="/pmi/rs/mspasien2">Pasien</a></li>
            
            <li><a href="/pmi/rs/refobat">refobat</a></li>
            <li><a href="/pmi/rs/obat">obat</a></li>
            
            </ul>
        </li>
        <li><a href="report.php">Report</a></li>
        <li><a href="#">Tools</a></li>
        <li><a href="#">Admin</a></li>
        <?php if(Yii::app()->user->isGuest){?>
                <li><a href="/pmi/user/login">Log in</a></li>
        <?php } else {?>
        <li><a href="/pmi/user/logout">Log Out</a></li>
        <?php }?>
    </ul>
</div>