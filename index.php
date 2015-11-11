<?include_once ('core/header.php');?>

<article>
    <form action="send.php" method="get">
        <label>Имя: <input name="username" value="" type="text" /></label>
        <label>E-mail: <input name="email" value="" type="text" /></label>
        <label>Сообщеие: <textarea name="text"></textarea></label>
        <input type="submit" />
    </form>
</article>

<?include_once ('core/footer.php');