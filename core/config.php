<?
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=tgpu',
        'root',
        ''
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}