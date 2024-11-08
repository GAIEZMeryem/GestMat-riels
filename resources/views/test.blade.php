<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->


  <link href="{{ asset('assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/fontawesome/css/brands.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/fontawesome/css/solid.css') }}" rel="stylesheet">
  <link rel="icon" href="{{asset('assets/img/logo_ms.png')}}" type="image/icon type">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  
    <title>Ministère de la Santé et de la Protection sociale</title>
</head>
<body>



    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <img src="{{asset('assets/img/logo_ms.png')}}" alt="">
          <span class="d-none d-lg-block">Gest-Matériels</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->
      
     
  
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
  
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->
  
          <li class="nav-item dropdown">
  
            <a class="nav-link nav-icon" href="" >
              <i class="bi bi-cart"></i>
             
            </a><!-- End Notification Icon -->
  
           <!-- End Notification Dropdown Items -->
  
          </li>
          <li class="nav-item dropdown">
  
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">*</span>
            </a><!-- End Notification Icon -->
  
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
              Vous avez des nouvelles notifications
                <a href=""><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
            
 
            </ul><!-- End Notification Dropdown Items -->
  
          </li><!-- End Notification Nav -->
  

        
          <li class="nav-item dropdown pe-3">
  
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
              <span class="d-none d-md-block dropdown-toggle ps-2">{{session("Nom")}}</span>
            </a><!-- End Profile Iamge Icon -->
  
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>{{session("Nom")}}</h6>
                <span>@if (session("type_compte")==1)
                    Responsable du materiel
                
                    @else 
                    Simple User
                @endif</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li>
                <a class="dropdown-item d-flex align-items-center" href="">
                  <i class="bi bi-person"></i>
                  <span>Mon Profile</span>
                </a>
              </li>
           
  
              
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
     

<form action=" " method="POST">
  @csrf
  <li class="nav-item">
    <button class="dropdown-item d-flex align-items-center" type="submit" >
      <i class="bi bi-box-arrow-right"></i>
      <span>Se déconnecter</span>
    </button>
  </li><!-- End Logout Page Nav -->
</form>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
  
      <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="">
            <i class="bi bi-house"></i>
            <span>Accueil</span>
          </a>
        </li>
 
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route("addMateriel")}}">
              <i class="bi bi-person"></i>
              <span>Ajouter un matériel informatique</span>
            </a>
          
  
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route("showMateriels")}}">
              <i class="bi bi-person"></i>
              <span>Consulter la liste des matériels informatiques</span>
            </a>
          


<li class="nav-item">
    <a class="nav-link collapsed" href="{{route("declarerPanne")}}">
      <i class="bi bi-person"></i>
      <span>Declarer une panne</span>
    </a>
  


  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route("listerPannes")}}">
      <i class="bi bi-person"></i>
      <span>Consulter la liste des pannes</span>
    </a>
  
      
        <li class="nav-heading" style="color: #012970">Pages</li>
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route("profil")}}">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li><!-- End Profile Page Nav -->
  
  
        <form action="" method="POST">
  @csrf
  <li class="nav-item">
    <button class="nav-link collapsed" type="submit" style=" border: none;">
      <i class="bi bi-box-arrow-right"></i>
      <span>Se déconnecter</span>
    </button>
  </li><!-- End Logout Page Nav -->
</form>

  
       
      </ul>
  
    </aside><!-- End Sidebar-->
  
    <main id="main" class="main">
  
      @yield('title')<!-- End Page Title -->
  @yield('content')
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; 2023 - <strong><span>Ministère de la Santé et de la Protection sociale 
                                            Délégation de Sefrou </span></strong>. 
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>