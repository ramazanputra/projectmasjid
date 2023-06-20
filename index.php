<?php
require 'koneksi.php';
$all_data = query("SELECT * FROM data_donatur");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masjid Al Ikram</title>
  
<style>
     /* Header */
     header {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 20px 50px;
        box-shadow: 0 1px 8px #ddd;
        position: sticky;
        left: 0;
        top: 0;
        background-color: #fff;
        z-index: 999;

    }

    #nav-title {
        margin-left: 10px;
        margin-right: auto;
        font-size: 1.5em;
    }

    header li {
        list-style: none;
        display: inline-block;
        padding: 0 20px;
    }

    header a {
        text-decoration: none;
        color: #555;
        transition: all 0.3s ease 0s;
    }

    header a:hover {
        color: #b2dfdb;
    }

    @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap%27');

    .btn {
        display: flex;
        margin-top: -100px;
        text-align: center;
        margin-left: 50px;
    }

    .btn a {
         align-items: flex-start;

    }

    .btn button {
        background-color: #1F3984;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        margin-top: -100px;
    }

    .btn button:hover {
        background-color: #213363;
    }

    .foto1 {
        margin-top: -317px;
        margin-left: 730px;
    }

    .content2{
        padding-left: 145px;
        padding-top: 90px;
        line-height: normal;
        border-radius: 15px;
    }
    .kotak{
        background-color: #fff;
        width: 990px;
        height: 250px;
        border-radius: 10px;
        top: 50%;
        left: 50%;
        /* position: center; */
        padding: 10px;
        box-shadow: 0 0 10px rgb(197, 197, 197);
    }
    .kotak p{
        text-align: center;
        font-weight: bolder;
    }
    .progress{
        background-color: #1F3984;
        width: 30%;
        height: 35px;
        border-radius: 5px;
    }
    .progress1{
        background-color: #DDE6ED;
        width: 80%;
        height: 35px;
        border-radius: 5px;
    }
    .progress2{
        background-color: #1F3984;
        width: 100%;
        height: 45px;
        border-radius: 5px;
        padding-top: 15px;
        margin-top: 40px;
        color: #fff;
    }
    .total{
        border-radius: 10px;
        width: 93%;
        height: 100px;
        margin-inline-start: 30px;
        padding-top: 10px;
        display: flex;
        justify-content: space-between;
        line-height: 200%;
        font-size: large;
    }

    .card1 {
    width: 250px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    padding: 50px;
    text-align: center;
    display: inline-block;
    margin: 20px;
    margin-right: 50px;
  }

  .logo1 {
    display: block;
    max-width: 80%;
    height: 80px;
    margin-bottom: 20px;
  }
  .name-1 {
    text-align: left;
    font-size: 35px;
    font-weight: bold;
    margin-bottom: 5px;
  }
  .contact-1 {
    text-align: left;
    font-size: 20px;
    line-height: 1.5;
    margin-bottom: 10px;
  }
  .foto_bersama{
    margin-top: -920px;
    margin-left: 890px;
    
  }

  .foto_bersama img {
    width: 335px;
    height: 900px;
    border-radius: 10px;
  }
    
    .kartu p {
        font-size: 22px;
        font-family: Arial, Helvetica;
        line-height: 20px;
        color: #213363;
        display: inline-block;
    }

    .kartu p.small {
        font-size: 14px;
        margin-top: 5px;
    }

    .kartu1 {
        display: flex;
        width: 500px;
        height: 80px;
        border-radius: 10px;
        padding: 32px 24px;
        margin: 12px;
        margin-top: 55px;
        text-decoration: none;
        z-index: 0;
        overflow: hidden;
        display: inline-block;
        margin-left: 50px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .kartu h2{
        font-family: Arial, Helvetica;
        font-style: normal;
        font-size: 25px;
        line-height: 40px;
        margin-top: -25px;
        color: #213363;
    }

    .kartu1 h3{

        font-family: Arial, Helvetica;
        font-style: normal;
        font-size: 25px;
        line-height: 40px;
        margin-top: -5px;
        flex: none;
    }

    .fotomsja {
        position: relative;
        width: 300px;
        height: 400px;
        left: 50px;
        top: 100px;

        border-radius: 30px;
    }

    .fotomsjb {
        position: relative;
        width: 300px;
        height: 400px;
        left: 103px;
        top: 100px;

        border-radius: 30px;
    }

    .fotomsjd {
        position: relative;
        width: 300px;
        height: 400px;
        left: 155px;
        top: 100px;

        border-radius: 30px;
    }


    h1 .color1 {
        color: #25377F;
        font-family: 'Patrick Hand', cursive;
    }
    h1 {
        font-size: 45px;
        width: 50%;
        float: left;
        margin-left: 50px;
    }
    .text1 {
        width: 631px;
        height: 41px;

        font-family: 'Be Vietnam Pro';
        font-style: normal;
        font-weight: 500;
        font-size: 29px;
        line-height: 138%;
        letter-spacing: 0.015em;
        color: #919191;
        flex: none;
        order: 0;
        flex-grow: 0;
        margin-top: 120px;
        margin-left: 50px;
    }
    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica;
    }

    .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;;
    padding: 5px 5%;
    }

    .gallery img {
    width: 350px;
    height: 550px;
    object-fit: cover;
    margin: 10px;
    border-radius: 20px;
    }

    .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }
  
  .footer-main {
    background-color:#004258;
    padding: 24px 60px;
    color: white;
  }
  
  .footer-grid {
    display: grid;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(2, auto);
    grid-gap: 10px;
    margin: 0 auto;
    max-width: 100%;
    justify-items: center;
  }
  
  @media (max-width: 1024px) {
    .footer-grid {
      padding-left: 20px;
    }
  }
  
  .footer-grid p {
    margin: 10px 0;
  }

  .card2 {
    max-width: 730px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    padding: 70px;
    text-align: center;
    display: inline-block;
    margin: 20px;
  }

  .scroll{
    background: #1F3984;
    width: 92%;
    margin-left: 54px;
    border-radius: 5px;
  }

  .card2 h1{
    text-align: left;
    color: #1F3984;
    font-weight: bold;
  }


  .card-2 {
    background-color: #f2f2f2;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    padding: 50px;
    width: 1050px;
    margin-left: 60px;
  }
  
  .section-2 {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
  }
  
  .section-2 span {
    color: #999999;
    font-size: 12px;
  }

  .section-2 .value-2 {
    font-weight: bold;
    font-size: 18px;
    text-align: center;
  }
  
  .progress-bar-2 {
    background-color: #1F3984;
    height: 20px;
    border-radius: 10px;
    margin-bottom: 10px;
  }
  
  .progress-bar-2 .progress-2{
    height: 100%;
    background-color: #66CCFF;
  }

  .text1 h1{
    text-align: 20px;
  }
  .text1 p{
    text-align: 10px;

  }
  
  table {
    width: 95%;
    border-collapse: collapse;
    justify-content: center;
    margin-left: 35px;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  html{
        scroll-behavior:smooth;
    }   
</style>

  <!-- Navbar -->
<header>
        <img src="foto/logowk.png" alt="" width="40">
        <h1 id="nav-title">SMK Wikrama Bogor</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#cara">Cara Waqaf</a></li>
                <li><a href="#data.php">Data Waqaf</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
        </nav>
    </header>
</head>
<body>
  <h3 class= "text1" id="index.php">Masjid Besar SMK Wikrama Bogor</h3> 
    <h1>Mari <span class="color1">Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor.</h1>
    <img class ="foto1" src="foto/desk-masjid.png" alt="">
    <div class="btn"><a href="bantuan.php"><button>Beri Bantuan shodaqoh</button></a></div>
    <br><br><br><br><br><br>
    <div class="card-2">
    <div class="section-2">
      <div>
      <h3>Total Dana</h3>
            <div class="value-2" id="total-target">
              <h1>900.000,00</h1>
            </div>
        </div>
      <div>
      <h3>Total Dana Terkumpul</h3>
          <div class="value-2" id="total-dana">
                <?php
                    $total_dana = 0;
                    $tota_harus = 1000.000;
                    $query = "SELECT nominal FROM data_donatur";
                    $result = mysqli_query($db, $query);
    
                    while ($row = mysqli_fetch_assoc($result)){
                    $total_dana += $row['nominal'];
                    }
                    $format_nominal = number_format($total_dana, 3, '.', '.');
                    $bar = ($format_nominal / $tota_harus) * 100;
                ?>
                <?php
                    echo '<h1 style="font-size: 35px;  color:black"> Rp: '. $format_nominal .',00</h1>';
                ?>
          </div>
      </div>
      <div>
          <h3>Total Donatur</h3>
            <div class="value-2" id="total-donatur">
              <div class="total-donatur">
                <?php $angka = 0; ?>
                <?php foreach ($all_data as $data) : ?>
                <?php $angka++ ?>
                <?php endforeach; ?>
                <h1><?= $angka; ?></h1>
              </div>
              </div>
        </div>
      </div>
      <hr>
    <div class="display: flex; justify-content: center">
      <div class="progress-bar-2" style="width: 85%; background-color: #999999; height: 40px; border-radius: 5px; overflow: hidden; text-align: center; ">
      <div class="progress-2" style=" width: <?php echo $bar ?? 0 ?>%;"></div>
      <span class="progress-text-2" style="position: absolute; float:top; margin-top:195px; top: 93%; left: 87%; transform: translate(-50%, -50%); color: white; "><?php echo '<h1 style="color:black">' . $bar . '%<h1>'; ?></span>
    </div>
</div>
</div>
          <div class="scroll">
            <marquee behavior="scroll" direction="left" scrollamount="30" style=" width: 100%; white-space: nowrap;overflow: hidden;">
              <?php foreach ($all_data as $data) { ?>
                <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: white;">
                  <?= $data["nama_donatur"]; ?>
                  <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: white;">-</h3>
                </h3>
                  <h3 style="display: inline-block; margin: 0; padding-right: 50px; color: yellow;">
                  <?= $data["kategori"]; ?>
                  Rp. <?= number_format($data['nominal'], 3, '.', ','); ?>
                    </h3>
                <?php } ?>
          </marquee>
        </div>
    </div>
  </div>
  </div>
    <br><br><br><br><br>
    <h1><span class="color1">Manfaat</span> Wakaf, infaq, sodakoh.</h1>
    <h3 class = "text1">Berikut adalah beberapa keutamaan wakaf, infaq shodaqoh yang akan anda dapatkan</h3>
    <br><br><br><br><br>
        <div class="card1">
        <img src="foto/lov.png" alt="Logo" class="logo1">
        <div class="name-1">Menjadikan hati lebih tenang</div>
        <div class="contact-1">
        Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami
        </div>
    </div>
    <div class="card1">
        <img src="foto/ceklis.png" alt="Logo" class="logo1">
        <div class="name-1">Menjauhkan dari bahaya</div>
        <div class="contact-1">
        Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."
        </div>
    </div>
    <br>
    <div class="card1">
        <img src="foto/perisai.png" alt="Logo" class="logo1">
        <div class="name-1">Terbukanya pintu rezeki </div>
        <div class="contact-1">
        Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.
        </div>
    </div>
    <div class="card1">
        <img src="foto/bintang.png" alt="Logo" class="logo1">
        <div class="name-1">pahala yang tak terputus</div>
        <div class="contact-1">
        Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.
        </div>
    </div>
    <div class="foto_bersama">
        </foto><img src="foto/bersama.png">
    </div>
    <br><br><br><br><br>
    <h1><span class="color1" id="cara">Cara Melakukan</span> Wakaf, infaq, sodakoh.</h1>
    <h3 class = "text1">Berikut adalah beberapa keutamaan wakaf, infaq shodaqoh yang akan anda dapatkan</h3>
    <div class="kartu">
        <div class="kartu1" href="#"> 
            <h2>01</h2>
            <h3>Isi Form Data Diri</h3>
            <p class="small">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan terliti.</p>
        </div>
        <div class="kartu1" href="#"> 
            <h2>02</h2>
            <h3>Isikan Nominal Shodaqoh</h3>
            <p class="small">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
        </div>
        <div class="kartu1" href="#"> 
            <h2>03</h2>
            <h3>Upload Bukti Pembayaran</h3>
            <p class="small">Pilih motode pembayaran dan upload bukti pembayaranya.</p>
        </div>
        <div class="kartu1" href="#">
            <h2>04</h2>
            <h3>Verifikasi Pembayaran</h3>
            <p class="small">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
        </div>
    </div>
    <br><br><br><br><br>
    <h1><span class="color1" id="data.php">Dana Donataur</span> Wakaf, infaq, sodakoh.</h1>
    <h3 class = "text1">Berikut adalah data donatur wakaf, infaq shodaqoh untuk masjid besar SMK Wikrama Bogor</h3>
    <br><br><br><br>
    <div class= "table-responsive">
        <table border="1" cellpadding="10" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Donatur</th>
              <th>Paket</th>
              <th>Kategori</th>
              <th>Nominal</th>
            </tr>
          </thead>

    <tbody>
    <?php $i = 1; ?>
        <?php foreach( $all_data as $data ) { ?>
        <tr>
            <td><?= $data["nama_donatur"]?></td>
            <td><?= $data["paket"] ?></td>
            <td><?= $data["kategori"] ?></td>
            <td><?= $data["nominal"] ?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php } ?>
                    </tbody>
        </table>
    <br><br><br><br><br>
    <h1><span class="color1" id="gallery">Gallery</span> Masjid Besar SMK Wikrama Bogor</h1>
    <h3 class = "text1">Berikut adalah gallery masjid besar SMK Wikrama Bogor</h3>
    <br><br><br>
    <div class="gallery">            
              <img src="foto/masjid1.jpg" alt="Above Photo 1">
              <img src="foto/masjid2.jpg" alt="Above Photo 2">
              <img src="foto/masjid3.jpg" alt="Above Photo 3">
            </div>

            <div class="gallery">
              
              <img src="foto/masjid4.jpg" alt="Below Photo 1">
              <img src="foto/916.jpeg.jpg" alt="Below Photo 2">
                <img src="foto/masjid5.jpg" alt="Below Photo 3">
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="clearfix"></div>
            <footer class="footer-main">
                <div class="footer-grid">   
                      <section class="footer-1">
                        <h4>Tentang RPL</h4>
                          <p>Sejarah</p>
                          <p>Kompetensi</p>
                          <p>Profesi</p>
                          <p>Kerjasama</p>
                      </section>
                     <section class="footer-2">
                        <h4>Alamat</h4>
                        <p>Jl. Raya Wangun
                            Kelurahan Sindangsari
                            Bogor Timur 16720</p>
                        <h4>Telepon</h4>
                        <p>0251-8242411 / 082221718035(Whatsapp)</p>
                      </section>
                     <section class="footer-3">
                       <h4>Sosial Media</h4>
                         <p>Instagram : @rplwikrama</p>
                         <p>Youtube : RPL Wikrama</p>
                     </section>
                </div>
            </footer>

</body>

</html>