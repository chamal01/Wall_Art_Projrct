<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count User1 with Status 1</title>
</head>
<body>
    <div>
    <?php
$c = new mysqli('localhost', 'root', '', 'phpcrud');
$r = $c->query("SELECT COUNT(*) c FROM tblusers WHERE status = 1");
echo $r ? $r->fetch_assoc()['c'] : 'Error: ' . $c->error;
$c->close();
?>

    </div>
</body>
</html>
