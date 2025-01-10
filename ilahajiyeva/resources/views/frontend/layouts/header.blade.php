<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="{{asset($slider->profile_pic)}}" alt="{{$slider->name}}" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <h4>{{$slider->name}}</h2>

    </a>

    <div class="social-links text-center">
      <a href="https://github.com/ilahajiyeva" target="_blank" class="twitter"><i class="bi bi-github"></i></a>
      <a href="https://facebook.com/HajiyevaIlahe" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://instagram.com/ilahajiyeva" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://linkedin.com/in/ilahajiyeva" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{route('index')}}" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#skills"><i class="bi bi-file-earmark-text navicon"></i> Skills</a></li>
        <li><a href="#"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>
