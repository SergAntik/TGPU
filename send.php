<?include_once ('header.php');?>
<pre>
<?
array_filter($_POST, 'trim');

$user = ( ! empty ($_GET['username'])) ? $_GET['username'] : 'anonymous';

if ( ! empty ($_GET['username']))
{
    $user = $_GET['username'];
}
else
{
    $user = 'anonymous';
}

$email = ( ! empty ($_GET['email'])) ? '(' . $_GET['email'] . ')' : '';
$text = ( ! empty ($_GET['text'])) ? filter_var($_GET['text'], FILTER_SANITIZE_STRING) : '';

$line = $user . $email . ' => ' . $text . PHP_EOL;

file_put_contents('send.txt', $line, FILE_APPEND | LOCK_EX);

?>
</pre>

<?include_once ('footer.php');
