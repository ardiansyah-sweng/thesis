<html>

<head>
    <title>Tutorial Membuat Script PHP Menghitung Luas Persegi Panjang</title>
</head>

<body>
    <h2>Form Hitung Luas Persegi Panjang Dengan PHP</h2>
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $panjang    = $_POST['panjang'];
        $lebar        = $_POST['lebar'];

        // menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang * $lebar;
        // menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2 * ($panjang + $lebar);

        echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Maka luas persegi panjang sama dengan [ $panjang x $lebar ] = $luas_persegi_panjang<br />";
        echo "Maka keliling persegi panjang sama dengan [ 2 x ($panjang + $lebar) ] = $keliling_persegi_panjang";
    }
    ?>
</body>

</html>