<?php 
// cek dulu tombol submit sudah diklik atau belum
if(isset($_POST["submit"])) {    
    // cek username dan password apakah sesuai
    if($_POST["username"]=="admin" && $_POST["password"]=="123"){
    // jika sesuai, redirect ke admin dashboard
    header("Location: admin.php");
    exit;   
    // jika salah, tampilkan error message
} else {
        $error = true;
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
</head>
<body>
<h1>Selamat Datang, Silahkan Login</h1>

<?php if(isset($error)) : ?>

<p>Username dan Password tidak sesuai!</p>
    <?php endif ?>
<ul>
    <form action="" method="post">
        <li>
            <label for="username">
                Username
            </label>
            <input type="text" id="username" name="username">
        </li>
        <li>
            <label for="password">
                Password
            </label>
            <input type="password" id="password" name="password">
        </li>

        <button type="submit" name="submit">Login</button>
    </form>
</ul>

</body>
</html>