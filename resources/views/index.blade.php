<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Personal Portfolio Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>

  <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon"/>
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}">
  
  <link rel="stylesheet" type="text/css" href=".{{ asset('assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/fancybox/css/jquery.fancybox.min.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/virtual.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/topbar.virtual.css') }}">

  
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>

      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
    </div>
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url('{{ asset('public/assets/img/bg_image_1.jpg') }}')">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">MythicalCV</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item">
              <a href="#skill" class="nav-link" data-animate="scrolling">Skill</a>
            </li>
            <li class="nav-item">
              <a href="#education" class="nav-link" data-animate="scrolling">Education</a>
            </li>
            <li class="nav-item">
              <a href="#experience" class="nav-link" data-animate="scrolling">Experience</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#galeri" class="nav-link" data-animate="scrolling">Galeri</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-theme-outline" onclick="redirectToIndex2()">Switch</button>
            </li>
            
            <script>
              function redirectToIndex2() {
                window.location.href = '/index';
              }
            </script>
            
          
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->

    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome</h5>
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">{{ @$homeRecord[0]->your_name}}</b></h1>
      <div class="badge">{{ @$homeRecord[0]->work_experience}}</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="{{ asset('storage/imgs/'.@$homeRecord[0]->profile) }}" alt="Photo Profile"></div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light">{{ @$homeRecord[0]->your_name}}</h1>
          <h5 class="fg-theme mb-3">{{ @$homeRecord[0]->work_experience}}</h5>
          <p class="text-muted">{{ @$homeRecord[0]->description}}</p>
          <ul class="theme-list">
            <li><b>Date of Birth:</b>{{ @$aboutRecord[0]->date_of_birth }}</li>
            <li><b>Gender:</b>{{ @$aboutRecord[0]->gender }}</li>
            <li><b>Nationality:</b>{{ @$aboutRecord[0]->nationality }}</li>
            <li><b>Phone:</b>{{ @$aboutRecord[0]->phone }}</li>
            <li><b>Email:</b>{{ @$aboutRecord[0]->email }}</li>
          </ul>
          <a class="btn btn-theme-outline" href="{{ url('download-pdf') }}">Download CV</a>
        </div>
      </div>
    </div>
    <div class="container py-5" id="skill">
      <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
        <div class="row py-3">

            <?php foreach ($skillRecord as $record): ?>
                <div class="col-md-6">
                    <div class="px-lg-3">
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption"><?= $record->skill ?></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?= $record->percentage ?>%" aria-valuenow="<?= $record->percentage ?>" aria-valuemin="0" aria-valuemax="100"><?= $record->percentage ?>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <div class="container pt-5" id="education">
      <div class="row">
      <div class="col-md-6 wow fadeInRight">
          <h2 class="fw-normal">Education</h2>
          <ul class="timeline mt-4 pr-md-5">

              <?php foreach ($educationRecord as $record): ?>
                  <li>
                      <div class="title"><?= $record->tahun_masuk ?> - <?= $record->tahun_lulus ?></div>
                      <div class="details">
                          <h5><?= $record->tingkat_pendidikan ?></h5>
                          <small class="fg-theme"><?= $record->nama_instansi ?></small>
                      </div>
                  </li>
              <?php endforeach; ?>

          </ul>
      </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms" id="experience">
          <h2 class="fw-normal">Experience</h2>
          <ul class="timeline mt-4 pr-md-5">

              <?php foreach ($experienceRecord as $record): ?>
                  <li>
                      <div class="title"><?= $record->periode ?></div>
                      <div class="details">
                          <h5><?= $record->organisasi ?></h5>
                          <small class="fg-theme"><?= $record->jabatan ?> <?= $record->bidang ?> </small>
                          <p><?= $record->keterangan ?></p>
                      </div>
                  </li>
              <?php endforeach; ?>

          </ul>
      </div>

      </div>
    </div>
  </div>
  
  <!-- Portfolio page -->
  <div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Portfolio</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>

      <div class="gridder my-3">
        @foreach($portfolioRecord as $value)
        <div class="grid-item apps wow zoomIn">
          <div class="img-place" data-src="{{ asset('storage/portfolio/'.$value->image) }}" data-fancybox data-caption="<h5 class='fg-theme'>{{ $value->title }}</h5>">
            <img src="{{ asset('storage/portfolio/'.$value->image) }}"  alt="">
            <div class="img-caption">
              <h5 class="fg-theme">{{ $value->title }}</h5>

            </div>
          </div>
        </div>
        @endforeach
     </div>
    </div> 
  </div> <!-- End Portfolio page -->             

  <!-- Galeri page -->
  <div class="vg-page page-galeri" id="galeri">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Galeri</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">My Activity</h1>

      <div class="gridder my-3">
        @foreach($galeriRecord as $value)
        <div class="grid-item apps wow zoomIn">
          <div class="img-place" data-src="{{ asset('storage/galeri/'.$value->image) }}" data-fancybox data-caption="<h5 class='fg-theme'>{{ $value->title }}</h5>">
            <img src="{{ asset('storage/galeri/'.$value->image) }}"  alt="">
            <div class="img-caption">
              <h5 class="fg-theme">{{ $value->title }}</h5>

            </div>
          </div>
        </div>
        @endforeach
     </div>

    </div> 
  </div> <!-- End Galeri page -->              
  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Personal Portfolio Website</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">{{ @$aboutRecord[0]->address }}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>{{ @$aboutRecord[0]->email }}</li>
              <li>{{ @$aboutRecord[0]->phone }}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3">

        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;2023. All right reserved | Personal Portfolio Website <span class="ti-heart fg-theme-red"></span></p>
        </div>
      </div> <!-- End footer -->
    
  


  <script src="{{ asset('/assets/js/jquery-3.5.1.min.js') }}"></script>
    
  <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    
  <script src="{{ asset('/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    
  <script src="{{ asset('/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    
  <script src="{{ asset('/assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    
  <script src="{{ asset('/assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    
  <script src="{{ asset('/assets/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>

  <script src="{{ asset('/assets/vendor/wow/wow.min.js') }}"></script>

  <script src="{{ asset('/assets/vendor/animateNumber/jquery.animateNumber.min.js') }}"></script>

  <script src="{{ asset('/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>

  <script src="{{ asset('/assets/js/google-maps.js') }}"></script>
    
  <script src="{{ asset('/assets/js/topbar-virtual.js') }}"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>