<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Konfirmasi Kontak'; ?></title>
</head>
<body>
    <h1><?php echo 'KONFIRMASI KONTAK'; ?></h1>

    <?php
        $nama = $_POST["nama"];
        $url = $_POST["url"];
        $hobi = $_POST['hobi'];
        $jenisKelamin = $_POST["jenis_kelamin"];
        $tgllahir = $_POST["tgllahir"];

        echo '
        Nama: '.$nama.'
        <br>URL yang Anda masukkan '.$url.'';

        //Function
        //PERIKSA JENIS KELAMIN
        if ($jenisKelamin == "L")
        {
            $jenisKelamin = "Laki-laki";
        }
        else {
            $jenisKelamin = "Perempuan";
        }
        //END PERIKSA JENIS KELAMIN

        //HITUNG UMUR
        function hitung_umur($tgllahir) {
            $lahir = new DateTime($tgllahir);
            $tanggal_sekarang = new DateTime();
            $umur = $tanggal_sekarang->diff($lahir);
            return $umur->y;
        }
        $umur = hitung_umur($tgllahir);
        //END HITUNG UMUR

        //PRINT HOBI
        if (count($hobi) > 1) {
            //gabungin dengan comma
            $hobi_terakhir = array_pop($hobi);
            $strhobi = implode(", ", $hobi) ." dan ". $hobi_terakhir;
        }
        else {
            $strhobi = $hobi[0];
        }
        echo 
        '<br>hobi: '.$strhobi.
        '<br>Jenis kelamin: '.$jenisKelamin.
        '<br>Umur: '.$umur.'';

    ?>

</body>
</html>