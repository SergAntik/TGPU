<?include_once ('header.php');?>

<article>
    <form action="send.php" method="get">
        <label>���: <input name="username" value="" type="text" /></label>
        <label>E-mail: <input name="email" value="" type="text" /></label>
        <label>���������: <textarea name="text"></textarea></label>
        <input type="submit" />
    </form>
</article>

<?include_once ('footer.php');