<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>

    <style>
        div {
        border: 1px solid red;
        }


        .noborder {
           border-width:0px;
        }

        td { 
            width:20px;
            }
        
        * {
        box-sizing: border-box;
        }

        .satu {
        font-size: 12px;
        }

        .box1 {
        float: left;
        width: 60px;
        padding: 2px;
        border: 1px solid black;
        height: 25.5px;
        }

        .box1x {
        float: left;
        width: 60px;
        padding: 2px;
        height: 25.5px;
        }

        .box1_1 {
        float: left;
        width: 10%;
        padding: 5px;
        border: 1px solid black;
        height: 50.5px;
        border-right-color: white;
        }

        .box1_2 {
        float: left;
        width: 30%;
        padding: 2px;
        border: 1px solid black;
        height: 50.5px;
        }

        .box1_3 {
        float: left;
        width: 20%;
        padding: 5px;
        border: 1px solid black;
        height: 50.5px;
        border-right-color: white;
        }

        .box_img {
        float: left;
        width: 50%;
        padding: 0px;
        height: 25.5px;
        }

        .clearfix::after {
        content: "";
        clear: both;
        display: table;
        }
    </style>


    </head>
<body>

        
    <div class="clearfix">
        <div class="box_img">
                <img weight="135px" height="135px" src="images/kiri.png">
        </div>
        <div class="box1_1">
        <b><p class="satu" align="center">LAPORAN</p></b>
        </div>
        
        <div class="box1_1">
        <b><p class="satu" align="center">TGL-BULAN-TAHUN</p></b>
        </div>

        <div class="box1_2">
        <b><p class="satu" align="center">Tanda Tangan Pengantar Kerja / Petugas Pendaftar (Cantumkan NIP)</p></b>
        </div>
    </div>

    <div class="clearfix">
        <div class="box_img">
        </div>
        <div class="box1_1">
        <b><p class="satu" align="left">PERTAMA</p></b>
        </div>
        
        <div class="box1_1">
        <b><p class="satu" align="center"></p></b>
        </div>

        <div class="box1_2">
        <b><p class="satu" align="center"></p></b>
        </div>

        <div class="box_img">
        </div>
        <div class="box1_1">
        <b><p class="satu" align="left">KEDUA</p></b>
        </div>
        
        <div class="box1_1">
        <b><p class="satu" align="center"></p></b>
        </div>

        <div class="box1_2">
        <b><p class="satu" align="center"></p></b>
        </div>

        <div class="box_img">
        </div>
        <div class="box1_1">
        <b><p class="satu" align="left">KETIGA</p></b>
        </div>
        
        <div class="box1_1">
        <b><p class="satu" align="center"></p></b>
        </div>

        <div class="box1_2">
        <b><p class="satu" align="center"></p></b>
        </div>

        <div class="box_img">
        </div>
        <div class="box1_3">
        <b><p class="satu" align="left">DITERIMA DI</p></b>
        </div>

        <div class="box1_2">
        <b><p class="satu" align="center"></p></b>
        </div>

        <div class="box_img">
        </div>
        <div class="box1_3">
        <b><p class="satu" align="left">TERHITUNG MULAI TANGGAL</p></b>
        </div>

        <div class="box1_2">
        <b><p class="satu" align="center"></p></b>
        </div>
    </div>
    </div>


</body>

<script>
		window.print();
	</script>