<?php
include_once ("koneksi.php");
session_start();
$nama_pengguna = "";

// Apabila langsung mengakses user.php tanpa login, maka akan diarahkan ke login.php untuk login terlebih dahulu
if (isset($_SESSION['nama'])) {
    // Jika pengguna sudah login, dapatkan nama pengguna dari $_SESSION['nama']
    $username = $_SESSION['nama'];
    // Lakukan query SQL untuk mendapatkan nama dari pengguna dengan username yang sesuai
    $query = "SELECT name FROM tb_user WHERE username = '$username'";
    $hasil = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($hasil) {
        // Ambil hasil query
        $row = mysqli_fetch_assoc($hasil);
        $nama_pengguna = $row['name'];
    } else {
        // Jika query gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Menuju login.php jika pengguna belum login
    header("location:login.php");
    exit; // Keluar dari skrip
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Wisata</title>
    <link rel="icon" href="./asset/Logo.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   
</head>
<body>

<!-- Background Video & Header -->

    <div class="banner">
        <video src="./asset/bgvid.mp4" type="video/mp4" autoplay muted loop></video>
    
    <!-- Header -->

    <div class="content" id="home"> 
        <nav>
            <img src="./asset/Logo.png" class="logo" alt="Logo" title="Pesona Wisata">
            
            <ul class="navbar">
                <li>
                <a href="#home">Beranda</a>
                <a href="#locationsuser">Destinasi</a>
                <a href="./riwayattransaksi.php">Riwayat Transaksi</a>
                <a href="editprofile.php">Edit Profile</a>
                <a href="./logout.php">Logout</a>
                </li>
            </ul>
        </nav>
 
        <div class="title">
            <h1>PESONA WISATA</h1>
            <p>Rencanakan liburan mu dengan sebaik mungkin melalui Pesona Wisata!</p>
            <h3>Selamat Datang <?php echo $nama_pengguna; ?>!</h3>
        </div>
    </div>
    </div>

<!-- Services -->

<section class="container">
    <div class="text">
        <h2>Kita punya service terbaik buat kamu!</h2>
    </div>
    <div class="rowitems">
        <div class="container-box">
        <div class="container-image">
           <img src="./asset/1a.png" alt="Flight Services">
        </div>
            <h4>Holiday Services</h4>
            <p>Online Ticket Booking</p>
        </div>
    </div>
</section>

<!-- Destinasi -->

<section class="locationsuser" id="locationsuser">
    <div class="package-title">
        <h2>Destinasi</h2>
    </div>

    <div class="location-content">
        
        <a href="./locationsuser.php#Papua"><div class="col-content">
            <img src="./asset/ampat.jpg" alt="">
            <h5>Papua</h5>
            <p>Raja Ampat</p>
        </div></a>

       

        <a href="./locationsuser.php#Nusa Tenggara Timur"><div class="col-content">
            <img src="./asset/bajo.jpg" alt="">
            <h5>Nusa Tenggara Timur</h5>
            <p>Labuan Bajo</p>
        </div></a>

        <a href="./locationsuser.php#Sumatra Utara"><div class="col-content">
            <img src="./asset/toba.jpg" alt="">
            <h5>Sumatra Utara</h5>
            <p>Danau Toba</p>
        </div></a>

        <a href="./locationsuser.php#Jawa Timur"><div class="col-content">
            <img src="./asset/merah.jpg" alt="">
            <h5>Jawa Timur</h5>
            <p>Pulau Merah</p>
        </div></a>

        <a href="./locationsuser.php#Bali"><div class="col-content">
            <img src="./asset/nusa.jpg" alt="">
            <h5>Bali</h5>
            <p>Nusa Penida</p>
        </div></a>

        <a href="./locationsuser.php#Maluku"><div class="col-content">
            <img src="./asset/neira.jpg" alt="">
            <h5>Maluku</h5>
            <p>bandai Neira</p>
        </div></a>

        <a href="./locationsuser.php#Kalimantan Timur"><div class="col-content">
            <img src="./asset/derawan.jpg" alt="">
            <h5>Kalimantan Timur</h5>
            <p>Pulau Derawan</p>
        </div></a>

        <a href="./locationsuser.php#Sulawesi Utara"><div class="col-content">
            <img src="./asset/bunaken.jpg" alt="">
            <h5>Sulawesi Utara</h5>
            <p>Pulau Bunaken</p>
        </div></a>

    </div>
</section>

<!-- Packages -->

<!-- <section class="package" id="package">
    <div class="package-title">
        <h2>Packages</h2>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <img src="./asset/p1.jpg" alt="">
                <h3>Rp 200.000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Backpacker</h4>
                <ul class="pac-details">
                    <li>2 Star Hotel</li>
                    <li>1 Nights Stay</li>
                    <li>Free Snack</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="./asset/p2.jpg" alt="">
                <h3>Rp 550.000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Silver</h4>
                <ul class="pac-details">
                    <li>3 Star Hotel</li>
                    <li>3 Nights Stay</li>
                    <li>Free Snack</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./asset/p3.jpg" alt="">
                <h3>Rp 825.000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Gold</h4>
                <ul class="pac-details">
                    <li>4 Star Hotel</li>
                    <li>5 Nights Stay</li>
                    <li>Breakfast and Dinner</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./asset/p4.jpg" alt="">
                <h3>Rp 1.215.000/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Platinum</h4>
                <ul class="pac-details">
                    <li>5 Star Hotel</li>
                    <li>7 Nights Stay</li>
                    <li>Breakfast, Lunch and Dinner</li>
                    <li>Ballroom</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

    </div>

</section> -->

<!-- Newsletter -->

<!-- <section class="newsletter">
    <div class="newstext">
        <h2>Newsletter</h2>
        <p>Subscribe to get offers and latest<br>updates every week!</p>
    </div>

    <div class="send">
        <form action="">
            <input type="email" name="emailid" placeholder="E-mail" required>
            <input type="submit" value="Subscribe">
        </form>
    </div>

</section> -->

<!-- Footer -->

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Kritik dan Saran</a></li>
                </ul>
            </div>

            <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    <a href="https://github.com/NovallFirmansyah/Project-UASS.git" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="end">
        <p>Copyright © 2024 Pesona Wisata.<br>Website developed by: Group 4</p>
    </div>
</section>


 
</body>
</html>
