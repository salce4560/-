<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                <form action="./api/save_subject.php" method="post">
                    <label> 問卷主題: <input type="text" name="subject">選項一</label>
                    <label for=""><input type="text" name="options[]">選項二</label>
                    <label for=""><input type="text" name="options[]">選項三</label>
                    <label for=""><input type="text" name="options[]">選項四</label>
                    <label for=""><input type="text" name="options[]">選項五</label>
                    <input type="submit">
                </form>
                <!-- <form action="./api/save_subject.php" method="post">
                <label >問卷主題<input type="text" name="subject"></label>
                <label class='list-group-item'>選項一<input type="text" name="options[]"></label>
                <label class='list-group-item'>選項二<input type="text" name="options[]"></label>
                <label class='list-group-item'>選項三<input type="text" name="options[]"></label>
                <label class='list-group-item'>選項四<input type="text" name="options[]"></label>
                <input type="submit" value="送出"> -->
            </div>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</html>