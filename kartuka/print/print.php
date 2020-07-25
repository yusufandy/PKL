<?php
require "../_assets/libs/vendor/autoload.php";
require_once "../_config/config.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('../auth/login.php')."';</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css"  href="../_assets/css/style.css"  rel="stylesheet">

</head>
<body>

                        <?php
                        $id = @$_GET['id'];
                        $sql_ktp = mysqli_query($con, "SELECT *, SUBSTRING(no_pendaftaran, 1, 1) as pendaftaran1, SUBSTRING(no_pendaftaran, 2, 1) as pendaftaran2
                        , SUBSTRING(no_pendaftaran, 3, 1) as pendaftaran3, SUBSTRING(no_pendaftaran, 4, 1) as pendaftaran4
                        , SUBSTRING(no_pendaftaran, 5, 1) as pendaftaran5, SUBSTRING(no_pendaftaran, 6, 1) as pendaftaran6
                        , SUBSTRING(no_pendaftaran, 7, 1) as pendaftaran7, SUBSTRING(no_pendaftaran, 8, 1) as pendaftaran8
                        , SUBSTRING(no_pendaftaran, 9, 1) as pendaftaran9, SUBSTRING(no_pendaftaran, 10, 1) as pendaftaran10
                        , SUBSTRING(no_pendaftaran, 11, 1) as pendaftaran11
                        , SUBSTRING(tanggal, 6, 1) as pendaftaran12 , SUBSTRING(tanggal, 7, 1) as pendaftaran13
                        , SUBSTRING(tanggal, 1, 1) as pendaftaran14, SUBSTRING(tanggal, 2, 1) as pendaftaran15
                        , SUBSTRING(tanggal, 3, 1) as pendaftaran16, SUBSTRING(tanggal, 4, 1) as pendaftaran17
                        , SUBSTRING(nik, 1, 1) as nik1, SUBSTRING(nik, 2, 1) as nik2, SUBSTRING(nik, 3, 1) as nik3, SUBSTRING(nik, 4, 1) as nik4, SUBSTRING(nik, 5, 1) as nik5
                        , SUBSTRING(nik, 6, 1) as nik6, SUBSTRING(nik, 7, 1) as nik7, SUBSTRING(nik, 8, 1) as nik8, SUBSTRING(nik, 9, 1) as nik9, SUBSTRING(nik, 10, 1) as nik10
                        , SUBSTRING(nik, 11, 1) as nik11, SUBSTRING(nik, 12, 1) as nik12, SUBSTRING(nik, 13, 1) as nik13, SUBSTRING(nik, 14, 1) as nik14
                        , SUBSTRING(nik, 15, 1) as nik15, SUBSTRING(nik, 16, 1) as nik16
                         FROM tb_ktp WHERE nik = '$id'") or die (mysqli_error($con));
                        $data = mysqli_fetch_array($sql_ktp);
                        ?>   

                        <?php
                        #
                        # Manipulasi Tanggal di PHP by SmartDevTala
                        #
                        function manipulasiTanggal($tgl,$jumlah=1,$format='days'){
                                $currentDate = $tgl;
                                return date('Y-m-d', strtotime($jumlah.' '.$format, strtotime($currentDate)));
                        }
                        ?>

    <div class="clearfix">
        <div class="box1">
                <b><p align="left">PENDIDIKAN FORMAL</p></b>
        </div>
        <div class="box2">
                <u><p align="left"> </p></u>
        </div>
        <div class="box-img">
        <img width="550px" height="205px" src="../_assets/images/header.png">
        </div>
    </div>
    
    <div class="clearfix">
    <?php
    $hasil = mysqli_query($con, "SELECT * FROM tb_ktp ORDER BY nik DESC LIMIT 1");
	foreach ($hasil as $row){ ?>
        <div class="box1">
                <p align="left">Jenjang.........</p>
        </div>
        <div class="box1">
                <p align="left">Jurusan : <?php echo"<tr><td>".$row['sltaJur']."</td></tr>"?></p>
        </div>
        <div class="box1">
                <p align="left">Th. <?php echo"<tr><td>".$row['slta']."</td></tr>"?></p>
        </div>
        <?php
	}
    ?>
        
    </div>

    <div class="clearfix">
        <div class="box5">
                <p align="left" class="a">.........</p>
        </div>
    </div>


    <div class="clearfix">
        <div class="box5">
                <p align="left" class="a">.........</p>
        </div>
    </div>
    
    <div class="clearfix">
    <div class="box5">
                <p align="left" class="a">.........</p>
    </div>

    <div class="box1">
            <p align="left">No. Pendaftaran Pencari Kerja</p>
    </div>

    <div class="box7">
        <table border="1">
            <tr>
             <td align="center"><?=$data['pendaftaran1']?></td>
             <td align="center"><?=$data['pendaftaran2']?></td>
             <td align="center"><?=$data['pendaftaran3']?></td>
             <td align="center"><?=$data['pendaftaran4']?></td>
            </tr>
          </table>
    </div>
    
    <div class="box8">
        <table border="1">
            <tr>
             <td align="center"><?=$data['pendaftaran5']?></td>
             <td align="center"><?=$data['pendaftaran6']?></td>
             <td align="center"><?=$data['pendaftaran7']?></td>
             <td align="center"><?=$data['pendaftaran8']?></td>
             <td align="center"><?=$data['pendaftaran9']?></td>
             <td align="center"><?=$data['pendaftaran10']?></td>
             <td align="center"><?=$data['pendaftaran11']?></td>
            </tr>
          </table>
    </div>

    <div class="box9">
        <table border="1">
            <tr>
             <td align="center"><?=$data['pendaftaran12']?></td>
             <td align="center"><?=$data['pendaftaran13']?></td>
             <td align="center"><?=$data['pendaftaran14']?></td>
             <td align="center"><?=$data['pendaftaran15']?></td>
             <td align="center"><?=$data['pendaftaran16']?></td>
             <td align="center"><?=$data['pendaftaran17']?></td>
            </tr>
          </table>
    </div>
    </div>
    

    <div class="clearfix">
        <div class="box5">
                <p align="left" class="a">.........</p>
        </div>
        <div class="box1">
                <p align="left">No. Induk Kependudukan</p>
        </div>
        <div class="box6">
        <table border="1">
            <tr>
             <td align="center"><?=$data['nik1']?></td>
             <td align="center"><?=$data['nik2']?></td>
             <td align="center"><?=$data['nik3']?></td>
             <td align="center"><?=$data['nik4']?></td>
             <td align="center"><?=$data['nik5']?></td>
             <td align="center"><?=$data['nik6']?></td>
             <td align="center"><?=$data['nik7']?></td>
             <td align="center"><?=$data['nik8']?></td>
             <td align="center"><?=$data['nik9']?></td>
             <td align="center"><?=$data['nik10']?></td>
             <td align="center"><?=$data['nik11']?></td>
             <td align="center"><?=$data['nik12']?></td>
             <td align="center"><?=$data['nik13']?></td>
             <td align="center"><?=$data['nik14']?></td>
             <td align="center"><?=$data['nik15']?></td>
             <td align="center"><?=$data['nik16']?></td>
            </tr>
          </table>
    </div>
    </div>

    <div class="clearfix">
        <div class="box1">
                <u><p align="left" class="a">.......................</p></u>
        </div>
        <div class="box2">
                <p align="left" class="a">.........</p>
        </div>
        <div class="box-img2">
                <table border="1" width="105px" height="175px">
                        <td align="center">Pas Foto 3x4</td>
                </table>
        </div>
        <div class="box11">
                <table class="box12" action="proses.php" method="get">
                                <tr>
                                <th class="zz"width="175px" align="left">Nama Lengkap</th>
                                <th class="z" width="10px" align="left">:</th>
                                <td class="z" width="300px" align="left"><?=$data['nama_lengkap']?></td>
                                </tr>
                                <tr>
                                <th class="zz" width="85px" align="left">Tempat / Tgl Lahir</th>
                                <th class="z" align="left">:</th>
                                <td class="z" width="50px" align="left"><?=$data['tempat_lahir']?> / <?=$data['tanggal_lahir']?></td>
                                </tr>
                                <tr>
                                <th class="zz" width="85px" align="left">Jenis Kelamin</th>
                                <th class="z" align="left">:</th>
                                <td class="z" width="50px" align="left"><?=$data['jk']?></td>        
                                </tr>
                                <tr>
                                <th class="zz" width="85px" align="left">Status</th>
                                <th class="z" align="left">:</th>
                                <td class="z" width="50px" align="left"><?=$data['stats']?></td>        
                                </tr>
                                <tr>
                                <th class="zz" width="85px" align="left">Alamat</th>
                                <th class="z" align="left">:</th>
                                <td class="z" width="50px" align="left" height="50px"><div><?=$data['alamat']?></div></td>        
                                </tr>
                                <tr>
                                <th class="zz" width="85px" align="left">No. Telp</th>
                                <th class="z" align="left">:</th>
                                <td class="z" width="50px" align="left"><?=$data['no_telp']?></td>        
                                </tr>
                                <tr>
                                <th class="zz" width="85px" align="left">Berlaku s.d.</th>
                                <th class="z" align="left">:</th>
                                <td class="z" width="50px" align="left"><?=date('Y-m-d', strtotime('+2 year', strtotime($data['tanggal'])));?></td>        
                                </tr>
                </table>
        </div>
    </div>

    <div class="clearfix">
        <div class="box1">
                <u><p align="left">KETERAMPILAN...........</p></u>
        </div>
        <div class="box1_1">
                <u><p align="left"> </p></u>
        </div>
        <div class="box4">
                <u><p align="center">Pengantar Kerja/KASIE PPTK</p></u>
        </div>
    </div>

    <div class="box13">
            <tr><ul class="a" >
                    <li><?=$data['keterampilan1']?></li>
                    <li><?=$data['keterampilan2']?></li>
                    <li><?=$data['keterampilan3']?></li>
            </ul>
    </div>

    <div class="clearfix">
        <div class="box2_1">
                <u><p align="right"> </p></u>
        </div>
        <div class="box3">
                <u><p align="center"> </p></u>
        </div>
    </div>

    <div class="clearfix">
            <div class="box2"> </div>
    </div>
    <div class="clearfix">
            <div class="space"> </div>
    </div>

    <div class="clearfix">
        <div class="box2_1">
                <u><p align="right"><?=$_SESSION['nama_user'];?></u> <br/> NIP . <?=$_SESSION['nip'];?></p>
        </div>
        <div class="box3">
                <u><p align="left">TTD Petugas</p></u>
        </div>
    </div>



        
    <div class="clearfix">
            <div class="vox">
            <table class="a">
                        <tr><td class="a" colspan="2"><b><p>KETENTUAN:</td></p></b>
                        </tr>
                        <tr>
                                <th class="b" align="center">1.</th>
                                <td class="a" align="left">BERLAKU NASIONAL</td>
                        </tr>
                        <tr>
                                <th class="b" align="center">2.</th>
                                <td class="a" align="left">BILA ADA PERUBAHAN DATA / KETERANGAN LAINNYA ATAU TELAH MENDAPAT PEKERJAAN HARAP SEGERA MELAPOR</td>
                        </tr>
                        <tr>
                                <th class="b" align="center">2.</th>
                                <td class="a" align="left">BILA ADA PERUBAHAN DATA / KETERANGAN LAINNYA ATAU TELAH MENDAPAT PEKERJAAN HARAP SEGERA MELAPOR</td>
                        </tr>
                        <tr>
                                <th class="b" align="center">3.</th>
                                <td class="a" align="left">APABILA PENCARI KERJA YANG BERSANGKUTAN TELAH DITERIMA BEKERJA MAKAINSTANSI / PERUSAHAAN YANG MENERIMA AGAR MENGEMBALIKAN KARTU AK I INI</td>
                        </tr>
                        <tr>
                                <th class="b" align="center">4.</th>
                                <td class="a" align="left">KARTU INI BERLAKU SELAMA 2 (DUA) TAHUN DENGAN KEHARUSAN KETENTUAN MELAPOR SETIAP 6 (ENAM) BULAN SEKALI BAGI PENCARI KERJA YANG BELUM MENDAPATKAN PEKERJAAN</td>
                        </tr>
                </table>
            </div>

            <div class="vox3"> </div>

            <div>
                <table >
                <tr>    <th ><b>LAPORAN</b></th>
                        <th ><b>TGL-BULAN-TAHUN </b></th>
                        <th ><b>Tanda Tangan Pengantar Kerja / Petugas Pendaftar (Cantumkan NIP)</b></th>
                <tr>    <td  >PERTAMA</td>
                        <td  ><?=$data['tanggal']?></td> 
                        <td ></td>
                </tr>
                <tr>    <td>KEDUA</td>
                        <td><?=date('Y-m-d', strtotime('+6 month', strtotime($data['tanggal'])));?></td>
                        <td></td>
                </tr>
                <tr>    <td>KETIGA</td>
                        <td><?=date('Y-m-d', strtotime('+12 month', strtotime($data['tanggal'])));?></td>
                        <td></td>
                </tr>
                        <td colspan="2">DITERIMA DI</td>
                        <td></td></td>
                </tr>
                <tr>
                        <td colspan="2">TERHITUNG TANGGAL MULAI</td>
                        <td ></td></td>
                </tr>
                </tr>
                

                </table>
            </div>
    </div>



</body>
<script>
		window.print();
</script>

</html>
<?php
include_once('../_footer.php');?>