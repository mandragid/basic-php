<?php
echo date('l d M Y ', time() - 60 * 60 * 24 * 20);


function getName($name) {
    return "Selamat datang $name!";
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
</head>
<body>
    <h1><?php echo getName('Handi') ?></h1>
</body>
</html>