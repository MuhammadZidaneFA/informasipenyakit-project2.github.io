<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>informasi penyakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
    <!--font poppin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!--font awesome cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="shortcut icon" href="assets/icon/plus.png" type="image/x-icon">

<!--CSS-->
<link rel="stylesheet" href="../penyakit/css/influenza.css">
<!--animate style-->
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!--AOS-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
  <body id="home">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success animate__animated animate__fadeInDown">
        <div class="container">
          <a class="navbar-brand fw-bold fs-4 " href="../../mainpage.html">informasi penyakit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center ">
              <li class="nav-item">
                <a class="nav-link active mx-1" aria-current="page" href="../../mainpage.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1"  href="#about">About Us</a>
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
<fieldset>
    <div class="isi">
    <form action="add/proses_tambah.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <H1 class="text-center"><label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" /></H1>
            <div class="data">
            <h5>Influenza</h5>
            <img src="../../assets/img/projects1/projects-1.jpg" alt="">
            <p class="a">TEM dari virus influenza, diperbesar kurang lebih 100.000 kali lipat.</p>
            <h5>Informasi umum</h5>
            <p>Spesialisasi: 	Kedokteran keluarga, Pulmonologi, penyakit infeksi, Kedokteran gawat darurat </p>
            <p>Penyebab:	Virus influenza (famili Orthomyxoviridae)</p>
        </div>
            
            <div class="form-group">
                <label for="img1">Example file input</label>
                <input type="file" class="form-control-file" id="img1" name="img1">

                <!--<label class="form-label" for="customFile">Upload Foto</label>
                <input type="file" name='foto' class="form-control" id="customFile" />-->
            </div>

            <p>
                <label for="p1"></label>
                <input type="text" name="p1" placeholder="p1" />
            </p>

            <h3>Penyebab dan Gejala</h3>
            <p>
                <label for="p2"></label>
                <input type="text" name="p2" placeholder="p2" />
            </p>

            <h3>Sejarah Munculnya Pertama Kali</h3>
            <p>
                <label for="p3"></label>
                <input type="text" name="p3" placeholder="p3" />
            </p>

            <h3>Pencegahan Penyebaran</h3>
            <p>
                <label for="p4"></label>
                <input type="text" name="p4" placeholder="p4" />
            </p>

            <h3>Cara Penanganan Penyakit</h3>
            <p>
                <label for="p5"></label>
                <input type="text" name="p5" placeholder="p5" />
            </p>
            
            <P>
                    <input type="submit" value="Tambah" name="tambah" class="btn btn-success">
            </P>
            
        </div>
    </form>
    </div>
</fieldset>

    <!-- Footer-->
    <div class="footer pt-5">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-1 justify-content-between ">
                <div class="col col-lg-6 mb-lg-0 mb-4">
                    <h2 class="fw-bold text-white mb-3">informasi penyakit</h2>
                    <p class="text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum placeat reiciendis ad, tempore tempora velit modi sint sunt hic mollitia!</p>
                    
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
    <!-- Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--JS-->
    <script src="../../dist/js/script.js"></script>
    <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
