<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>
    <?php
    print('PHP')
    ?>
</p>
<a href="<?php print('http://h2o-space.com') ?>">タグの属性にphpを埋め込みました</a>
<?php
echo('<p>PHPはHTMLの中に埋め込んで記述することができます。</p>');
print('<p>改行するときは、<br>brタグを記述します。</p>')
?>
<?php
echo(date('G時i分s秒'));
?>
</body>
</html>
