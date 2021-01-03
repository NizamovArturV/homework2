<?php
    require (__DIR__ . '/inc.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <style>.red {color: red;}</style>
</head>
<body>
<h1 <?=$red ? 'class="red"' : ''?>><?=$title?></h1>
<div>Авторов на портале <?= count($result3['authors'])?></div>

<!-- Выведите все книги -->
<?php foreach ($result3['books'] as $key => $book): ?>
    <p>Книга <?=$book['bookName']?>, 
    ее написал <?= $result3['authors'][$book['email']]['fullName']?> 
    <?= $result3['authors'][$book['email']]['birthday']  ?> 
    (<?=$book['email']?>)</p>
<?php endforeach; ?>

<!-- Перемешиваем книги и вновь выводим информацию -->

<?php shuffle ($result3['books']); ?>
<?php foreach ($result3["books"] as $key => $book): ?>
    <p>Книга <?=$book['bookName']?>, 
    ее написал <?= $result3['authors'][$book['email']]['fullName']?> 
    <?= $result3['authors'][$book['email']]['birthday'] ?> 
    (<?=$book['email']?>)</p>
<?php endforeach; ?>

</body>
</html>
