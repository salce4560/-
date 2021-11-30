<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=homework";
$pdo=new PDO($dsn,'root','');
$range=(isset($_GET['id']))?$_GET['id']:3;

$sql="select * from `home` where `id`< $range";
$rows=$pdo->query($sql)->fetchAll();


?>
<?php
    $data = [
        ["id"=>"1","src"=>"1020", "chinese" =>"從前從前...."],
        ["id"=>"2","src"=>"1021", "chinese" =>"2222...."],
    ];

    print_r($data[0]['id']);
?>
<?php
 if(!empty($_GET['ns'])){
    $ns=$_GET['ns']+1;
}else{
    echo"123";
    $ns=1;
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .box {
            border: 1px solid black;
            height: 200px;
        }
    </style>
</head>


<body>
    <div class="cotainer mt-3">
        <div class="row">
            <div class="col text-center">            
                <img class="img-fluid" src="https://picsum.photos/id/<?= $data[0]['src'];?>/800/600" width="50%" alt="page1">
                <!-- <img class="img-fluid" src="https://fakeimg.pl/800x600/ff0000/000" width="50%" alt="page1"> -->
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-2 text-center">
                <!-- <button type="button" class="btn btn-primary btn-lg">Primary</button> -->
                
                <a href="#test123"><i class="fas fa-arrow-left display-1"></i></a>
            </div>
            <div class="col-sm-8 text-center">
                <div class="box">
                    <p>
                        <?php                     
                       print_r($rows[0]['chinese']);
                       echo"<br>";
                       print_r($rows[0]['english']);
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-2 text-center align-self-sm-center">
                <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                <a href="home.php?ns=<?=$ns;?>"><i class="fas fa-arrow-right display-1"></i></a>
            </div>
        </div>
    </div>
    <br><br><br>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>

</html>