<?php 

// array di php bisa pake tipe data yang berbeda
// array adalah pasangan key dan value
// key = index (dimulai dari 0) dan value atau isinya 

// cara lama
$hari = array("Senin","Selasa","Rabu");

// cara baru
$bulan = ["Jan","Feb","Mar"];

// menampilkan array
// var_dump() / print_r() -> lebih ringkas, tidak ditampilkan tipe datanya

// print_r($hari);


// menambahkan elemen baru dalam array

// $hari[] = "Kamis";
// echo "<br>";
// print_r($hari);
// ?>

<!-- looping array -->

<?php 

$num = [1,122,33,56,21,74,22,85,92,20]



?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Array</title>
    <style>
        div {
            background-color: salmon;
            width: 30px;
            display: flex;
            flex-wrap: wrap;
            margin: 15px;
            padding: 20px;
            float: left;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- fungsi count untuk set loop sesuai isi array didalam variabel -->
    <?php for($i=0; $i < count($num); $i++){?>
        <div>
          <?php echo $num[$i]; ?>
        </div>
        <?php }?>

<!-- menampilkan isi array menggunakan metode foreach -->
<!-- ganti kurung kurawal buka dengan : , dan penutup dengan enfor.... -->
<!-- php echo bisa diganti dengan =  -->
        
    <?php foreach($num as $n):?>
        <div> <?= $n; ?></div>
        
        <?php endforeach; ?> 
</body>
</html>