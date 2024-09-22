<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../dash/vendors/feather/feather.css">
  <link rel="stylesheet" href="../dash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../dash/vendors/dash/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../dash/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../dash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="../text/css" href="dash/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../dash/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../dash/images/favicon.png" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="dash/images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="dash/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
             

            </div>
          </li>
        </ul>
        
        <ul class="navbar-nav navbar-nav-right">
        <button class="btn btn-success ml-5  ">Search </button> 
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="dash/images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a href="{{ route('logout') }}" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
            <div class="tiles primary"></div>
          </div>
        </div>
      </div>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="fetch">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Contact Record</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="driver">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Driver Record</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="driverdata">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Show Driver data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="showf">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Show Feedback </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addblog">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Add Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fetchblog">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">View Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fetchcheck">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Uer Checkout Record</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bookf">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Booking Record</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Service</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="insertservice">Insert service</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewservice">View Service</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="insertproduct">Add product</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewproduct">View Product</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Reception</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="receptionist">Add Receptionist</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewreception">View Receptionist</a></li>
                <li class="nav-item"> <a class="nav-link" href="receptionsalary">Reception Salary</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Stylist</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="stylist">Add Stylist</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewstylist">View Stylist</a></li>
                <li class="nav-item"> <a class="nav-link" href="stylistsalary">Stylist Salary</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="fetchdate">View Date&Time</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Appointments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="bookf">Appointment record</a></li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>

<div class="container-fluid">
<form action="{{URL::TO('/adminbookupdate/'. $mydata->id)}}" method="POST">
    @csrf
      <div class="row">
        <div class="col-lg-10">
            <br><br>
     
    <label for="">Name*</label>
    <br>
    <input type="text" value="{{$mydata->Full_name}}" name="form_name" class="form-control mt-3 w-50" >
    <br>
    <label for="">Email*</label>
    <br>
    <input type="email" value="{{$mydata->Email}}" name="form_email" class="form-control mt-3 w-50">
    <br>
    <label for="">Ambulance*</label>
    <br>
    <input type="text" value="{{$mydata->Drivers}}" name="form_driver" class="form-control mt-3 w-50">
    <br>
    <label for="">Status*</label>
    <select  value="{{$mydata->Status}}" name="form_status" class="form-control mt-3 w-50">
        <option value="Select Status" disabled selected> Select Status</option>
        <option value="Approved">Approved</option>
        <option value="Denied">Denied</option></select>
    
    <button class="btn btn-info mt-3">EDIT RECORD</button>

        </div>
      </div>
      </form>

      </div>

    