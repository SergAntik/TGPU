<?include_once ($_SERVER['DOCUMENT_ROOT'].'/core/header.php');?>

<article>
    <h2>Список товаров</h2>
    <? foreach($db->query('SELECT * from products') as $product) : ?>
        <div style="product">
            <h3><?=$product['NAME']?></h3>
            <p><?=$product['TEXT']?></p>
            <p>Цена: <?=$product['PRICE']?> руб.</p>
            <p>Количество: <?=$product['QUANTITY']?> шт.</p>
            <p><button>Купить</button></p>
        </div>
    <? endforeach; ?>
</article>

<?include_once ($_SERVER['DOCUMENT_ROOT'].'/core/footer.php');