<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

print('お名前：'.htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));

?>
</body>
</html>
