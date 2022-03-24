 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto" style="font-size: 20px"><a href="#">PT. Diya Properti Utama</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/"><span>Home</span></a>
        </li>
        <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/dashboard/id">Indonesia</a></li>
            <li><a href="/dashboard/en">English</a></li>
          </ul>
        </li>
        <li><a href="{{ route('news.index') }}">Berita</a></li>
        <li><a href="{{ route('login') }}" class="getstarted">Login</a></li>
          {{-- <li><a href="{{ route('login') }}"><span>Login</span></a></li> --}}
          {{-- <li><a href="#portfolio"><span>Galeri</span></a></li>
          <li><a href="#kontak"><span>Kontak</span></a></li> --}}


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
