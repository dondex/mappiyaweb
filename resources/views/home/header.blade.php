<nav class="navbar navbar-expand-lg bg-light main-nav fixed-top">
    <div class="container my-1">
      <a class="navbar-brand mappiya-logo smooth-scroll" href="#"><img src="./image/mappiya-logo.png" alt="mappiya logo"><span class="mappiya-logo-text"></span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link mx-2 smooth-scroll" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 smooth-scroll" href="#mobile-section">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 smooth-scroll" href="#web-dev">Website Development</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 smooth-scroll" href="#pricing-card">Prices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 smooth-scroll" href="#partners">Partners</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link me-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Padala / Pabili / Pa Groceries</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Taxi Services (Pick & Drop)</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Cooperative Members</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Ofw Discount</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Senior Citizen</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Booking tour in K.S.A</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Liason service in POLO = خدمة الاتصال في المكتب العمل الفلبيني</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">General Service</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="#footer-section">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="#!">اللغة العربية</a>
          </li>

          @if (Route::has('login'))

            @auth

            <li class="nav-item">
                <x-app-layout>

                </x-app-layout>
            </li>

            @else

            <li class="nav-item">
                <a class="btn btn-primary mx-3 my-1" id="logincss" href="{{ route('login') }}">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-success  my-1" id="registercss" href="{{ route('register') }}">Register</a>
            </li>

            @endauth

          @endif

        </ul>
      </div>
    </div>
</nav>
