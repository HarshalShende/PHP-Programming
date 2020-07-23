<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        header{
            width:90%;
            height:100px;
            text-align:center;
            border:2px solid red;
            position:absolute;
            top:0px;
            background:red;
            color:white;
        }

        header ul{
            width:100%;
            height:20px;
            font-decoration:none;
            font-style:italic;
            margin-left:-2.5em;
            border:1px dotted yellow;
            background:yellow;
            color:white;
        }
        header ul li{
            float:left;
            padding-left:2em;
        }

        footer{
            width:90%;
            height:50px;
            text-align:center;
            border:2px solid red;
            position:absolute;
            bottom:0px;
            background:red;
            color:white;

        }


        #body{
            padding-top:100px;
            position:relative;

            
        }
        #main{
            
            width:70%;
            height:100%;
            border:2px solid green;
            float:left;

        }
        #sidebar{
            
            width:20%;
            height:100%;
            border:2px solid blue;
            float:left;
            background:orange;
            color:white;

        }

    </style>
</head>
<body>
    
   <?php require_once 'test90header.php'; ?>
   <?php require_once 'test90header.php'; ?>
   <?php require_once 'test90header.php'; ?>

    <?php include_once 'test90main.php'; ?>

  

    <?php include_once 'test90footer.php'; ?>

    
</body>
</html>