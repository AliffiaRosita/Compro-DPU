@extends('guest.partials.main')
@section('content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel  carousel-fade"  style="height: 800px">


    {{-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> --}}
    <div class="video-background">
        <div class="video-foreground">
          <iframe src="https://www.youtube.com/embed/F65KEKPPFTY?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=F65KEKPPFTY&mute=1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
        </div>
      </div>
      <div class="carousel-inner" role="listbox">


        <!-- Slide 1 -->
        <div class="carousel-item active" >
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>



      </div>
      {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a> --}}



    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>@lang('home.about.title')</h2>
            <h3>@lang('home.about.subAbout')</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                    @lang('home.about.description')
            </p>
            <strong>Misi</strong>

            <ul>
              <li><i class="ri-check-double-line"></i> @lang('home.about.mision.1')</li>
              <li><i class="ri-check-double-line"></i> @lang('home.about.mision.2')</li>
              <li><i class="ri-check-double-line"></i> @lang('home.about.mision.3')</li>
              <li><i class="ri-check-double-line"></i> @lang('home.about.mision.4')</li>

            </ul>
            <p class="fst-italic">
              <strong>Visi</strong> @lang('home.about.vision')
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="organization" >
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h2 class="text-center fw-bolder">Struktur Organisasi</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12" style="font-size:9px; font-weight:bold">
                <div id="tree-simple" > </div>
            </div>
        </div>
    </section>
    {{-- <section id="timeline" class="container">
        <div class="row ">
            <div class="col-6">
                <div class="timeline">
                    <div class="outer">
                      <div class="card">
                        <div class="info">
                          <h3 class="title">Title 1</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div>
                      <div class="card">
                        <div class="info">
                          <h3 class="title">Title 2</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div>
                      <div class="card">
                        <div class="info">
                          <h3 class="title">Title 3</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div>
                      <div class="card">
                        <div class="info">
                          <h3 class="title">Title 4</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div>
                      <div class="card">
                        <div class="info">
                          <h3 class="title">Title 5</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section> --}}

    <section id="proyek">
        <div class="container">
            <h2 class="text-center fw-bolder">Proyek DPU</h2>
            <hr style="color:#d9242d;width:300px;height:3px;" class="mb-3 ms-auto me-auto d-block ">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner">
                  <div class="carousel-item active section-bg p-3 pb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/proyek/apartemen.jpg" width="500px" alt="">
                        </div>
                        <div class="col-md-6">

                            <h4>Apartemen PW Suite</h4>
                            <p >PW Suite atau sebelumnya biasa di sebut Apartemen Pandan Wangi Suite, merupakan apartemen terbesar yang terletak di Kota Samarinda, ibukota Kalimantan Timur, berdekatan dengan pusat perbelanjaan, pusat olahraga dan pusat perkantoran. Berlokasi di bagian utara samarinda dengan pemandangan alam yang hijau dan asri, Apartemen Pandan Wangi Suite adalah satu-satunya Apartemen terbesar yang terletak di jantung kota Samarinda. Dengan Fasilitas kamar yang ada seperti Lemari pakaian, Kitchen set, Toilet dalam, Water heater, Balkon, Tv led, Kulkas, AC, Free WiFi dll. Serta fasilitas menunjang lainnya.</p>
                            <a href="https://sites.google.com/view/pwsuiteofficial/pw-suite-apartment?authuser=0" class="btn btn-sm btn-danger" target="_blank">Lihat Website <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item section-bg  p-3 pb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/proyek/mansion.jpg" width="500px" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4>Pandan Wangi Mansion</h4>
                            <p >Pandan Wangi mansion & Signature 2 merupakan kawasan hunian bergengsi yang terletak di kota Samarinda yang dikembangkan oleh PT. Diya Property Utama, Pandan Wangi Mansion & Signature memiliki lokasi yang strategis di Jalan Abdul. Wahab Sjahranie salah satu jalur utama kota Samarinda, dan hanya 10 menit dari pusat kota dan 30 menit dari Bandara Internasional APT Pranoto. Dengan master plan seluas 3,4 hektar, Pandan Wangi Mansion & Signature menghadirkan berbagai cluster perumahan dengan konsep custom arsitektur yang elegan dan modern. Sebagai komitmen  untuk menciptakan hunian berkelas yang lengkap, Pandan Wangi Mansion & Signature juga diimbangi dengan kawasan komersial dan bisnis, taman, danau, pusat kebugaran, dan fasilitas lainnya. </p>
                            <a href="https://sites.google.com/view/pandanwangimansion/halaman-muka?authuser=0" class="btn btn-sm btn-danger ">Lihat Website <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item section-bg  p-3 pb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/proyek/greencity.jpeg" width="500px" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4>Green City</h4>

                            <a href="" class="btn btn-danger btn-sm" target="_blank">Lihat Website <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item section-bg  p-3 pb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/proyek/villa.jpg" width="500px" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4>Villa De Royal</h4>
                            <p>Lokasi Villa De Royal terpilih untuk dikembangkan karena lahannya yang strategis di tengah kota, berada di kaki bukit dengan pemandangan yang bebas ke Sungai Mahakam. Serasa berumah di pegunungan dengan pemandangan yang indah, cocok untuk investasi di masa Pandemi Covid19. Villa De Royal didesain dengan konsep modern minimalis, memiliki 2 tipe rumah yakni tipe 54/98 dan tipe 90/126. Jumlah unit yang dipasarkan sangat terbatas hanya 62 unit rumah. Sebagai hunian yang modern, Villa De Royal memiliki jalan kawasan yang lebar dengan pepohonan dan taman yang membuat lingkungan asri.</p>
                            <a href="https://sites.google.com/view/pwsuiteofficial/pw-suite-apartment?authuser=0" class="btn btn-sm btn-danger" target="_blank">Lihat Website <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/suite.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/cafe.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/kitchen.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/mansion.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/signature.png" class="img-fluid" alt="">
          </div>

          {{-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div> --}}

        </div>

      </div>
    </section><!-- End Clients Section -->




    <section id="portfolio" class="portfolio">
        <div class="container">
        <h2 class="text-center mb-4">Galeri</h2>
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Pandan Wangi Mansion</li>
                <li data-filter=".filter-apart">Apartemen PW Suite</li>
                <li data-filter=".filter-web">Villa De Royal</li>
                <li data-filter=".filter-web">Green City</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-apart">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/apartemen/1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  {{-- <h4>App 1</h4>
                  <p>App</p> --}}
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/apartemen/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-apart">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/apartemen/2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  {{-- <h4>Web 3</h4>
                  <p>Web</p> --}}
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/apartemen/2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-apart">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/apartemen/6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  {{-- <h4>App 2</h4>
                  <p>App</p> --}}
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/apartemen/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-apart">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/apartemen/4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/apartemen/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-apart">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/apartemen/5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/apartemen/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <section id="kontak" class="contact">
        <div class="container">
            <h2>Kontak</h2>
            <hr style="color: #d9242d; width:200px; height:3px">
          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p> JL. A. Wahab Sjahranie - Komp Apartemen PW Suite Sempaja Selatan Samarinda Utara</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>(0541) 252 1913</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
                @if (Session::get('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              <form action="{{ route('message.store') }}" method="post" role="form" >
                @csrf
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
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                {{-- <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> --}}
                <div class="text-center"><button type="submit" class="btn btn-danger">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
@endsection

