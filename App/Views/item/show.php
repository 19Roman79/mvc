
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?= $cat ?></h1>
<div class="container">
    <?php foreach ($name_cat as $cat) { ?>
        <div class="post">
            <?= $cat['title']?>

        </div>
    <?php }?>
</div>
<table border="solid">
    <tr>
        <td>id</td>
        <td>title</td>
        <td>price</td>
    <tr>
    </tr>
        <?php foreach ($cat_id as $value) { ?> // Делал как понял но наверное нужна форма и кнопка отправить к которой
            привязка по Id и из таблицы вытаскивать значение одного товара?????//
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['title'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <?php }?>
    </tr>
</table>

</body>
</html>
