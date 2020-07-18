<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
     <title>Document</title>

    <style>
        .noborder {
           border-width:0px;
        }

        td { 
            width:20px;
            }
            * {
        box-sizing: border-box;
        }

        .box1 {
        float: left;
        width: 12%;
        padding: 1px;
        height: 40px;
        text-decoration: underline;
        }

        .box2 {
        float: left;
        width: 12%;
        padding: 1px;
        height: 40px;
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
        <div class="box1" style="background-color:#bbb">
            <p align="left"><b>PENDIDIKAN FORMAL</b></p>
        </div>
        <div class="box2" style="background-color:rgb(187, 74, 74)">
            <p align="left"><b>:</b></p>
        </div>
    </div>

    <div class="clearfix">
        <div class="box3" style="background-color:#bbb">
        </div>

    </div>
        
</body>
</html>