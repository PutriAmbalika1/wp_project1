
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><center>
    <h1>Menghitung Luas Segitiga</h1><br>
<body>
   
    <form method="post" action="LuasSegitiga.php">
       Nilai Alas:<br>
        <input type="number" name="alas" min="0" max="999" required>
        <br>
        Nilai Tinggi:<br>
        <input type="number" name="tinggi" min="0" max="999" required>
        <br>
        Hasil : <br>
        <textarea name="hasil" id="hasil">
        <?php
          if(isset($_POST['hasil'])){
            $alas       =$_POST['alas'];
            $tinggi     =$_POST['tinggi'];
            $hasil      = 1/2 * $alas * $tinggi;
            echo "$hasil";
        }
            ?>
        </textarea>
        <br>
        <input type="submit" name="hasil" value="hasil">
        <button type="reset">hapus</button>
    </form>

</body>
</center>
</html>