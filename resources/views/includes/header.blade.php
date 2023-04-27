<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
           
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/asset/images/logo.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link edit " href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link edit " href="{{url('/aboutus')}}">ABOUT US</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle edit" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SERVICES
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('web-design')}}">web design</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-marketing')}}">Digital marketing</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-solutions')}}">Digital solutions</a></li>
                  <li><a class="dropdown-item" href="{{url('seo-resources')}}">seo resources</a></li>
                  <li><a class="dropdown-item" href="{{url('free-consultation')}}">free consultation</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle edit" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Digital Solutions
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('digital-solutions/success-essentials')}}">success essentials</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-solutions/competitive-edge')}}">competitve edge</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-solutions/social-ecommerce')}}">social ecommerce</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-solutions/pay-per-lead')}}">pay per lead</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-solutions/pay-per-performance-2')}}">pay per performance</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-solutions/branding2')}}">branding</a></li>
                  <li><a class="dropdown-item" href="{{url('digital-solutions/maintenance')}}">maintenace</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle edit" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  resources
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('seo-resources/website-audit')}}">free website audit</a></li>
                  <li><a class="dropdown-item" href="{{url('seo-resources/competitor-analysis')}}">competitive analiysis</a></li>
                  <li><a class="dropdown-item" href="{{url('seo-resources/website-speed')}}">website speed grade</a></li>
                  <li><a class="dropdown-item" href="{{url('free-consultation/get-a-quote')}}">Get a Quote</a></li>
                  <li><a class="dropdown-item" href="{{url('free-consultation/get-a-proposal')}}">get a proposal</a></li>
                  <li><a class="dropdown-item" href="{{url('analysis/appointment')}}">shedule an appointment</a></li>
                  <li><a class="dropdown-item" href="{{url('contact-us')}}">contact us</a></li>
                  <li><a class="dropdown-item" href="{{url('plan/list')}}">buy plan</a></li>
                </ul>
              </li>
              @auth                
                  <a class="login" href="{{url('dashboard/customer')}}"><i class="fa-solid fa-user"></i>Dashboard</a>
              @endauth

              @guest
                  <a class="login" href="{{url('login')}}"><i class="fa-solid fa-user"></i>login </a>
                  <a class="login" href="{{url('register')}}"><i class="fa-solid fa-user"></i>register</a>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
</header>
    