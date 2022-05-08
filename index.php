<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İskender Eren Göktaş | İnsert Process</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <style>
        body{
            color:#333;
            background-color: #dbdbdb;
            text-align: center;
            font-family: 'PT Serif', serif;

        }

        .int{
            color:#333;
            border:none;
            border-radius: 5px;
            padding:20px 15px;
            margin-top:30px;
            width: 600px;
            text-align: center;
            font-size: 22px;
            margin-bottom:20px;
        }

        .btn{
            color:#dbdbdb;
            background-color: #333;
            padding:10px 15px;
            border:none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>İnsert Process</h1>
        <?php
        
        if ($_GET["durum"]=="ok") { ?>
            <h1>Susscesful</h1>
        <?php } else if($_GET["durum"]=="no"){ ?>
            <h1>UnSusscesful!</h1>
        <?php } else{
            echo " ";
        }
         
        ?>
        <form action="islem.php" method="POST">
            <input type="text" name="email" class="int" placeholder="Enter The Email"> <br>
            <input type="password" name="passwd" class="int" placeholder="Enter The Password"> <br>
            <input type="submit" name="insert" class="btn">
        </form>

        <h2>Coder : İskender Eren Göktaş</h2>
    </div>

</body>

</html>