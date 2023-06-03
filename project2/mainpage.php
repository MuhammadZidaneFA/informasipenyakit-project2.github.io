<?php include("conf/koneksi.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Penyakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
    <!--font poppin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!--font awesome cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="shortcut icon" href="assets/icon/nm.png" type="image/x-icon">

<!--CSS-->
<link rel="stylesheet" href="dist/css/mainpage.css">
<!--animate style-->
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!--AOS-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
  <body id="home">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark animate__animated animate__fadeInDown">
        <div class="container">
          <a class="navbar-brand fw-bold fs-4" href="index.html">Informasi Penyakit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
              <li class="nav-item">
                <a class="nav-link active mx-1" aria-current="page" href="mainpage.html">Home</a>
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

    <!--hero-->
    <div class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">Hello!<br>Let's get started</h1>
                    <p class="text-white mb-4 text-opacity-75 animate__animated animate__fadeInUp animate__delay-1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, id?</p>
                    <!--<a href="sign-in.html" ><button class="btn btn-success btn-lg rounded-1 me-2 animate__animated animate__fadeInUp animate__delay-1s">Join With Us</button></a>
                    <a href="#about"><button class="btn btn-outline-light btn-lg rounded-1 animate__animated animate__fadeInUp animate__delay-1s">About Us</button></a>-->
                </div>
            </div>
        </div>
    </div>
    <!--hero-->

    <!--About-->
    <!--<div class="about" id="about">
        <div class="container-fluid">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col text-center py-5 text-white">
                    <h2>2000+</h2>
                    <h2 class="fw-bold mb-2">Projects Selesai</h2>
                    <p> Lorem ipsum dolor sit amet consectetur<br/> 
                        adipisicing elit. Dicta.</p>
                </div>
                <div class="col text-center py-5 bg-success text-white">
                    <h2>250+</h2>
                    <h2 class="fw-bold mb-2">Perusahaan Bekerjasama</h2>
                    <p>Lorem ipsum dolor sit amet <br/>consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>-->
    <!--About-->

    <!--Projects-->
    <div class="projects" id="projects">
    
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="border-bottom pb-2 fw-semibold" data-aos="fade-right" data-aos-duration="1000"> Data - Data <br>Penyakit yang tersedia</h2>
                </div>
            </div>
            <div class="card-group">
            <?php
              $sql = "SELECT * FROM nama_penyakit";
              $query = mysqli_query($db, $sql);
              $no=1;
              while($nama_penyakit = mysqli_fetch_array($query)){
            ?>
          
          <!--<div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <button class="btn btn-outline-dark "><a href="penyakit/html/influenza.html" class="text-decoration-none text-reset"><img src="assets/img/projects/projects-6.jpg" class="w-100 mb-3" alt="unsplash.com">
                      <h4 class="fw-semibold">Influenza</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button></a>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                  <button class="btn btn-outline-dark"><a href="penyakit/html/covid.html" class="text-decoration-none text-reset"><img src="assets/img/projects/projects-7.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Covid-19</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button></a>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                  <button class="btn btn-outline-dark"><a href="penyakit/html/tuberkulosis.html" class="text-decoration-none text-reset"><img src="assets/img/projects/projects-8.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Tuberkulosis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button></a>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                  <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-9.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">pneumonia</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                  <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-10.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold">Hepatitis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
                </div>
                <div class="abc col  btn-light text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                  <button class="btn btn-outline-dark w-100 h-100 mb-3"><a href="login-v2.php"></a>
                    <h4 class="fw-semibold">  see more</h4></a>
                  </button>
              </div>
            </div>-->
        
        
                <!--<div class="card">
                    <a href="penyakit/html/test.php?id=<?= $nama_penyakit['id']; ?>" class="text-muted text-decoration-none">
                      <img class="card-img-top" src="./image/<?php //echo $data['img1']; ?>">" alt="Card image cap">
                      <div class="card-body btn">
                        <h5 class="card-title"><?= $nama_penyakit['nama'];?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </a>
                </div>-->

              <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 p-3">
                <div class="card text-center" style="width: 26rem;">
                  <img class="card-img-top" src="admin/image/<?php echo $nama_penyakit['img1']; ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?= $nama_penyakit['nama'];?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="penyakit/html/test.php?id=<?= $nama_penyakit['id']; ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>



            <!--<div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 g-4">
              <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                  <button class="btn btn-outline-dark"><a href="penyakit/html/test.php?id=<?= $nama_penyakit['id']; ?>" class="text-decoration-none text-reset"><img src="assets/img/projects/projects-6.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold"><?= $nama_penyakit['nama'];?></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></A></button>
              </div>
            </div>-->
            <?php
              }
            ?>
            </div>
        </div>
              <!--<div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                  <button class="btn btn-outline-dark"><A href="penyakit/html/influenza.html" class="text-decoration-none text-reset"><img src="assets/img/projects/projects-6.jpg" class="w-100 mb-3" alt="unsplash.com">
                    <h4 class="fw-semibold"><?= $nama_penyakit['nama'];?></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></A></button>
              </div>
              <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <button class="btn btn-outline-dark"><A href="penyakit/html/covid.html" class="text-decoration-none text-reset"><img src="assets/img/projects/projects-7.jpg" class="w-100 mb-3" alt="unsplash.com">
                  <h4 class="fw-semibold">Covid-19</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></A></button>
              </div>
              <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <button class="btn btn-outline-dark"><A href="penyakit/html/tuberkulosis.html" class="text-decoration-none text-reset"><img src="assets/img/projects/projects-8.jpg" class="w-100 mb-3" alt="unsplash.com">
                  <h4 class="fw-semibold">Tuberkulosis</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></A></button>
              </div>
              <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-9.jpg" class="w-100 mb-3" alt="unsplash.com">
                  <h4 class="fw-semibold">pneumonia</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
              </div>
              <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-10.jpg" class="w-100 mb-3" alt="unsplash.com">
                  <h4 class="fw-semibold">Hepatitis</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
              </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-5.jpg" class="w-100 mb-3" alt="unsplash.com">
                      <h4 class="fw-semibold">Interior</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
                  </div>
                  <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-5.jpg" class="w-100 mb-3" alt="unsplash.com">
                      <h4 class="fw-semibold">Interior</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
                  </div>
                  <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-5.jpg" class="w-100 mb-3" alt="unsplash.com">
                      <h4 class="fw-semibold">Interior</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
                  </div>
                  <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-5.jpg" class="w-100 mb-3" alt="unsplash.com">
                      <h4 class="fw-semibold">Interior</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button>
                  </div>
                  <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <button class="btn btn-outline-dark"><img src="assets/img/projects/projects-1.jpg" class="w-100 mb-3" alt="unsplash.com">
                      <h4 class="fw-semibold">House</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fuga.</p></button></div>-->
            
            
        </div>
        
    <!--Projects-->

    <!--Service-->
    <div class="services" id="services" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="fw-semibold border-bottom pb-2">Layanan<br> Yang Dapat di Berikan</h2>
                </div>
            </div>
            <div class="row align-items-center row-cols-lg-2 row-cols-1">
                <div class="col d-flex d-lg-block d-none">
                    <img src="assets/img/services/services-3.jpg" class="me-1" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="assets/img/services/services-2.jpg" alt=""  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                </div>
                <div class="col">
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"> <i class="fa-regular fa-circle-check"></i> data-data yang akurat</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"> <i class="fa-regular fa-circle-check"></i>karyawan yang berpengalaman</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600"> <i class="fa-regular fa-circle-check"></i>Tersedia Produk-Produk Interior</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700"> <i class="fa-regular fa-circle-check"></i>Informasi yang up-to date</h5>
                    <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800"> <i class="fa-regular fa-circle-check"></i>Harga Yang Terjangkaut</h5>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--Service-->

    <!--FAQ-->
    <div class="faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="fw-semibold border-bottom pb-2" data-aos="fade-right" data-aos-duration="1000">
                        Pertanyaan<br> yang biasa di tanyakan
                    </h2>
                </div>
            </div>
            <div class="row row-cols-lg-2 row-cols-1 g-4 pt-4">
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Bagaimana Cara Daftarnya?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, veritatis! Nesciunt dicta animi amet rem dolorem! Corporis vero nihil fugit ex rem magni eos totam laudantium, impedit repudiandae exercitationem molestias?
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                    <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                apakah ada forum diskusi?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, veritatis! Nesciunt dicta animi amet rem dolorem! Corporis vero nihil fugit ex rem magni eos totam laudantium, impedit repudiandae exercitationem molestias?
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                berapa DP pembangunanya?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, veritatis! Nesciunt dicta animi amet rem dolorem! Corporis vero nihil fugit ex rem magni eos totam laudantium, impedit repudiandae exercitationem molestias?
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                apakah produk-produk interior mahal?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, veritatis! Nesciunt dicta animi amet rem dolorem! Corporis vero nihil fugit ex rem magni eos totam laudantium, impedit repudiandae exercitationem molestias?
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                    <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                apakah sudah terverifikasi?
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, veritatis! Nesciunt dicta animi amet rem dolorem! Corporis vero nihil fugit ex rem magni eos totam laudantium, impedit repudiandae exercitationem molestias?
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
                    <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                              <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                apakah dapat menawar harga?
                              </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, veritatis! Nesciunt dicta animi amet rem dolorem! Corporis vero nihil fugit ex rem magni eos totam laudantium, impedit repudiandae exercitationem molestias?
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!--FAQ-->

    <!-- Footer-->
    <div class="footer pt-5">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-1 justify-content-between ">
                <div class="col col-lg-6 mb-lg-0 mb-4">
                    <h2 class="fw-bold text-white mb-3">ngoding</h2>
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
    <script src="dist/js/script.js"></script>
    <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
