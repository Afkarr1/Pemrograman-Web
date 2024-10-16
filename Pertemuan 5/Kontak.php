<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo 'Kontak'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- CONTAINER -->
    <div class="container-fluid mt-4">
        <!-- NAVIGATION -->
        <div class="row mb-3">
            <div class="text-center">
                <a href="home.html"><?php echo 'Home'; ?></a>
                <span>|</span>
                <a href="tentang.html"><?php echo 'About'; ?></a>
                <span>|</span>
                <a href="kontak.html"><?php echo 'Contact'; ?></a>
            </div>
        </div>
        <!-- END NAVIGATION -->

        <!-- ISI -->
        <div class="row">
            <div class="col-3 mx-auto p-0">
                <!-- FORM -->
                <form action="konfirmasi_kontak.php" method="POST" >

                    <!-- FORM NAMA -->
                    <div class="row mb-3">
                        <div class="col-2 px-0">
                            <label for="inputNama" class="form-label"><?php echo 'Nama: '; ?></label>
                        </div>
                        <div class="col-10">
                            <input type="text" name="nama" class="form-control" id="inputNama">
                        </div>
                    </div>
                    <!-- END FORM NAMA -->

                    <!-- FORM URL -->
                    <div class="row mb-3">
                        <div class="col-1 px-0">
                            <label for="inputUrl" class="form-label"><?php echo 'URL: '; ?></label>
                        </div>
                        <div class="col-11">
                            <input type="text" name="url" class="form-control" id="inputUrl">
                        </div>
                    </div>
                    <!-- END FORM URL -->

                    <!-- FORM HOBI -->
                    <div class="row mb-3">
                        <div class="col p-0">
                            <label class="mb-2"><?php echo 'Hobi:'; ?></label><br>
                            <input type="checkbox" id="sepak_bola" name="hobi[]" value="Sepak bola">
                            <label for="sepak_bola"><?php echo 'Sepak Bola'; ?></label><br>
                            <input type="checkbox" id="badminton" name="hobi[]" value="Badminton">
                            <label for="badminton"><?php echo 'Badminton'; ?></label><br>
                            <input type="checkbox" id="main_game" name="hobi[]" value="Main game">
                            <label for="main_game"><?php echo 'Menggaming'; ?></label><br>
                        </div>
                    </div>
                    <!-- END FORM HOBI -->

                    <!-- FORM JENIS KELAMIN -->
                    <div class="row mb-3">
                        <div class="col p-0">
                            <label class="mb-2"><?php echo 'Jenis Kelamin:'; ?></label><br>
                            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
                            <label for="laki_laki"><?php echo 'L'; ?></label><br>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                            <label for="perempuan"><?php echo 'P'; ?></label>
                        </div>
                    </div>
                    <!-- END FORM JENIS KELAMIN -->

                    <!-- FORM TANGGAL LAHIR -->
                     <div class="row mb-3">
                        <div class="col p-0">
                            <label for="tanggallahir"><?php echo 'Tanggal Lahir'; ?></label>
                            <input type="date" id="tanggal" name="tgllahir">
                        </div>
                     </div>

                    <!-- BUTTON -->
                    <div class="row">
                        <!-- BUTTON SUBMIT -->
                        <div class="col-auto p-0 me-2">
                            <button type="submit" class="btn btn-primary ml-0"><?php echo 'Konfirmasi'; ?></button>

                        </div>
                        <!-- END BUTTON SUBMIT -->
                    </div>
                    <!-- END BUTTON -->
                </form>
                <!-- END FORM -->
            </div>
        </div>
        <!-- END ISI -->
    </div>
    <!-- END CONTAINER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>