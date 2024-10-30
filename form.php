<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode GET</title>
</head>
<body>
    <form action=" " method="POST">
        <label for="nama">Nama Lengkap</label> 
        <input type="text" name="nama" id="nama">
        <label for="email">Email</label> 
        <input type="email" name="email" id="email">
        <label for="kelas">Kelas:</label> 
        <select name="kelas" id="kelas">
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
        echo "Nama siswa: ".$_POST['nama'];
        echo "<br>";
        echo "Email siswa: ".$_POST['email'];
        echo "<br>";
        echo "Kelas siswa: ".$_POST['kelas'];
        echo "<br>";
        print_r($_POST);
    ?>
</body>
</html>