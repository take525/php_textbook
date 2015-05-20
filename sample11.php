<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <?php
if(empty($_REQUEST['my_name'])){
    echo('名前を入力してください<br>');
}else{
    echo('正しく入力されています');
}
?>   
</body>
</html>