<?php
session_start();
include_once 'functions.php';
$products = file("datagoods.txt");
foreach ($products as $id => $product) {
    $productData = explode(' ', $product);
    $allProductsArray[] = $productData;
}
if (count($_POST) > 0) {
    $id = $_POST['id'];
    $productName = $_POST['product-name'];
    $quantityStorage = $_POST['quantity-storage'];
    $countProduct = $_POST['count-product'];
    $price = $_POST['price'];
}

if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['countProduct'] += $countProduct;
} else {
    $_SESSION['cart'][$id] = [
        'id' => $id,
        'productName' => $productName,
        'quantityStorage' => $quantityStorage,
        'countProduct' => $countProduct,
        'price' => $price,
    ];
}
//$product = implode('|', $_SESSION['cart'][$id]);
$product = serialize($_SESSION['cart'][$id]);
file_put_contents('cart.txt' , $product . PHP_EOL, FILE_APPEND );
/*
Создать текстовый файл, содержащий данные товаров (имя, цена, количество),
далее создать php страницу которая будет содержать товары данного файла.

Пользователь может выбрать несколько товаров на странице и нажать кнопку заказать,
после нажатия кнопки заказать необходимо сохранить выбранные товары в сессию,
после перезагрузки страницы отобразить выбранные ранее товары, получив их из сессии.
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <caption>Перечень продуктов</caption>
        <tr>
            <th>№ п/п</th>
            <th>Наименование товара</th>
            <th>Количество на складе</th>
            <th>Необходимое количество</th>
            <th>Цена за ед. изм., руб.</th>
        </tr>
        <?php foreach ($allProductsArray as $id =>$productArray): ?>
            <form action="" method="post">
                <tr>
                    <td><input type="text" name="id" value="<?=$id + 1;?>"></td>
                    <td><input type="text" name="product-name" value="<?=$productArray[0]?>"></td>
                    <td><input type="text" name="quantity-storage" value="<?=$productArray[2]?>"></td>
                    <td><input type="number" name="count-product"/ ></td>
                    <td><input type="text" name="price" value="<?=$productArray[1]?>"></td>
                    <td><button type="submit">Заказать</button></td>
                </tr>
            </form>
        <?php endforeach; ?>
    </table>

    <?php prettyPrint($_SESSION); ?>

</body>
</html>