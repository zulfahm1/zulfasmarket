<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adine | Tugas PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Awal Navbar -->
    <div class="navbar">
        <a href="#" class="a1">ZULFAHMI SYAM</a>
        <a href="#dana" class="a2">CEK DANA BELANJA</a>
        <a href="#discount" class="a3">CEK DISCOUNT</a>
    </div>

    <!-- Awal judul -->
    <div class="judul">
        <p class="jdt">ZULFAS MARKET</p>
    </div>

    <!-- awal main -->
    <div class="main">
        <form action="" method="post">
            <div class="card1">
                <label class="jdin">Masukkan Dana Belanja
                    <input class="in" type="number" id="dana" name="dana" placeholder="Masukkan Dana Yang Kamu Gunakan..." value="<?php echo isset($_POST['dana'])? $_POST['dana']: ""; ?>">
                </label>
                <input type="submit" class="btnanimas" value="K I R I M">
                <br>

                <?php
                    if ((isset($_POST["dana"])) == null){
                        echo "<i class='material-icons'>sentiment_satisfied</i>";
                        echo "<p class='pcard'>Inputkan Data Dana Belanja dan Saya Akan Berkomentar</p>";
                    }elseif (isset($_POST["dana"])){
                        $dana = (int)$_POST['dana'];

                        if ($dana == 40000){
                            echo "<i class='material-icons'>sentiment_very_satisfied</i>";
                            echo "<p class='pcard'>Mantab! Dana yang anda gunakan PAS, Segera pulang dan masak.</p>";
                        }elseif ($dana == 0){
                            echo "<i class='material-icons'>sentiment_dissatisfied</i>";
                            echo "<p class='pcard'>Yang Anda Masukkan 0! Ngajak Berantem?</p>";
                        }elseif ($dana < 0){
                            echo "<i class='material-icons'>sentiment_dissatisfied</i>";
                            echo "<p class='pcard'>Yang Anda Masukkan Minus! Ngajak Berantem?</p>";
                        }elseif ($dana > 40000){
                            echo "<i class='material-icons'>sentiment_very_dissatisfied</i>";
                            echo "<p class='pcard'>Dana Yang Anda Gunakan Melebihi Batas, Harap di Kurangi!</p>";
                        }elseif ($dana < 40000){
                            echo "<i class='material-icons'>sentiment_very_dissatisfied</i>";
                            echo "<p class='pcard'>Dana Masih Sisa, Coba Maksimalkan Lagi!</p>";
                        }else{
                            echo "<i class='material-icons'>sentiment_dissatisfied</i>";
                            echo "<p class='pcard'>Nginput Yang Bener Bambang</p>";
                        }
                    }
                ?>
            </div>
            <div class="card2">
                <label class="jdin">Masukkan Harga Barang
                    <input class="in" type="number" id="discount" name="discount" placeholder="Besar Harga yang kamu Bayarkan..." value="<?php echo isset($_POST['discount'])? $_POST['discount']: ""; ?>">
                </label>
                <input type="submit" class="btnanimas" value="K I R I M">
                <br>

                <?php
                    if (isset($_POST["discount"]) == null){
                        echo "<i class='material-icons'>policy</i>";
                        echo "<p class='pcard'>Harga Akan Muncul Disini (Sudah termasuk potongan 17,5%).</p>";
                    } elseif (isset($_POST["discount"])){
                        $potongan = (int)$_POST["discount"];

                        if ($potongan <= 0){
                            echo '<i class="material-icons">error</i>';
                            echo "<p class='pcard'>Masukkan Nilai Yang Bener Parjo!</p>";
                        }
                        else {
                            $discount = 17.5/100 * $potongan;
                            echo "<i class='material-icons'>check_circle</i>";
                            echo "<p class='pcard'>Dengan Potongan 17.5% Kamu Cukup Membayar: Rp.". ($potongan - $discount) . "</p>";
                        }
                    }
                ?>
            </div>
        </form>
    </div>

    <!-- awal footer -->
    <div class="footer">
        <p>&copy; copyright 2019 | build with <i class="material-icons">favorite</i> by <a href="https://www.instagram.com/adine_pamungkas/" target="_blank">Adi Pamungkas</a>.</p> 
    </div>

</body>
</html>
