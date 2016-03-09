<?include_once ($_SERVER['DOCUMENT_ROOT'].'/core/header.php');?>

    <article>
        <form action="send.php" method="get">
            <label>Имя: <input name="username" value="" type="text" /></label>
            <label>E-mail: <input name="email" value="" type="text" /></label>
            <label>Сообщеие: <textarea name="text"></textarea></label>
            <input type="submit" />
        </form>
    </article>

<?include_once ($_SERVER['DOCUMENT_ROOT'].'/core/footer.php');