<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT.Antares Hasanah Nirmala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('import/assets/img/logosatu.jpg')}}" rel="icon">
  <link href="{{ asset('import/assets/img/logosatu1.jpg')}}" rel="logosatu1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('import/assets/css/main.css')}}" rel="stylesheet">
</head>

<style>
  :root {
  --color-primary: #ab0492 !important;
  }

  .hero .icon-box{
    background: #b7009b !important;
  }

  .contact .info-item{
    background-color: #b7009b !important;
  }

  .topbar {
    background: #b7009b !important;
  }

  .call-to-action .play-btn {
  background: radial-gradient(var(--color-primary) 50%, rgba(183, 0, 155, 0.4) 52%) !important;
}

.call-to-action .play-btn:before {
  border: 5px solid rgba(183, 0, 155, 0.7) !important;
}

.services .service-item:hover .icon:before {
  background: #b7009b !important;
}

</style>
<body>
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="antarestourtravel@gmail.com">antarestourtravel@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+6281222081021</span></i>
      </div>
    </div>
  </section>
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
      <img src="{{ asset('import/assets/img/logosatu.jpg')}}" class="rounded-pill" alt="">
        <h1 class="mx-2">Antares<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Antares</span></h2>
          <p>SAY YES TO NEW ADVENTURES</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=GJ7_DxPBUQA&ab" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('import/assets/img/trav.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Kejutan Paket Liburan</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Promo discount hingga 70%</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lokasi Kami</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Product Kami</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>PT.ANTARES HASANAH NIRMALA merupakan perusahaan yang Bergerak dibidang penyedia jasa perjalanan, penyelengaraan event dan MICE, kami hadir dan berusaha memberikan pelayanan terbaik dalam penyelengaraan Tour and Travel, Event Organizer maupun pelaksanaan Meeting, Incentives, Conventions and Exhibition yang disingkat dengan MICE. Kami akan selalu berusaha memberikan pelayanan yang terbaik dan berkesan bagi semua lapisan masyarakat yang menggunakan jasa kami serta akan selalu menjadi partner terbaik bagi anda.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-12">
           <div class="row content ps-0 ps-lg-5">
            <h3>VISI & MISI</h3>
            <div class="col-lg-6">
              <p class="fst-italic">
                  VISI
                </p>
              <p>Menjadi penyedia jasa terbaik di bidang Tour and Travel, Event
                  Organizer serta MICE dengan mengutamakan keamanan,
                  kenyamanan, kepuasan serta keselamatan bersama.
                  Memperkenalkan pariwisata Indonesia di kancah internasional
                  Memperkenalkan Indonesia sebagai tempat pelaksanaan MICE
                  terbaik bagi para pelaku bisnis internasional.</p>
            </div>
            <div class="col-lg-6">
            <p class="fst-italic">
                  MISI
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Memberikan pelayanan dan keamanan yang maksimal.</li>
                <li><i class="bi bi-check-circle-fill"></i> Memberikan fasilitas berstandar internasiona.</li>
                <li><i class="bi bi-check-circle-fill"></i> Memberikan fasilitas berstandar internasiona.</li>
              </ul>
            </div>
           </div>
          </div>
          <div class="col-lg-12">
            <div class="row content ps-0 ps-lg-5">
              <h3>Content Service</h3>
              <div class="col-lg-4">
                <p class="fst-italic">
                  Tour And Travel
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Program tour Domestik.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Program tour Internasional.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Paket individual tour Internasional dan domestik.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Tiket pesawat Internasional dan Domestik.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Tiket Kereta.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Pemesanan Hotel internasional dan Domestik.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Rental Bus atau Kendaraan Pribad.</li>
                </ul>
              </div>
              <div class="col-lg-4">
                <div class="content ps-0 ps-lg-5">
                  <p class="fst-italic">
                    M I C E
                  </p>
                  <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Meeting.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Incentive.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Convention.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Exhibition.</li>
                  </ul>
              </div>
              </div>
              <div class="col-lg-4">
                <div class="content ps-0 ps-lg-5">
                  <p class="fst-italic">
                    Event Organizer
                  </p>
                  <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Promosi Produk.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Launching Produk.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Acara Musik.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Acara Teater.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Talk Show.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Anniversary.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Pernikahan.</li>
                  </ul>
                </div>
            </div>
            </div>
          </div>
        </div>
    </section>
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=GJ7_DxPBUQA&ab" class="glightbox play-btn"></a>
        <h3>LABUAN BAJO</h3>
        <p> Jalan yang sulit seringkali mengarah ke tempat yang Indah.</p>
      </div>
    </section>
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Services</h2>
        </div>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>TOUR AND TRAVEL</h3>
              <p>Di era global ini pertumbuhan pariwisata terus meningkat dan kebutuhan berwisata pun semakin menggeliat. Jasa tour and Travel sangat dibutuhkan saat mereka yang akan melakukan perjalanan wisata tak memiliki banyak waktu untuk mempersiapkan sendiri. Maka dari itu kami ada untuk membantu perencanaan dan pelaksanaan wisata yang mengutamakan keamanan, kenyamanan serta keselamatan bersama. Kami berdedikasi untuk memberikan liburan yang berkesan bagi semua lapisan masyarakat dan kami akan selalu menjadi partner terbaik dalam perencanaan dan pelaksanaan wisata anda.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>MEETING, INCENTIVES, CONVENTIONS, EXEBITION</h3>
              <p>Dewasa ini Indonesia sudah berkembang menjadi salah satu Negara tujuan bisnis dan wisata. Serta perkembangan bisnis dalam negeri pun semakin meningkat seiring berkembangnya zaman. Maka dari itu kebutuhan akan pelaksanaan MICE pun menjadi aspek yang penting guna memperkuat jaringan bisnis baik intern maupun ekstern perusahaan. Untuk itu kami sebagai penyedia jasa pelaksana MICE yang berdedikasi untuk menjadi penyedia jasa terbaik akan membantu anda untuk mempersiapkan dan menjadikan kegiatan MICE anda berjalan dengan lancar dan berkesan baik bagi para tamu yang hadir dalam acara anda tersebut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>EVENT ORGANIZER </h3>
              <p>Seiring berkembangnya zaman, dunia bisnis di Indonesia juga mengalami perkembangan yang pesat untuk itu salah satu bentuk dalam memajukan bisnis yang dimiliki adalah dengan cara promosi dan salah satu cara yang dibutuhkan untuk berpromosi adalah dengan hadirnya event organizer untuk menjadi alternatif ketika penggunaan media baik cetak maupun elektronik sudah tak lagi efektif dalam penyampaian pesan kepada sasaran. Pada prinsipnya EVENT ORGANIZER memberdayakan sumber daya manusia untuk merancang sebuah acara dengan tujuan mendatangkan benefit secara material ataupun non material sesuai dengan keinginan dari penyelenggara acara. Banyak aspek yang di sediakan oleh penyedia jasa EO (Event Organizer) seperti launching produk, anniversary, talkshow, promosi dalam bentuk pameran ataupun pertunjukan musik serta acara pendukung lainnya bahkan sampai acara pribadi non perusahaan seperti acara ulang tahun ataupun pernikahan. Kami akan menjadi partner terbaik anda mulai dari tahap perencanaan, persiapan, pelaksanaan serta sampai event selesai dengan baik dan berkesan bagi audience serta menjadi kepuasan untuk anda.</p>
            </div>
          </div>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact</h2>
        </div>
        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Ruko Bandung City View 2 No.R9, Bandung, Jawa Barat</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>antarestourtravel@gmail.com</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 81222081021
                  </p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Senin-Sabtu: 11.00 - 17.00 WIB</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Antares</span>
          </a>
          <p>EXPLORE THE WORLD AND CREATE YOUR MOMENT WITH ANTARES</p>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Tentang ANTARES</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Produk</h4>
          <ul>
            <li><a href="#">Tiket Pesawat</a></li>
            <li><a href="#">Tiket Kereta Api</a></li>
            <li><a href="#">Pesawat + Hotel</a></li>
            <li><a href="#">Paket Liburan</a></li>
            <li><a href="#">Asuransi</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
          Ruko Bandung City View 2 <br>
          No.R9, Bandung, Jawa Barat<br>
            Indonesia <br><br>
            <strong>Phone:</strong> +62 81222081021
                  <br>
            <strong>Email:</strong> antarestourtravel@gmail.com<br>
          </p>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Antares</span></strong>. All Rights Reserved
      </div>
      </div>
  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src=" {{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src=" {{ asset('import/assets/vendor/aos/aos.js')}}"></script>
  <script src=" {{ asset('import/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src=" {{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src=" {{ asset('import/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src=" {{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src=" {{ asset('import/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('import/assets/js/main.js')}}"></script>
</body>
</html>