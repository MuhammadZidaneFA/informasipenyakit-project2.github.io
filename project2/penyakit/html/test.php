<?php include("../../conf/koneksi.php"); 
// kalau tidak ada id di query string 
if( !isset($_GET['id'])){
  header('Location: mainpage.php');
}
//ambil id dari query string 
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM nama_penyakit WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>informasi penyakit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--popups-->
  <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
  <!--popups-->

  <!--font poppin -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!--font awesome cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="shortcut icon" href="assets/icon/plus.png" type="image/x-icon">

  <!--CSS-->
  <link rel="stylesheet" href="../css/influenza.css">
  <!--animate style-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!--AOS-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="home">
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success animate__animated animate__fadeInDown">
    <div class="container">
      <a class="navbar-brand fw-bold fs-4 " href="../../mainpage.php">informasi penyakit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center ">
          <li class="nav-item">
            <a class="nav-link active mx-1" aria-current="page" href="../../mainpage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-1" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-1" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-1" href="#services">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-1" href="#faq">FAQ</a>
          </li>
          <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>-->
        </ul>
        <div class="text-center">
          <i class="fa-brands fa-linkedin fs-5 mx-2 "></i>
          <i class="fa-brands fa-facebook fs-5 mx-2 "></i>
        </div>
        <!--<form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
      </div>
    </div>
  </nav>
  <!--Navbar-->

  <!--isi-->
  <div class="isi">
    <div class="container">
      <H1 class="text-center">Penyakit koronavirus 2019</H1>
      <div class="data">
        <h5>Penyakit koronavirus 2019</h5>
        <img src="../../assets/img/projects1/projects-2.png" alt="">
        <p class="a">Gejala COVID-19</p>
        <h5>Informasi umum</h5>
        <p>nama lain:
        <ul>
          <li>Penyakit Koronavirus sindrom pernapasan akut berat 2 (SARS-CoV-2)</li>
          <li>Pneumonia koronavirus baru</li>
          <li>Pneumonia Wuhan[2</li>
          <li>COVID-19</li>
        </ul>
        </p>
        <p>Spesialisasi: Penyakit menular, pulmonologi</p>
        <p>Penyebab: <a class="" class="text-blue" type="button" data-toggle="popover" title="Popover title"
            data-content="And here's some amazing content. It's very engaging. Right?">SARS-CoV-2</a></p>
      </div>

      
      <p><?= $siswa['p1'];?></p>
      <!--<p>Sejarah Coronavirus bermula pada laporan pertama wabah COVID-19 yang berasal dari sekelompok kasus pneumonia
        manusia di Kota Wuhan, China, sejak akhir Desember 2019. Tanggal paling awal timbulnya kasus adalah 1 Desember
        2019. Gejala dari pasien meliputi demam, malaise, batuk kering, dan dispnea yang didiagnosis sebagai gejala
        infeksi virus pneumonia. Awalnya, penyakit itu disebut pneumonia Wuhan oleh pers karena gejala yang serupa
        pneumonia. Hasil sekuensing genom menunjukkan bahwa agen penyebabnya adalah coronavirus baru. Organisasi
        Kesehatan Dunia (WHO) untuk sementara menamai virus baru 2019 novel coronavirus (2019-nCoV) pada 12 Januari 2020
        dan kemudian secara resmi mengubahnya menjadi penyakit coronavirus 2019 (COVID-19) pada 12 Februari 2020.</p>
      <p>Penyakit COVID-19 yang disebabkan oleh virus SARS-CoV-2 atau yang dikenal juga dengan coronavirus masih satu
        keluarga dengan coronavirus penyebab wabah Severe Acute Respiratory Syndrome (SARS) dan Middle East Respiratory
        Syndrome (MERS). Ketiga wabah ini memiliki kecepatan infeksi yang berbeda dalam menjangkiti para korban. Di
        antara ketiganya, COVID-19 adalah yang tercepat dalam mengakibatkan infeksi antar manusia.</p>-->

      <h3>Penyebab dan Gejala <?php echo $siswa['nama']?></h3>
      <p><?php echo $siswa['p1']?></p>


      <h3>Sejarah Munculnya Pertama Kali Covid-19</h3>
      <p>Penyakit COVID-19 telah menjadi pandemi kelima yang didokumentasikan sejak pandemi flu 1918. COVID-19 pertama
        kali dilaporkan di Wuhan, Cina, dan kemudian menyebar ke seluruh dunia. Coronavirus penyebab COVID-19 secara
        resmi dinamai Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2) oleh International Committee on
        Taxonomy of Viruses (ICTV) berdasarkan analisis filogenetik dan taksonomi. SARS-CoV-2 diyakini sebagai limpahan
        dari coronavirus hewan yang kemudian beradaptasi dan berpindah penularannya dari manusia ke manusia. Karena
        virus ini sangat mudah menular, ia menyebar dengan cepat dan terus bermultiplikasi pada populasi manusia.</p>
      <p>Coronavirus adalah keluarga besar dari berbagai virus yang sudah lama berada dalam kehidupan manusia. Beberapa
        di antaranya menyebabkan flu biasa pada manusia, yang lainnya menyebabkan batuk dan gangguan pernapasan ringan.
        Coronavirus menginfeksi hewan, termasuk kelelawar, unta, dan sapi. Ilmuwan telah mengklasifikasikan coronavirus
        ke dalam empat sub-grup yaitu alpha, beta, gamma, dan delta. SARS-CoV-2 ini merupakan anggota ketujuh dari
        keluarga virus corona yang menginfeksi manusia</p>
      <p>Semua coronacirus manusia berasal dari hewan sebagai inang alami. Seperti yang di kutip dari (JVI) Kelelawar
        mungkin merupakan inang alami HCoV-229E, SARS-CoV, HCoV-NL63, dan MERS-CoV. Selain itu, HCoV-OC43 dan HKU1
        mungkin berasal dari hewan pengerat. Kelelawar merupakan reservoir alami utama dari alpha-coronaviruses dan
        beta-coronaviruses. Hewan peliharaan dapat menderita penyakit dan berperan sebagai inang perantara yang
        menyebabkan penularan virus dari inang alami ke manusia; misalnya, SARS-CoV dan MERS-CoV melintasi penghalang
        spesies seperti musang dan unta. Urutan SARS-CoV-2 pada tahap awal wabah COVID-19 hanya memiliki kecocokan
        sebesar 79,6% dengan SARS-CoV melalui perbandingan sekuen genom lengkap. Namun, genom SARS-CoV-2 sangat identik
        (96,2%) dengan Bat-CoV RaTG13, yang sebelumnya terdeteksi di spesies kelelawar Rhinolophus affinis dari Provinsi
        Yunnan, lebih dari 1500 km dari Wuhan.</p>
      <p>Kelelawar kemungkinan besar merupakan inang reservoir SARS-CoV-2. Apakah Bat-CoV RaTG13 langsung melompat ke
        manusia atau menularkan lewat inang perantara untuk memfasilitasi penularan tetap tidak didapatkan bukti
        konkret. Hal tersebut dikarenakan tidak ada sampel inang perantara yang diperoleh para ilmuwan dalam kasus awal
        infeksi di Pasar Makanan Laut dan Satwa Liar Huanan di Wuhan, di mana penjualan hewan liar mungkin menjadi
        sumber infeksi zoonosis.</p>

      <h3>Pencegahan Penyebaran Covid-19</h3>
      <ul>
        <li>Terapkan physical distancing, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar
          rumah kecuali ada keperluan mendesak.</li>
        <li>Gunakan masker saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi berbelanja bahan makanan
          atau mengikuti ibadah di hari raya.</li>
        <li>Rutin mencuci tangan dengan air dan sabun atau hand sanitizer yang mengandung alkohol minimal 60%, terutama
          setelah beraktivitas di luar rumah atau di tempat umum.</li>
        <li>Jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan.</li>
        <li>Tingkatkan daya tahan tubuh dengan menjalani pola hidup sehat, seperti mengonsumsi makanan bergizi,
          berolahraga secara rutin, beristirahat yang cukup, dan mencegah stres.</li>
        <li>Hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang
          yang sedang sakit demam, batuk, atau pilek.</li>
        <li>Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.</li>
        <li>Jaga kebersihan lingkungan dan kebersihan rumah, termasuk benda-benda yang sering disentuh.</li>
      </ul>

      <h3>Cara Penanganan Penyakit</h3>
      <p>Pada pasien bergejala ringan atau tanpa gejala, dokter akan menyarankan untuk isolasi mandiri di rumah sambil
        tetap melakukan langkah-langkah pencegahan penyebaran infeksi virus Corona. Beberapa tindakan yang dapat
        dilakukan oleh dokter adalah:</p>
      <ul>
        <li>Meresepkan obat pereda demam dan nyeri yang aman dan sesuai dengan kondisi pasien</li>
        <li>Menganjurkan pasien untuk melakukan isolasi mandiri dan istirahat yang cukup </li>
        <li>Menganjurkan pasien untuk banyak minum air putih untuk menjaga kadar cairan tubuh</li>
      </ul>
      <p>Antibiotik tidak ampuh dalam melawan infeksi virus apapun. Oleh karena itu, penggunaan antibiotik untuk
        mencegah atau mengobati infeksi virus Corona sangat tidak dianjurkan.</p>
      <p>Sementara, pada pasien dengan gejala berat, dokter akan memberikan rujukan untuk menjalani karantina di rumah
        sakit rujukan. Metode perawatan yang dapat diberikan antara lain:</p>
      <ul>
        <li>Pemberian infus cairan agar tetap terhidrasi</li>
        <li>Pemasangan ventilator atau alat bantu napas</li>
        <li>Pemberian obat, seperti obat antiperadangan dan obat pencegah penggumpalan darah</li>
      </ul>
      <p>Beberapa jenis antivirus, yaitu favipiravir, molnupiravir, dan remdesivir, telah diteliti untuk melawan virus
        corona. Namun, hingga saat ini, hasil penelitian menunjukkan bahwa obat antivirus tidak efektif dalam mengobati
        COVID-19 serta tidak efektif dalam menurunkan angka kematian.</p>
      
     

    </div>
  </div>

  <!-- Footer-->
  <div class="footer pt-5">
    <div class="container">
      <div class="row row-cols-lg-3 row-cols-1 justify-content-between ">
        <div class="col col-lg-6 mb-lg-0 mb-4">
          <h2 class="fw-bold text-white mb-3">informasi penyakit</h2>
          <p class="text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum placeat reiciendis
            ad, tempore tempora velit modi sint sunt hic mollitia!</p>

        </div>
        <div class="col col-lg-2 d-flex flex-column mb-lg-0 mb-4">
          <h5 class="fw-bold text-white">menu</h5>
          <a href="#home" class="text-white-50 mt-2 text-decoration-none">home</a>
          <a href="#about" class="text-white-50 mt-2 text-decoration-none">about</a>
          <a href="#projects" class="text-white-50 mt-2 text-decoration-none">projects</a>
          <a href="#services" class="text-white-50 mt-2 text-decoration-none">service</a>
          <a href="#faq" class="text-white-50 mt-2 text-decoration-none">faq</a>
        </div>
        <div class="col col-lg-3 d-flex flex-column  mb-lg-0 mb-4">
          <h5 class="fw-bold text-white mb-3">contact</h5>
          <a href="#" class="text-white-50 mt-2 text-decoration-none mt-2">building@gmail.com</a>
          <a href="#" class="text-white-50 mt-2 text-decoration-none mt-2">555-555-555</a>
          <a href="#" class="text-white-50 mt-2 text-decoration-none mt-2">@buildingID (telegram)</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-white text-center copyright">&copy: copyright 2022 by ngoding mastery, all right resevrd</p>
        </div>
      </div>
    </div>
  </div>

  <!--popups-->
  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
  </script>
  <!--popups-->

  <!-- Footer-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <!--JS-->
  <script src="../../dist/js/script.js"></script>
  <!--AOS-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>

    AOS.init();
  </script>
</body>

</html>